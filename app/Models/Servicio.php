<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Servicio;

class Servicio extends Model
{
    use HasFactory;
    protected $fillable = [
        'desc_serv',
];
public function caracteristicas()
    {
        return $this->belongsToMany(Caracteristica::class);
    }
}

