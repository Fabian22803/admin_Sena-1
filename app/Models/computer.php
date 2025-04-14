<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class computer extends Model
{

     public function apprentices(){
        return $this->hasMany('App\Models\apprentice');
    }

}