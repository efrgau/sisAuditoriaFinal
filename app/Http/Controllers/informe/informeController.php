<?php

namespace App\Http\Controllers\informe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class informeController extends Controller
{
    public function informeGeneral()
    {
        return view('informes.informeGeneral');
    }
    public function informeTabla()
    {
        return view('informes.informetable');
    }
    public function informeResultadosA()
    {
        return view('informes.informeResultado1');
    }
}
