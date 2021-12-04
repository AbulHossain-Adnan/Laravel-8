<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\StudentSum;
use Carbon\Carbon;
use DB;


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
                'min_expense'=>StudentSum::min('expence'),
               'today_total_earning' =>DB::table("student_sums")
    ->select(
        DB::raw("SUM(CASE WHEN created_at >= NOW() - INTERVAL 1 DAY THEN earn_money ELSE 0 END) weekly_sales"))->get(),
    
        ]);
    }
    


// Using Sum with a Case condition could help. Not tested but roughly how i would draw it up check if it gets you any further.

// $billings = DB::table("sales")
//     ->select(
//         "sales.store",
//         DB::raw("SUM(CASE WHEN created_at >= NOW() - INTERVAL 1 WEEK THEN amount ELSE 0 END) weekly_sales",
//         DB::raw("SUM(CASE WHEN created_at >= NOW() - INTERVAL 1 MONTH THEN amount ELSE 0 END) monthly_sales",
//         DB::raw("SUM(CASE WHEN created_at >= NOW() - INTERVAL 1 YEAR THEN amount ELSE 0 END) yearly_sales",
//         DB::raw("SUM(amount) total_sales")
//     )
//     ->groupBy("sales.store")
//     ->orderByRaw('sales.store ASC');           



}
