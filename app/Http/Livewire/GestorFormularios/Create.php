<?php

namespace App\Http\Livewire\GestorFormularios;

use App\Models\Campos_formularios_model;
use App\Models\Estados_model;
use App\Models\Procesos_model;
use App\Models\Reglas_validacion_model;
use App\Models\Tipo_seguimientos_model;
use Livewire\Component;

class Create extends Component
{
    public $catInput = [];
    public $tipoInput = [];
    public $select;
    public $propiedades;
    public $action = 1;
    public $visionCreate = '';
    public $view = 'index';
    public $selectCatInput, $selectTypeInput;
    public $categoriaInput, $typeInput = null;
    public $categoriaActual, $typeActual;
    public $selectValidacion = [];
    public $inputMin = false, $inputMax = false;
    public $min, $max;

    public $modelForm, $idModelForm = null, $nameForm;

    public $selectProceso, $selectTipoSeguimiento, $selectEstadoSeg;
    public $procesos;
    public $tipo_seg;
    public $tipoActual;
    public $estadoSeg = null;

    protected $listeners = ["saveCampo", "resetCampos", "saveForm", "store", 'selectValidacion'];

    public function updatedSelectProceso()
    {
        if ($this->selectProceso == 'tipoSeguimiento') {
            $this->tipo_seg = Tipo_seguimientos_model::select("id", "descripcion")->pluck("descripcion", 'id');
        }
    }

    public function cambioProceso($proceso)
    {
        if ($proceso != 'tipoSeguimiento') {
            $this->tipo_seg = null;
            $this->estadoSeg = null;
            $this->reset(['selectTipoSeguimiento', 'selectEstadoSeg']);
        }
    }

    public function updatedSelectTipoSeguimiento()
    {
        $this->estadoSeg = Estados_model::select('id', 'estado')->pluck('estado', 'id');
    }

    public function cambioTipoSeg($tipo)
    {
        if ($tipo == "") {
            $this->estadoSeg = null;
            $this->reset(['selectEstadoSeg']);
        }

        if ($tipo != $this->tipoActual) {
            $this->reset(['selectEstadoSeg']);
        }
    }

    public function updatedSelectCatInput($input)
    {
        if ($input == 'input') {
            $this->tipoInput = Campos_formularios_model::select('tipo')->whereNotNull('tipo')->pluck('tipo');
            $this->typeInput = $input;
        } else {
            $this->categoriaInput = $input;
        }
        // // $this->dispatchBrowserEvent('camposSelect');
    }

    public function cambioCatInput($input)
    {
        if ($input != 'input') {
            $this->reset(["tipoInput", 'selectTypeInput']);
        } else {
            $this->reset(["categoriaInput"]);
        }
    }

    public function updatedselectTypeInput($type)
    {
        $this->categoriaInput = 'input';
        $this->typeInput = $type;
        // $this->dispatchBrowserEvent('camposSelect');
    }

    public function cambioTypeInput($type)
    {
        $this->reset(['typeInput']);
        // $this->categoriaInput = $this->selectCatInput;
        $this->typeInput = $type;
    }

    public function selectValidacion($reglas)
    {
        if (in_array("min", $reglas)) {
            $this->inputMin = true;
        } else {
            $this->inputMin = false;
            $this->min = "";
        }
        if (in_array("max", $reglas)) {
            $this->inputMax = true;
        } else {
            $this->inputMax = false;
            $this->max = "";
        }
    }


    public function render()
    {
        $this->procesos = Procesos_model::select("ref", "modulo")->pluck("modulo", 'ref');
        $this->catInput = Campos_formularios_model::select("categoria")
            ->distinct()
            ->pluck("categoria");
        return view('livewire.gestor-formularios.create');
    }
}
