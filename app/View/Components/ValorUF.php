<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ValorUF extends Component
{
    
    public $valoruf;

    public function __construct()
    {
        $this->valoruf = $this->fetchvaloruf();
    }

    public function fetchvaloruf()
    {
        $respuesta = Http::get('');
        if ($respuesta->successful())
        {
            return $respuesta->json()['valoruf'];
        }
        return null;
    }
 
    public function render(): View|Closure|string
    {
        return view('components.valor-u-f');
    }
}
