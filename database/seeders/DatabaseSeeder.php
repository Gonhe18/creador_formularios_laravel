<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            creadorUsuario::class,
            CamposFormulariosSeeder::class,
            ReglasValidacionesSeeder::class,
            ProcesoSeeder::class,
            EstadosSeeder::class,
            TipoSeguimientosSeeder::class,
        ]);
    }
}
