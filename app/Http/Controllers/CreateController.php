<?php

namespace App\Http\Controllers;

use App\Models\ProyectoModel;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke(){
        return view("CreateView");
    }
    /*public function create($nuevo){
        $nuevo = new ProyectoModel();
    }
        */
}
