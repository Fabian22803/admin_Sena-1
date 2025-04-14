<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class area extends Model
{
    public function teachers(){
        return $this->hasMany('App\Models\teacher');
    }                    

    public function courses(){
        return $this->hasMany('App\Models\course');
    }
}
