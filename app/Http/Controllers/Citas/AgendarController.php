<?php

namespace App\Http\Controllers\Citas;

use App\Http\Controllers\Controller;
use App\Traits\CitasRepositories;
use Illuminate\Http\Request;

class AgendarController extends Controller
{
    use CitasRepositories;
    public function registro($tramite){
        return view('citas.agendar')->with('tramite',$tramite);
    }

    public function horario($tramite){
        $modulos = $this->modulos()->all();
        return view('citas.horario')->with('modulos',$modulos);
    }
}
