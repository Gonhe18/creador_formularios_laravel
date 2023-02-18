<?php

namespace App\Http\Livewire\GestorFormularios;

use Livewire\Component;

class Index extends Component
{
    public $action = "";
    public $visible = "";

    public function action($action)
    {
        $this->action = $action;
        $this->visible = "hidden";
    }

    public function render()
    {
        return view('livewire.gestor-formularios.index');
    }
}
