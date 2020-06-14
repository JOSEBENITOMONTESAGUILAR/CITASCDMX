<?php

namespace App\Http\Controllers\Citas;

use App\Http\Controllers\Controller;
use App\Models\citaModel;
use App\Traits\CitasRepositories;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    use CitasRepositories;
    public function consulta(Request $request){
        $cita = $this->cita()->getCita($request->placa,$request->curp);

        if($cita instanceof citaModel){
            return view('citas.consulta')->with('cita',$cita);
        }else{
            return view('citas.bienvenida')->withErrors(['creo' => 3]);
        }
    }
}
