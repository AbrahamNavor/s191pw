<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $titulo;
    public $descripcion;
    public $boton;
    public function __construct($titulo, $boton)
    {
        $this->titulo = $titulo;
        $this->boton = $boton;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
