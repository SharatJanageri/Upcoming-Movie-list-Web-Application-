<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
 
    protected $fillable = ['name', 'sex', 'dob', 'bio' ];
    // spectifiying relation betwn the actor and movie 
    //actors can act in multiple movies
    public function actor()
    {
        return $this->belongsTo('App\Movie');
    } 
    
}
