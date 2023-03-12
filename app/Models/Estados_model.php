<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estados_model extends Model
{
    use HasFactory;

    protected $table = 'estados';

    protected $fillable = [
        'estado',
        'activo'
    ];
}
