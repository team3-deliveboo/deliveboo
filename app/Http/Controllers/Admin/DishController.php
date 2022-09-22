<?php

namespace App\Http\Controllers\Admin;

use App\Dish;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SlugDish
{ 
    public function createSlug($name, $id = 0)
    {
        $slug = Str::slug($name);
        $allSlugs = $this->getRelatedSlugs($slug, $id);

        if (!$allSlugs->contains('slug', $slug)) {
            return $slug;
        }

        for ($i = 0; $i <= 20; $i++) {
            $newSlug = $slug . '-' . $i;
            if (!$allSlugs->contains('slug', $newSlug)) {
                return $newSlug;
            }
        }
        throw new \Exception('Non posso creare questo slug, scegli un altro nome.');
    }

    protected function getRelatedSlugs($slug, $id = 0)
    {
        return Dish::select('slug')->where('slug', 'like', $slug . '%')
            ->where('id', '<>', $id)
            ->get();
    }

}
class DishController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function findBySlug($slug){
        $dish = Dish::where('slug' , $slug)->first();
        if(!$dish){
            abort(404);

        }
        return $dish;
    }

    public function index()
    {
        $user = Auth::user();
        $dishes = Dish::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        return view('admin.dishes.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dishes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:2',
            'course' => 'nullable',
            'description' => 'required|min:10',
            'img' => 'nullable|image',
            'price' => 'required|numeric|min:0.01|max:999',
            'visibility' => 'nullable|boolean',
            'slug' => ' nullable',
        ]);


        // Salvare a db i dati
        
        $dish = new Dish();
        $slug = new SlugDish();
        $dish->slug = $slug->createSlug($request->name);
        $validatedData['course'] = ucwords($request->course);
        $dish->fill($validatedData);
        $dish->user_id = Auth::user()->id;
        if (key_exists("img", $validatedData)) {
            // Salvo il file sul mio server
            // ritorna il link interno a dove si trova il file
            $img = Storage::put('dishImg', $validatedData['img']);
            // $coverImg = $validatedData["cover_img"]->store("/post_covers");
            // salvo dentro i dati di questo post il link al file appena caricato
            $dish->img = $img;
        }
        $dish->save();
        return redirect()->route('admin.dishes.show', $dish->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $dish = $this->findBySlug($slug);
        return view('admin.dishes.show', compact('dish'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $dishes = $this->findBySlug($slug);
        return view('admin.dishes.edit', compact('dishes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:2',
            'course' => 'nullable',
            'description' => 'required|min:10',
            'img' => 'nullable|image',
            'price' => 'required|numeric|min:0.01|max:999',
            'visibility' => 'nullable|boolean',
            'slug' => ' nullable',
        ]);

        $dish = $this->findBySlug($slug);

        if (key_exists("img", $validatedData)) {
            // se il post ha già un immagine,
            // PRIMA di caricare quella nuova, cancello quella vecchia
            if ($dish->img) {
                Storage::delete(($dish->img));
            }
            // Salvo il file sul mio server
            // ritorna il link interno a dove si trova il file
            $img = Storage::put('userImg', $validatedData['img']);

            // $coverImg = $validatedData["cover_img"]->store("/post_covers");
            // salvo dentro i dati di questo post il link al file appena caricato
            $dish->img = $img;
        }

        // // cover_img non è obbligatorio, di conseguenza dobbiamo controllare 
        // // se ci è stato inviato dall'utente
        // if (key_exists("cover_img", $validatedData)) {
        //     // se il post ha già un immagine,
        //     // PRIMA di caricare quella nuova, cancello quella vecchia
        //     if ($post->cover_img) {
        //         Storage::delete($post->cover_img);
        //     }

        //     // Salvo il file sul mio server
        //     // ritorna il link interno a dove si trova il file
        //     $coverImg = Storage::put("/post_covers", $validatedData["cover_img"]);
        //     // $coverImg = $validatedData["cover_img"]->store("/post_covers");

        //     // salvo dentro i dati di questo post il link al file appena caricato
        //     $post->cover_img = $coverImg;
        // }

        if ($validatedData['name'] !== $dish->name) {
            // genero un nuovo slug
            $slug = new SlugDish;
            $dish->slug = $slug->createSlug($validatedData['name']);
        }

        // // toglie dalla tabella ponte TUTTE le relazione del $post
        // // $post->tags()->detach();

        // /*
        //     - se l'utente mi invia dei tag, devo associarli al post corrente
        //     - se non mi invia i tag, devo rimuovere tutte le associazioni esistenti per il post corrente
        // */
        // if (key_exists("tags", $validatedData)) {
        //     // Aggiunge nella tabella ponte una riga per ogni tag da associare
        //     // $post->tags()->attach($validatedData["tags"]);
        //     $post->tags()->sync($validatedData["tags"]);
        // } else {
        //     $post->tags()->sync([]);
        $validatedData['course'] = ucwords($request->course);

        // }

        $dish->update($validatedData);
        return redirect()->route('admin.dishes.show', $dish->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $dish = $this->findBySlug($slug);
        $dish->delete();
        return redirect()->route('admin.dishes.index')->with('status' , 'Il tuo piatto è stato eliminato con successo.');
    }
}
