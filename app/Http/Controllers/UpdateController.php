<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke($id){
        return view("UpdateView", ['id' => $id]);
    }
}
