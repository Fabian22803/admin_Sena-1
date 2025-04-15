<?php

namespace App\Http\Controllers;
use App\Models\apprentice;
use App\Models\course;
use App\Models\teacher;
use App\Models\area;
use App\Models\computer;
use App\Models\trainig_center;


use Illuminate\Http\Request;

class OrmController extends Controller
{
    public function consultas() {

      // $apprentice = apprentice::find(2);
       //return $apprentice->computer;

         // $teacher=teacher::find(2);
        //return $teacher->area;

        $course=course::find(1);
        return $course->trainig_center;

       // $trainig=trainig_center::find(3);
        //return $trainig->course;


    }
    
}
