<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\StudentSum;


class HomeController extends Controller
{
    public function dashboard(){
        return view('dashboard',[
            'total_student'=>Student::count(),
           
            



        ]);
    }

}
