<?php

namespace App\View\Components\formulario;

use Illuminate\View\Component;

class inputs extends Component
{
    public $type;
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
    public function __construct($type, $name, $placeholder = null, $label, $value, $validacion)
    {
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        if ($placeholder != null) {
            $this->placeholder = $placeholder;
        }
        $this->validacion = $validacion;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.formulario.inputs');
    }
}