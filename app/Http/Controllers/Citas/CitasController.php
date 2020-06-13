<?php

namespace App\Http\Controllers\Citas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CitasController extends Controller
{
    public function bienvenida(){
        return view('citas.bienvenida');
    }
}
