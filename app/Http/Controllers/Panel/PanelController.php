<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function home(){
        return view('home');
    }

    public function listado(){
        return view('panel.listado');
    }

    public function informacion($id_persona)
    {
        dd(1234);
        return view('panel.informacion');
    }
}
