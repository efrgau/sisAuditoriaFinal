<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function registraUsuario()
    {
        /*if(Auth::check())
        {
            return redirect('/home');
        }*/
        return view('auth/register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'identification' => $request->identification,
            'celular' => $request->celular,
            'password' => $request->password,
        ]);

        return redirect('/login')->with('success', 'Registro exitoso');





        // $user = User::create([$resquest->validated()]);
        // return redirect('/login')->with('success', 'Cuenta creada satisfactoriamente!');
    }
}
