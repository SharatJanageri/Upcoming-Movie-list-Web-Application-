<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    
    public function movie()
    {
        return $this->belongsTo('App\Actors');
        return $this->belongsTo('App\Users');
    } 
    
}
