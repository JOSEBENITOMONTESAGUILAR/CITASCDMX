<?php

namespace App\Http\Controllers\Citas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgendarController extends Controller
{
    public function registro(){
        return view('citas.agendar');
    }
}
