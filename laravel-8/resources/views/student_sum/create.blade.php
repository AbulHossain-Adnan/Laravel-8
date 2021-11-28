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
  <div class="card-header text-dark bg-info text-center">ADD STUDENT</div>
  <div class="card-body">
  @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
  <form method="post" action="{{route('student_sum.store')}}" >
  	@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Student Id</label>

@error('name')
     <span class="text-danger">{{ $message }}</span>
@enderror
   <select class="form-control" name="student_id">
   	<option>choose one</option>
   	@foreach($students as $value)
   	<option value="{{$value->id}}">{{$value->name}}</option>
   	@endforeach
   </select>
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">earn money</label>

@error('email')
     <span class="text-danger">{{ $message }}</span>
@enderror
    <input type="text" class="form-control" name="earn money" placeholder="earn money">
  </div>
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">expense</label>
    @error('phone')
     <span class="text-danger">{{ $message }}</span>
@enderror
    <input type="text" class="form-control" name="expense" id="exampleInputPassword1">
  </div>
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">date</label>
    @error('image')
     <span class="text-danger">{{ $message }}</span>
@enderror
    <input type="date" class="form-control" name="date">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
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
