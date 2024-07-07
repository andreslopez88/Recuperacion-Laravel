<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    use HasFactory;

    // relacion de uno a muchos 
    public function collaborator()
    {
        return $this->belongsTo('App\Models\Collaborator');
    }
}
