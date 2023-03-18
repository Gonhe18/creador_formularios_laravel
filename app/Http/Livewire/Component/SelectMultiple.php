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

    public $reglasValidacion;
    public $agregar;
    public $eliminarTodos;
    public $agregarTodos;


    // public function recuperoInfo($id)
    // {
    //     // dd($id);


    //     $this->dispatchBrowserEvent('editMultiple', 'r_validacion');
    // }






    public function agregar()
    {
        if ($this->seleccionador != null && $this->seleccionador !=  '') {
            $reglas = Reglas_validacion_model::where('regla', $this->seleccionador)->first();
            $this->seleccionados[$reglas->regla] = $reglas->ref;
            unset($this->selectPrincipal[$reglas->regla]);
        }
        // $this->emit('selected', $this->seleccionados);
    }

    public function agregarTodos()
    {
        $campo = Campos_formularios_model::whereIn('id', json_decode($this->campos))
            ->get();
        $reglas =  Reglas_validacion_model::all();

        foreach ($campo as $camp) {
            foreach ($reglas as $val) {
                if (in_array($camp->id, json_decode($val->campos))) {
                    $this->seleccionados[$val->regla] = $val->ref;
                }
            }
        }
        $this->reset(['selectPrincipal']);
        // $this->emit('selected', $this->seleccionados);
    }

    public function eliminar($id)
    {
        $reglas = Reglas_validacion_model::where('regla', $id)->first();

        $this->selectPrincipal[$reglas->regla] =  $reglas->ref;

        unset($this->seleccionados[$id]);
        $this->reset(['seleccionador']);
        // $this->emit('selected', $this->seleccionados);
    }

    public function eliminarTodos()
    {
        $this->mount();
        $this->reset(['seleccionador', 'seleccionados']);

        // $this->emit('selected', $this->seleccionados);
    }

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
