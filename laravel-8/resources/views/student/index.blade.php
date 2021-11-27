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
    <a href="{{route('student.create')}}" class="btn btn-success btn-sm">Add New User+</a>
   <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Image</th>
      <th scope="col">Actions</th>


    </tr>
  </thead>
  <tbody>
    @foreach($students as $value)
    <tr>
      <th scope="row">{{$value->id}}</th>
      <td>{{$value->name}}</td>
      <td>{{$value->email}}</td>
      <td>{{$value->phone}}</td>
      <td>
        
        <img src="{{asset('student_images/'.$value->image)}}" width="100">
      </td>
      <td>
        <a class="btn btn-primary btn-sm" href="">edit</a>
        <a class="btn btn-danger btn-sm" href="">delete</a>

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
