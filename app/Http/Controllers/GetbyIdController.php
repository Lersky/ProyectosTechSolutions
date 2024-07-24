<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetbyIdController extends Controller
{
    public function __invoke($id){
        return view("GetbyIdView", ['id' => $id]);
    }
}
