<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // relacion de uno a muchos 
    public function project()
    {
        return $this->hasMany('App\Models\Project');
    }
}