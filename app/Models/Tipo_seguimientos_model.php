<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_seguimientos_model extends Model
{
    use HasFactory;

    protected $table = 'tipo_seguimientos';

    protected $fillable = [
        "descripcion",
        "verifica_estado",
        "prefijo",
        "numeracion",
        "año",
        "area_predeterminada",
        "requiere_club"
    ];
}
