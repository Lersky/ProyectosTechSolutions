<?php

namespace App\Http\Controllers;

use App\Models\ProyectoModel;
use Illuminate\Http\Request;

class GetbyIdController extends Controller
{
    public function __invoke($id){

        $proyectobyid = ProyectoModel::findById( $id );
        

        return view("GetbyIdView", compact ('proyectobyid'));
    }
}
