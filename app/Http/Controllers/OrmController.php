<?php

namespace App\Http\Controllers;
use App\Models\apprentice;
use App\Models\teacher;

use Illuminate\Http\Request;

class OrmController extends Controller
{
    public function consultas() {

       // $apprentice = apprentice::find(2);

       // return $apprentice->computer;

          $teacher=teacher::find(2);
        return $teacher;

    }
    
}
