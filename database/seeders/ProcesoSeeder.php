<?php

namespace Database\Seeders;

use App\Models\Procesos_model;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProcesoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $funcion = Procesos_model::create([
            'modulo' => 'Gestor formularios',
            'submodulo'  => 'ABM formularios',
            'proceso'  => 'Gestor formularios',
            'ref' => 'gestorFormularios'
        ]);
        $funcion->save();

        $funcion = Procesos_model::create([
            'modulo' => 'Gestor entidades',
            'submodulo'  => 'ABM entidades',
            'proceso'  => 'Gestor entidades',
            'ref' => 'gestorEntidades'
        ]);
        $funcion->save();

        $funcion = Procesos_model::create([
            'modulo' => 'Gestor usuarios',
            'submodulo'  => 'ABM usuarios',
            'proceso'  => 'Gestor usuarios',
            'ref' => 'gestorUsuarios'
        ]);
        $funcion->save();

        $funcion = Procesos_model::create([
            'modulo' => 'Seguimiento',
            'submodulo'  => 'ABM seguimientos',
            'proceso'  => 'Seguimiento',
            'ref' => 'seguimiento'
        ]);
        $funcion->save();

        $funcion = Procesos_model::create([
            'modulo' => 'Tipo seguimientos',
            'submodulo'  => 'ABM tipo de seguimientos',
            'proceso'  => 'Tipo seguimientos',
            'ref' => 'tipoSeguimiento'
        ]);
        $funcion->save();

        $funcion = Procesos_model::create([
            'modulo' => 'Estados seguimiento',
            'submodulo'  => 'ABM estados seguimiento',
            'proceso'  => 'Estados seguimiento',
            'ref' => 'estadoSeguimiento'
        ]);
        $funcion->save();

        $funcion = Procesos_model::create([
            'modulo' => 'Puestos de trabajo',
            'submodulo'  => 'ABM puestos de trabajo',
            'proceso'  => 'Puestos de trabajo',
            'ref' => 'puestosTrabajo'
        ]);
        $funcion->save();
        $funcion = Procesos_model::create([
            'modulo' => 'Roles y permisos',
            'submodulo'  => 'ABM de roles y permisos',
            'proceso'  => 'Roles y permisos',
            'ref' => 'role'
        ]);
        $funcion->save();
    }
}
