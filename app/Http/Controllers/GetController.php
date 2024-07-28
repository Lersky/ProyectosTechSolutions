<?php

namespace App\Http\Controllers;

use App\Models\ProyectoModel;
use Illuminate\Http\Request;

class GetController extends Controller
{
    public function __invoke(){

        
        {
        // Aquí normalmente obtendrías los proyectos de la base de datos
        // Por ahora, usaremos un array dentro del modelo como ejemplo
        
        $lista = ProyectoModel::$proyectos;
        return view('home', ['proyectos' => $lista]);
    }
}

}