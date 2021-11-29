<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentSumController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');



// route for student
Route::resource('student',StudentController::class);




Route::resource('student_sum',StudentSumController::class);


// route for join 
Route::GET('student_sqljoin',[App\Http\Controllers\StudentSumController::class,'sqljoin']);
Route::GET('student_leftjoin',[App\Http\Controllers\StudentSumController::class,'leftjoin']);
Route::GET('student_rightjoin',[App\Http\Controllers\StudentSumController::class,'rightjoin']);
Route::GET('dashboard',[App\Http\Controllers\HomeController::class,'dashboard'])->name('dashboard');