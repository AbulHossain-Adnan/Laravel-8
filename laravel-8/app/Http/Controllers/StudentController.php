<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    
    public function index()
    {
        //
    }

  
    public function create()
    {
        return view('student/create');
    }

   
    public function store(Request $request)
    {
        $data=new Student();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
         if($request->hasfile('image')){
            $uploader_file=$request->file('image');
            $file_name=time().".".$uploader_file->extension();
            $uploader_file->move(public_path('student_images/'),$file_name);
            $data->image=$file_name;
         }
         $data->save();
        $request->session()->flash('message', 'data added successful!');
        return back();

    }

   
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        //
    }
}
