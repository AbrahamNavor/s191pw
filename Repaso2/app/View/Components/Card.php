<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $titulo;
    public $boton;

    public function __construct($titulo, $boton)
    {
        $this->titulo = $titulo;
        $this->boton = $boton;
    }

    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
