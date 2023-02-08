<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function consultar(){
        //consultas el alumno
        return view('alumno.consultar');
    }

    public function registrar(){
        //consultas el alumno
        return view('alumno.registrar');
    }
}
