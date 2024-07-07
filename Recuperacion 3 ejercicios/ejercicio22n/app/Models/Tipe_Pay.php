<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipe_Pay extends Model
{
    use HasFactory;


    // relacion de uno a muchos 
    public function pay()
    {
        return $this->belongsTo('App\Models\Pay');
    }
}
