<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IsoController extends Controller
{
    public function identificar()
    {
        return view('identificar');
    }

    public function proteger()
    {
        return view('proteger');
    }

    public function detectar()
    {
        return view('detectar');
    }

    public function responder()
    {
        return view('responder');
    }

    public function recuperar()
    {
        return view('recuperar');
    }
}
