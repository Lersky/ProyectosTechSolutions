<?php

namespace App\Http\Controllers;

use App\Models\ProyectoModel;
use Illuminate\Http\Request;

class GetController extends Controller
{
    public function __invoke(){

        $lista = ProyectoModel::$proyectos;
        return $lista;
    }
}
