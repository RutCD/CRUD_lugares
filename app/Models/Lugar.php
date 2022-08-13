<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    protected $table="lugares";
    protected $fillable = [
        "nombre",
        "descripcion",
        "como_llegar", 
        "recomendaciones",
        "horario",
        "reatricciones",
        "costo",
        "video",
        "imagen_principal",
        "imagen_extra",
        "categoria"
    ];
}
