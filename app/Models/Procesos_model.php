<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procesos_model extends Model
{
    use HasFactory;

    protected $table = 'procesos';

    protected $fillable = [
        'modulo',
        'submodulo',
        'proceso',
        'ref'
    ];
}
