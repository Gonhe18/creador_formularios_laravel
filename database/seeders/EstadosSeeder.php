<?php

namespace Database\Seeders;

use App\Models\Estados_model;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estado = Estados_model::create([
            'estado' => 'Recibido',
            'activo' => true,
        ]);
        $estado->save();
        $estado = Estados_model::create([
            'estado' => 'En gestión',
            'activo' => true,
        ]);
        $estado->save();
        $estado = Estados_model::create([
            'estado' => 'Procesado',
            'activo' => true,
        ]);
        $estado->save();
        $estado = Estados_model::create([
            'estado' => 'Finalizado',
            'activo' => true,
        ]);
        $estado->save();
    }
}
