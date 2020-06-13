<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class citaModel extends Model
{
    protected $connection = 'mysql';
    protected $table = 'cita';
    public $timestamps = false;

    protected $fillable = [
        'id_cita',
        'curp',
        'placa',
        'tramite_id',
        'modulo_id',
        'fecha_cita',
        'estatus',
        'ip',
        'created_at',
        'updated_at'
    ];

    protected $prymaryKey = "id_cita";
}
