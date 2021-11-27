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
  <div class="col-sm-8 m-auto">
  <div class="card  mb-3">
  <div class="card-header text-dark bg-info text-center">Edit STUDENT</div>
  <div class="card-body">
  @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

  <form method="post" action="{{route('student.update',$old_data->id)}}" enctype="multipart/form-data">
  	@csrf
  	@method('PUT')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="{{$old_data->name}}">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputPassword1" value="{{$old_data->email}}">
  </div>
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">phone</label>
    <input type="text" class="form-control" name="phone" id="exampleInputPassword1" value="{{$old_data->phone}}">
  </div>
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Old image</label>
    <img src="{{asset('student_images/'.$old_data->image)}}" width="100">
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">image</label>
    <input type="file" class="form-control" name="image" id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-primary">Update</button>
</form>
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
