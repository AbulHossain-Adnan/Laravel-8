<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentSum;
use App\Models\Student;


class StudentSumController extends Controller
{
   
    public function index()
    {
        return view('student_sum/index',['student_sums'=>StudentSum::all()]);
    }

   
    public function create()
    {
        return view('student_sum/create',[
            'students'=>Student::all()
        ]);
    }

   
    public function store(Request $request)
    {
        $data=new StudentSum();
        $data->student_id=$request->student_id;
        $data->earn_money=$request->earn_money;
        $data->expence=$request->expense;
        $data->date=$request->date;
        $data->day='date';
        $data->month='month';
        $data->year='year';

        $data->save();
        return redirect()->route('student_sum.index')->with('message','data stored successfully');
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StudentSum::findOrfail($id)->delete();
        return back()->with('message','data deleted succesfully');
    }
}
