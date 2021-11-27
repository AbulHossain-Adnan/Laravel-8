1.request validate rules:
---------------------------

$request->validate([
'name'='required',
'email'='required|email',
 'image' => 'required|mimes:jpg,bmp,png',
  'phone' => 'required|min:11|numeric',
]);

1.1:display request error message in view:
-----------------------------------------

@error('name')
<span class="text-danger">{{$message}}</span>
@enderror