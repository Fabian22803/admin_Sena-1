<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class trainig_center extends Model
{
    //
    public function teachers(){
        return $this->hasMany('App\Models\teacher');    
    }
}
