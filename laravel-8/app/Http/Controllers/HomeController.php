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
             'total_earning'=>StudentSum::sum('earn_money'),
              'total_expense'=>StudentSum::sum('expence'),
                'max_earning'=>StudentSum::max('earn_money'),
                'min_earning'=>StudentSum::min('earn_money'),
                'max_expense'=>StudentSum::max('expence'),

           




        ]);
    }

}
