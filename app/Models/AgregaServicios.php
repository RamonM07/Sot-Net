<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgregaServicios extends Model
{
    use HasFactory;
    protected $fillable = [
        'paquete_id',
        'servicio_id',
];
}
