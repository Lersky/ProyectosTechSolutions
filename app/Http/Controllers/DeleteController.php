<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke($id){
        return view("DeleteView", ['id' => $id]);
    }
}
