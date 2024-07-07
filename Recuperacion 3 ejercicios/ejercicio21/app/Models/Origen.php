<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Origen extends Model
{
    use HasFactory;
    // relacion de uno a muchos
    public function viaje()
    {
        return $this->belosgsto('App\Models\Viaje');
    }
}
