<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignacaracteristica extends Model
{
    use HasFactory;
    protected $fillable = [
        'servicio_id',
        'caracteristica_id',
];
}
