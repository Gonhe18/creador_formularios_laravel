<?php

namespace Database\Seeders;

use App\Models\Tipo_seguimientos_model;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoSeguimientosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $entidad = Tipo_seguimientos_model::create([
            "descripcion" => 'Nota a Comité ejecutivo',
            "verifica_estado" => false,
            "requiere_club" => false,
            "prefijo" => 'NCE',
            "numeracion" => '0002',
            "año" => '2022',
        ]);
        $entidad->save();

        $entidad = Tipo_seguimientos_model::create([
            "descripcion" => 'Nota a Jugadores - Trámites generales',
            "verifica_estado" => false,
            "requiere_club" => false,
            "prefijo" => 'NJG',
            "numeracion" => '0005',
            "año" => '2022',
        ]);
        $entidad->save();

        $entidad = Tipo_seguimientos_model::create([
            "descripcion" => 'Nota a Jugadores - Gestión clubes',
            "verifica_estado" => false,
            "requiere_club" => true,
            "prefijo" => 'NJC',
            "numeracion" => '0005',
            "año" => '2022',
        ]);
        $entidad->save();

        $entidad = Tipo_seguimientos_model::create([
            "descripcion" => 'Nota a Jugadores - Pases',
            "verifica_estado" => false,
            "requiere_club" => false,
            "prefijo" => 'NJP',
            "numeracion" => '0006',
            "año" => '2022',
        ]);
        $entidad->save();

        $entidad = Tipo_seguimientos_model::create([
            "descripcion" => 'Nota a Tribunal de disciplina',
            "verifica_estado" => false,
            "requiere_club" => false,
            "prefijo" => 'CTD',
            "numeracion" => '0007',
            "año" => '2022',
        ]);
        $entidad->save();

        $entidad = Tipo_seguimientos_model::create([
            "descripcion" => 'Nota a Tribunal de cuentas',
            "verifica_estado" => false,
            "requiere_club" => false,
            "prefijo" => 'CTC',
            "numeracion" => '0008',
            "año" => '2022',
        ]);
        $entidad->save();

        $entidad = Tipo_seguimientos_model::create([
            "descripcion" => 'Nota a Colegio de árbitros',
            "verifica_estado" => false,
            "requiere_club" => false,
            "prefijo" => 'CCA',
            "numeracion" => '0009',
            "año" => '2022',
        ]);
        $entidad->save();

        $entidad = Tipo_seguimientos_model::create([
            "descripcion" => 'Carta documento',
            "verifica_estado" => false,
            "requiere_club" => false,
            "prefijo" => 'CDTO',
            "numeracion" => '00010',
            "año" => '2022',
        ]);
        $entidad->save();
    }
}
