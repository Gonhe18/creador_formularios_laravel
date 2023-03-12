<?php

namespace App\View\Components\formulario;;

use Illuminate\View\Component;

class checkRadio extends Component
{
    public $type;
    public $name;
    public $label;
    public $option;
    public $value;
    public $validacion;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $name, $label, $option, $value, $validacion)
    {
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->option = $option;
        $this->value = $value;
        $this->validacion = $validacion;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        return view('components.formulario.check-radio');
    }
}