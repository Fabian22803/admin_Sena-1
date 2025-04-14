<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class apprentice extends Model
{
    //
    public function course()
    {
        return $this->belongsTo('app/Models/course');
    }

    public function computer()
    {
        return $this->belongsTo('App\Models\computer');
    }
}
