<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    //
    public function area()
    {
       return $this->belongsTo('App\Models\area');
    }

    public function trainig_center()
    {
       return $this->belongsTo('App\Models\trainig_center');
    }

    public function courses(){
        return $this->belongsToMany('App\Models\course');
    }
}
