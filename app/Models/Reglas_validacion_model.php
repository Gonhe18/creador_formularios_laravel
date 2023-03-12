<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reglas_validacion_model extends Model
{
    use HasFactory;

    protected $table = "reglas_validacion";

    protected $fillable = [
        'regla',
        'ref',
        'campos'
    ];
}
