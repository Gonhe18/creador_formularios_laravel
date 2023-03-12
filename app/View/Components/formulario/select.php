<?php

namespace App\View\Components\formulario;

use Illuminate\View\Component;

class select extends Component
{
    public $name;
    public $option;
    public $label;
    public $validacion;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $option, $label, $validacion)
    {
        $this->name = $name;
        $this->option = $option;
        $this->label = $label;
        $this->validacion = $validacion;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.formulario.select');
    }
}