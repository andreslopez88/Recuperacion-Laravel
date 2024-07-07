<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // relacion uno a muchos
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }
    // relacion de muchos a muchos
    public function collaborator()
    {
        return $this->belongsToMany('App\Models\Customer');
    }
}
