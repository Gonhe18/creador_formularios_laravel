<?php

namespace Database\Seeders;

use App\Models\Reglas_validacion_model;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReglasValidacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regla = Reglas_validacion_model::create([
            'regla' => 'required',
            'ref' => 'Campo requerido',
            'campos' => '[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11]'
        ]);
        $regla->save();
        $regla = Reglas_validacion_model::create([
            'regla' => 'unique',
            'ref' => 'Valor único',
            'campos' => '[3, 6, 7]'
        ]);
        $regla->save();
        $regla = Reglas_validacion_model::create([
            'regla' => 'min',
            'ref' => 'Cantidad mínima',
            'campos' => '[1, 2, 8, 10, 11]'
        ]);
        $regla->save();
        $regla = Reglas_validacion_model::create([
            'regla' => 'max',
            'ref' => 'Cantidad máxima',
            'campos' => '[1, 2, 8, 10, 11]'
        ]);
        $regla->save();
    }
}
