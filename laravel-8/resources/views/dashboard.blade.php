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
    <a href="{{route('student.index')}}" class="btn btn-success btn-sm">Student List</a>
     <a href="{{route('student_sum.index')}}" class="btn btn-success btn-sm">Sum List</a>
      <a href="{{url('student_sqljoin')}}" class="btn btn-success btn-sm">student sql</a>

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
