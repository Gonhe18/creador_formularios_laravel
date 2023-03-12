<?php

namespace App\View\Components;

use App\Models\Campos_formularios_model;
use App\Models\Reglas_validacion_model;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class formInputEmail extends Component
{
    public $reglas_validacion  = null;
    public $name;
    public $label;
    public $placeholder;
    public $validacion;
    public function __construct($validacion = null, $name = null, $label = null, $placeholder = null)
    {
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->validacion = $validacion;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // $campo = Campos_formularios_model::where('categoria', 'input')
        //     ->where('tipo', 'email')
        //     ->first();
        // $valid = Reglas_validacion_model::all();

        // foreach ($valid as $val) {
        //     if (in_array($campo->id, json_decode($val->campos))) {
        //         $this->reglas_validacion[$val->regla] = $val->ref;
        //     }
        // }

        return view('components.form-input-email');
    }
}
