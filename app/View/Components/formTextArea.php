<?php

namespace App\View\Components;

use App\Models\Campos_formularios_model;
use App\Models\Reglas_validacion_model;
use Illuminate\View\Component;

class formTextArea extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $reglas_validacion;
    public $name;
    public $label;
    public $placeholder;
    public $validacion;

    public function __construct($name = null, $label = null, $placeholder = null, $validacion = null)
    {
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->validacion = $validacion;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // $campo = Campos_formularios_model::where('categoria', 'textarea')->first();
        // $valid = Reglas_validacion_model::all();

        // foreach ($valid as $val) {
        //     if (in_array($campo->id, json_decode($val->campos))) {
        //         $this->reglas_validacion[$val->regla] = $val->ref;
        //     }
        // }

        return view('components.form-text-area');
    }
}