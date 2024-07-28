<?php

namespace App\Http\Controllers;

use App\Models\ProyectoModel;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view("CreateView");
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'nombre' => 'required',
            'fechainicio' => 'required|date',
            'estado' => 'required',
            'responsable' => 'required',
            'monto' => 'required|numeric',
        ]);

        // En lugar de guardar, simplemente redirigimos con un mensaje de éxito. Ya que no esta conectado a una base de datos
        return redirect('/')->with('success', 'Proyecto creado exitosamente (simulado)');
    }
}