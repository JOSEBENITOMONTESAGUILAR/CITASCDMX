<?php


namespace App\Repositories;

use App\Models\citaModel;
use Illuminate\Support\Facades\DB;

class CitaRepository extends Repository
{
    public function model()
    {
        return citaModel::class;
    }

    public function getCita($placa, $curp, $estatus = 1)
    {
        $cita = $this->model->where('placa', $placa)
            ->where("curp", $curp)
            ->where('estatus',1)->first();

        if(is_null($cita)){
            return false;
        }

        return $cita;
    }


    public function getDisponibilidad($modulo, $fecha)
    {
        return $this->model->whereDate('fecha_cita', $fecha)
            ->where("modulo_id", $modulo)
            ->where('estatus',1)->count();
    }

    public function getCitaPrevia($placa, $folio)
    {
        $r = $this->model->where("placa", $placa)
            ->where("folio_documental", $folio)
            ->where('estatus',1)->first();

        if (!is_null($r)) {
            return $r;
        } else {
            return false;
        }
    }

    public function getCitaFechasOcupadas($id_modulo, $fecha)
    {
        $citas = $this->model->select('fecha_cita')
            ->whereDate('fecha_cita', $fecha)
            ->where("modulo_id", $id_modulo)
            ->where('estatus',1)->get();

        $fechas = array();
        foreach ($citas as $cita) {
            $fechas[] = $cita["fecha_cita"];
        }
        return $fechas;
    }

    public function crearCita($placa,$curp,$tramite_id,$modulo_id,$fecha)
    {
        try{
            return $this->model->create([
                'placa' => $placa,
                'curp' => $curp,
                'tramite_id' => $tramite_id,
                'modulo_id' => $modulo_id,
                'fecha_cita' => $fecha,
                'estatus' => 1,
                'ip' => request()->getClientIp()
            ]);
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }

    public function reagendar($id)
    {
        try{
            $cita = $this->model->where('id_cita',$id)->first();

            $estatus = $cita->update(["estatus" => 2]);

            if($cita instanceof Cita and $estatus === true){
                return $cita;
            }

            return false;
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }

    public function maximoCitasPorCurp($placa, $folio){

        $db_ruta = DB::connection('ruta_2020')->getDatabaseName();
        $db_citas = DB::connection('mysql')->getDatabaseName();

        return DB::select("SELECT dg.placa, pt.curp_rfc, ct.fecha_cita from ".$db_ruta.".datos_generales dg
                    join ".$db_ruta.".propietario  pt on dg.propietario_id = pt.id_propietario
                    join ".$db_ruta.".estatus es on dg.id_datos_generales = es.datos_generales_id
                    join ".$db_citas.".cita ct on es.id_estatus = ct.folio_documental
                    where ct.estatus = 1
                    and pt.id_propietario in (
                        SELECT propietario_id from ".$db_ruta.".datos_generales dg
                        join ".$db_ruta.".estatus es on dg.id_datos_generales = es.datos_generales_id
                        where dg.placa = '".$placa."' and es.id_estatus = '".$folio."'
                    )"
                );
    }
}
