<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    use HasFactory;
    protected $fillable = [
        'desc_caracteristica',
];
public function servicios(){
    return $this->belongsToMany(Servicio::class);
}
}
