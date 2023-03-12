<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formularios_model extends Model
{
    use HasFactory;

    protected $table = "formularios";
    protected $fillable = [
        'modelo',
        'modelo_id',
        'campos'
    ];
}
