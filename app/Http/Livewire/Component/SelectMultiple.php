<?php

namespace App\Http\Livewire\Component;

use App\Models\Campos_formularios_model;
use App\Models\Reglas_validacion_model;
use Livewire\Component;

class SelectMultiple extends Component
{
    // public $reglas_validacion;

    public $campos;
    public $label;
    public $name;
    public $wireModel;
    public $validacionSelect;

    public $selectPrincipal = [];
    public $seleccionador;
    public $seleccionados = [];

    public $dataEstado;
    public $nameHidden;
    public $validacionHidden;

    public function mount()
    {
        $campo = Campos_formularios_model::whereIn('id', json_decode($this->campos))
            ->get();

        $valid = Reglas_validacion_model::all();

        foreach ($campo as $camp) {
            foreach ($valid as $val) {
                if (in_array($camp->id, json_decode($val->campos))) {
                    $this->selectPrincipal[$val->regla] = $val->ref;
                }
            }
        }
    }



    public function render()
    {
        return view('livewire.component.select-multiple');
    }
}
