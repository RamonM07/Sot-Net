<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'ap',
        'am',
        'direccion',
        'entrecalle',
        'entrecalles', 
        'nex', 
        'nint', 
        'referencia',
        'tel',
        'cel',
        'correo', 
        'paquete_id',
];
}
