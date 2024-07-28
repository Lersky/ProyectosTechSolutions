<?php

namespace App\Http\Controllers;

use App\Models\ProyectoModel;
use Illuminate\Http\Request;

class GetController extends Controller
{
    public function __invoke(){

        /*
        {
        // Aquí normalmente obtendrías los proyectos de la base de datos
        // Por ahora, usaremos un array de ejemplo
        $proyectos = [
            ['id' => 1, 'nombre' => 'Proyecto 1', 'fecha_inicio' => '2024-01-01', 'estado' => 'Activo', 'responsable' => 'Juan', 'monto' => 10000],
            ['id' => 2, 'nombre' => 'Proyecto 2', 'fecha_inicio' => '2024-02-01', 'estado' => 'Pendiente', 'responsable' => 'María', 'monto' => 15000],
        ];

        return view('home', ['proyectos' => $proyectos]);
    }
        */
        $lista = ProyectoModel::$proyectos;
        return $lista;
    }
}

