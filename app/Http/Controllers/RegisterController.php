<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
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

    public function register(RegisterRequest $resquest)
    {
        $user = User::create([$resquest->validated()]);
        return redirect('/login')->with('success', 'Cuenta creada satisfactoriamente!');
    }
}