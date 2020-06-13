<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class administradorController extends Controller
{
    public function listadoCitas()
    {
        return view ('Administrador.listado_citas');
    }
}
