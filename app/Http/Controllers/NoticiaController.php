<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    function publicar(Request $datos){
        
        $noticia = Noticia::create($datos->post());
        return redirect('/homeAdministrador');
        
    }
}
