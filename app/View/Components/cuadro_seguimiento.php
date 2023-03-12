<?php

namespace App\View\Components;

use Illuminate\View\Component;

class cuadro_seguimiento extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $estados;
    public $fondo;
    public $totalSeg;
    public $ruta;
    public function __construct($estados, $fondo, $totalSeg, $ruta)
    {
        $this->estados = $estados;
        $this->fondo = $fondo;
        $this->totalSeg = $totalSeg;
        $this->ruta = $ruta;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cuadro_seguimiento');
    }
}