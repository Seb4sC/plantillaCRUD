<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{
    use HasFactory;

    public function camioneros(){
        return $this->belongsToMany(Camionero::class);
    }
}
