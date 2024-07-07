<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viajero extends Model
{
    use HasFactory;

    // relacion uno a muchos 
    public function viaje()
    {
        return $this->hasMany('App\Models\Viaje');
    }

   
}
