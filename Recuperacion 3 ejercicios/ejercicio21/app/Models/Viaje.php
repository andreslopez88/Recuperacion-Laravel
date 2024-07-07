<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    use HasFactory;

    // relacion de uno a muchos 
    public function viajero()
    {
        return $this->belongsTo('App\Models\Viajero');
    }

    public function origen()
    {
        return $this->hasMany('App\Models\Origen');
    }

    public function destino()
    {
        return $this->hasMany('App\Models\Destino');
    }
}
