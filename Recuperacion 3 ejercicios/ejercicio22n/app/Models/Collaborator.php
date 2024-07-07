<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    use HasFactory;

    // relacion de muchos amuchos 
    public function project()
    {
        return $this->belongsToMany('App\Models\Project');
    }

    // relacion de uno a muchos 
    public function pay()
    {
        return $this->hasMany('App\Models\pay');
    }
}
