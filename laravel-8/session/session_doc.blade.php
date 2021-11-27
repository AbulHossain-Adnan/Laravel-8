1.session message flush with page redirect.
-------------------------------------------
return back()->with('message','data added successfylly');


(1.1)Sesseion message display in view page:
-------------------------------------------

@if(session()->has('message'))
<span class="text-danger">{{session()->get('message')}}</span>
@endif


----------------------------------------------------------------


2.store  value in session:
---------------------------------

session()->put('key','value')



2.1:store array value in session:
----------------------------------

session()->put('coupon',[
'name'=>'adnan',
'age'=>22

]);


2.2:display session array values.
---------------------------

@if(session()->has('coupon'))
session()->get('coupon')['name'],
session()->get('coupon')['age'];

@endif

3.session delete:
-----------------

if(session()->has('coupon')){
	session()->forget('coupon');
}

