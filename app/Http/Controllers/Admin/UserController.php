<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\User;
use App\Category;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;




class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function findBySlugUser($slug)
    {
        $user = User::where('slug', $slug)->first();
        if (!$user) {
            abort(404);
        }
        return $user;
    }


    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$categories = Category::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     "title" => "required|min:10",
        //     "content" => "required|min:10",
        //     "category_id" => "nullable|exists:categories,id",
        //     "tags" => "nullable|exists:tags,id",
        //     "cover_img" => "required|image",
        // ]);

        // // Salvare a db i dati
        // $post = new Post();
        // $post->fill($validatedData);
        // $post->user_id = Auth::user()->id;

        // $post->save();

        // // Nel caso dello store, PRIMA di associare i tag, devo salvare il post creato
        // // in modo da permettere al DB di generare un ID per il post.
        // // Questo id è essenziale per fare l'associazione nella tabella ponte
        // if (key_exists("tags", $validatedData)) {
        //     $post->tags()->attach($validatedData["tags"]);
        // }

        // // redirect su una pagina desiderata - di solito show
        // return redirect()->route("admin.posts.show", $post->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $user = $this->findBySlugUser($slug);
        // $user = User::findOrFail($id);
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $user  = User::findOrFail($id);
        $user = Auth::user();
        $categories = Category::all();
        return view('admin.users.edit', compact('user', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'required|min:5',
            'phone' => 'required|min:6',
            'vat' => 'required|min:11',
            'address' => 'required',
            'categories' => 'nullable|exists:categories,id',
            'img' => 'nullable|image'

        ]);
        // $user = $this->findOrFail($id);
        /* img non è obbligatorio, di conseguenza dobbiamo controllare 
        se ci è stato inviato dall'utente */
        if (key_exists("img", $validatedData)) {
            // se il post ha già un immagine,
            // PRIMA di caricare quella nuova, cancello quella vecchia
            if ($user->img) {
                Storage::delete(($user->img));
            }
            // Salvo il file sul mio server
            // ritorna il link interno a dove si trova il file
            $img = Storage::put('userImg', $validatedData['img']);

            // $coverImg = $validatedData["cover_img"]->store("/post_covers");
            // salvo dentro i dati di questo post il link al file appena caricato
            $user->img = $img;
            
        }





        if ($validatedData['name'] !== $user->name) {
            // genero un nuovo slug
            $slug = new Slug;
            $user->slug = $slug->createSlugUser($validatedData['name']);
        }

        if (key_exists('categories', $validatedData)) {
            $user->categories()->sync($validatedData['categories']);
        } else {
            $user->categories()->sync([]);
        }

        $user->update($validatedData);

        return redirect()->route('admin.users.index', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
