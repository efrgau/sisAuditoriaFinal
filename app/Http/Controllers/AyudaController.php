<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AyudaController extends Controller
{
    public function ayuda()
    {
        return view('Ayuda');
    }
    public function descripcion()
    {
        return view('descripcioniso');
    }

    public function proteger()
    {
        return view('proteger');
    }

    public function detectar()
    {
        return view('detectar');
    }
}
