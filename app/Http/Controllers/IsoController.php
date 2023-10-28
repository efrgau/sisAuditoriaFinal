<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IsoController extends Controller
{
    public function identificar()
    {
        return view('evaluaciones.identificar');
    }

    public function proteger()
    {
        return view('evaluaciones.proteger');
    }

    public function detectar()
    {
        return view('evaluaciones.detectar');
    }

    public function responder()
    {
        return view('evaluaciones.responder');
    }

    public function recuperar()
    {
        return view('evaluaciones.recuperar');
    }
}
