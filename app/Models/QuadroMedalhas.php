<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuadroMedalhas extends Model
{
    use HasFactory;

    protected $fillable = [
        'equipe',
        'ouro',
        'prata',
        'bronze',
        'total',
        'ano',
    ];
}
