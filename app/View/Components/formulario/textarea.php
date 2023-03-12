<?php

namespace App\View\Components\formulario;

use Illuminate\View\Component;

class textarea extends Component
{
    public $name;
    public $placeholder;
    public $label;
    public $value;
    public $validacion;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $placeholder, $label, $value, $validacion)
    {
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->label = $label;
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
        return view('components.formulario.textarea');
    }
}