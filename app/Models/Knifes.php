<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Knifes extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'tipus',
        'float',
        'lock',
        'preu',
    ];
}
