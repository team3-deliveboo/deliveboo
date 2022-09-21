<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Admin\Slug;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

// class SlugUser
// {
//     public function createSlugUser($name, $id = 0)
//     {
//         $slug = Str::slug($name);
//         $allSlugs = $this->getRelatedSlugsUser($slug, $id);

//         if (!$allSlugs->contains('slug', $slug)) {
//             return $slug;
//         }
//         throw new \Exception('Non posso creare questo slug, scegli un altro nome.');
//     }

//     protected function getRelatedSlugsUser($slug, $id = 0)
//     {
//         return User::select('slug')->where('slug', 'like', $slug . '%')
//             ->where('id', '<>', $id)
//             ->get();
//     }

// }
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |{{  }}
    */

    use RegistersUsers;


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'min:6', 'max:15'],
            'address' => ['required', 'string', 'min:10', 'max:160'],
            'vat' => ['required', 'string', 'min:11', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'slug' => ['nullable']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $slug = new Slug;
        return User::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'vat' => $data['vat'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'slug' => $slug->createSlugUser($data['name']),
        ]);

        // $user->details = new UserDetail();
        // $user->details->user_id = $user->id;
        // $user->details->save();
        // return $user;

        // @dd($data);
    }
}
