<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    
    public function teachers(){
        return $this->belongsToMany('App\Models\teacher');
    }

    public function area()
    {
        return $this->belongsTo('App\Models\area');
    }
    public function trainig_center()
    {
        return $this->belongsTo('App\Models\trainig_center');
    }

   public function apprentices(){
        return $this->hasMany('App\Models\apprentice');
    }
}