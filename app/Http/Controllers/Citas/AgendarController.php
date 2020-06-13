<?php

namespace App\Http\Controllers\Citas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgendarController extends Controller
{
    public function registro($tramite){
        return view('citas.agendar')->with('tramite',$tramite);
    }

    public function horario($tramite){
        return view('citas.horario');
    }
}
