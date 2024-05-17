<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camionero extends Model
{
    use HasFactory;

    public function camions(){
        return $this->belongsToMany(Camion::class);
    }

    public function paquetes(){
        return $this->hasMany(Paquete::class);
    }
}
