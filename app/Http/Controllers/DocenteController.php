<?php

namespace App\Http\Controllers;
use App\Models\Docente;

use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function consultar(){
        $docentes = Docente::all();
        return view('administrador.docente.consultar', compact('docentes'));
    }

    public function registrar(){

        return view('administrador.docente.registrar');
        
        
    }

    public function guardar(Request $datos){ 

        $docente = Docente::create($datos->post());
        return redirect('/homeAdministrador/consultar/docente');




    }

}
