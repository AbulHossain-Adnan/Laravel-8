<x-app-layout>
 
<div class="row">
  <div class="col-sm-12">
   <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   
  </head>
  <body>

   <div class="row">
  <div class="col-sm-10 m-auto">
  <div class="card  mb-3">
  <div class="card-header text-dark bg-info">Header</div>
  <div class="card-body">
    <a href="{{route('student_sum.create')}}" class="btn btn-success btn-sm">Add New Sum+</a>
    @if(session()->has('message'))
      <div class="aler alert-success">
        {{session()->get('message')}}
      </div>
    
    @endif


@if(session()->has('yes'))
<span class="text-danger"> {{session()->get('yes')['name']}} </span>
@endif





   <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Student_id</th>
      <th scope="col">earn money</th>
      <th scope="col">expence</th>
      <th scope="col">date</th>
      <th scope="col">day</th>

      <th scope="col">month</th>
      <th scope="col">year</th>
      <th scope="col">action</th>



    </tr>
  </thead>
  <tbody>
    @foreach($student_sums as $value)
    <tr>
      <th scope="row">{{$value->id}}</th>
      <th scope="row">{{$value->student_id}}</th>
      <th scope="row">{{$value->earn_money}}</th>
      <th scope="row">{{$value->expence}}</th>
      <th scope="row">{{$value->date}}</th>
      <th scope="row">{{$value->day}}</th>
      <th scope="row">{{$value->month}}</th>
      <th scope="row">{{$value->year}}</th>

      
      <td>
        <form method="post" action="{{route('student_sum.destroy',$value->id)}}">
          @csrf
          @method('DELETE')
  
        <a class="btn btn-primary btn-sm" href="{{route('student_sum.edit',$value->id)}}">edit</a>
        <button class="btn btn-danger btn-sm" type="submit">delete</button>
</form>
    </tr>
   @endforeach
  </tbody>
</table>
  </div>
</div>
  </div>
</div>

   








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
  </div>
</div>
  











</x-app-layout>
