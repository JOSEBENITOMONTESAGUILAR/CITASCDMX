<?php

namespace App\Http\Controllers\Citas;

use App\Http\Controllers\Controller;
use App\Models\citaModel;
use App\Traits\CitasRepositories;
use Illuminate\Http\Request;

class AgendarController extends Controller
{
    use CitasRepositories;
    public function registro($tramite){
        return view('citas.agendar')->with('tramite',$tramite);
    }

    public function horario(Request $request, $tramite){

        $cita = $this->cita()->getCita($request->placa, $request->curp);

        if($cita instanceof citaModel){
            $tramites = $this->tramite()->all();
            return view('citas.bienvenida')
                ->with('tramites',$tramites)
                ->withErrors(['creo' => 0]);
        }

        $modulos = $this->modulos()->all();
        return view('citas.horario')
            ->with('tramite',$tramite)
            ->with('placa',$request->placa)
            ->with('curp',$request->curp)
            ->with('modulos',$modulos);
    }

    public function guardar(Request $request){
        $cita = $this->cita()->getCita($request->placa, $request->curp);

        if($cita instanceof citaModel){
            $tramites = $this->tramite()->all();
            return view('citas.bienvenida')
                ->with('tramites',$tramites)
                ->withErrors(['creo' => 0]);
        }

        $tramite = $this->tramite()->findBy('name',$request->tramite);
        $modulo = $this->modulos()->findBy('direccion',$request->direccion);
        $nuevaCita = $this->cita()->crearCita(
            $request->placa,
            $request->curp,
            $tramite->id_cat_tramite,
            $modulo->id_modulo,
            $request->fecha
        );

        if($nuevaCita instanceof citaModel){
            return view('citas.bienvenida')->withErrors(['creo' => 1]);
        }else{
            return view('citas.bienvenida')->withErrors(['creo' => 2]);
        }
    }
}
