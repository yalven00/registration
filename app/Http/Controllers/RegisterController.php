<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
    

class RegisterController extends Controller
{

    public function  index()
    {
       return view('registration.index');
    }

    public function store(RegisterRequest $request)
    {
        $user = new User([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'email' => $request->input('email')
        ]);

        $user->save();
        auth()->login($user);
        return redirect("dashboard")->withSuccess('You already login ok');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

       if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in Memember Area ok');
        }
   
      return redirect("login")->withSuccess('E-mail or password are not correct');
         
    }
 

    public function  dashboard()
    {
    return view('registration.dashboard');
    }


    public function destroy()
    {
    Auth::logout();
    return redirect()->to('/register');
    }
}


