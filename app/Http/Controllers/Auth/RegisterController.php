<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    |
    */

//    use RegistersUsers;

    public function showRegistrationForm()
    {
        return view('auth.register');
    }




    protected function create(RegisterRequest $request)
    {
        $data = $request->validated();
      $user =  User::create([
            'login' => $data['login'],
            'password' => Hash::make($data['password']),
        ]);
        if($user) {
            Auth::login($user);
            return redirect()->route('post.index');
        }


    }
}
