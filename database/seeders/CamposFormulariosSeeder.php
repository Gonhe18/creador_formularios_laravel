<?php

namespace Database\Seeders;

use App\Models\Campos_formularios_model;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CamposFormulariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $campo = Campos_formularios_model::create([
            'categoria' => 'input',
            'tipo' => 'text'
        ]);
        $campo->save();
        $campo = Campos_formularios_model::create([
            'categoria' => 'input',
            'tipo' => 'number'
        ]);
        $campo->save();
        $campo = Campos_formularios_model::create([
            'categoria' => 'input',
            'tipo' => 'date'
        ]);
        $campo->save();
        $campo = Campos_formularios_model::create([
            'categoria' => 'input',
            'tipo' => 'checkbox'
        ]);
        $campo->save();
        $campo = Campos_formularios_model::create([
            'categoria' => 'input',
            'tipo' => 'radio'
        ]);
        $campo->save();
        $campo = Campos_formularios_model::create([
            'categoria' => 'input',
            'tipo' => 'file'
        ]);
        $campo->save();
        $campo = Campos_formularios_model::create([
            'categoria' => 'input',
            'tipo' => 'email'
        ]);
        $campo->save();
        $campo = Campos_formularios_model::create([
            'categoria' => 'input',
            'tipo' => 'password'
        ]);
        $campo->save();
        $campo = Campos_formularios_model::create([
            'categoria' => 'input',
            'tipo' => 'range'
        ]);
        $campo->save();
        $campo = Campos_formularios_model::create([
            'categoria' => 'textarea',
            'tipo' => null
        ]);
        $campo->save();
        $campo = Campos_formularios_model::create([
            'categoria' => 'select',
            'tipo' => null
        ]);
        $campo->save();
    }
}
