<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cat_moduloModel extends Model
{
    protected $connection = 'mysql';
    protected $table = 'cat_modulo';
    public $timestamps = false;

    protected $fillable = [
        'id_modulo',
        'estatus',
        'nombre',
        'direccion',
        'num_citas',
        'num_ventanillas',
        'altitud',
        'latitud'
    ];

    protected $prymaryKey = "id_modulo";
}
