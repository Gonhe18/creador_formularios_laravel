<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campos_formularios_model extends Model
{
    use HasFactory;

    protected $table = "campos_formularios";

    protected $fillable = [
        'tipo',
        'categoria'
    ];
}
