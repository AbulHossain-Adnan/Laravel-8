<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Auth;

class StudentController extends Controller
{
    
    public function index()
    {
        return view('student.index',[
            'students'=>Student::OrderBy('id','desc')->get()

        ]);
    }

  
    public function create()
    {
        return view('student/create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'image' => 'required|mimes:jpg,bmp,png'

        ]);
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
       
        return redirect()->route('student.index')->with('message', 'data added successful!');

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
       
       
       
        return view('student/edit',[
            
            'old_data'=>Student::findOrfail($id),
            session()->put('yes',['name'=>'adnan','age'=>'22'])

        ]);
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
         $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
        ]);

        $data=Student::findOrfail($id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
         if($request->hasfile('image')){
            $uploader_file=$request->file('image');
            $file_name=time().".".$uploader_file->extension();
            $uploader_file->move(public_path('student_images/'),$file_name);
            $data->image=$file_name;
         }
         $data->update();

       
        return redirect()->route('student.index')->with('message','data updated successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(session()->has('yes')){
            session()->forget('yes');
        }
        $data=Student::findOrfail($id);
        unlink('student_images/'.$data->image);
        $data->delete();
        return back()->with('message','data deleted successfully');
    }
}
