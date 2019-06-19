<?php

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

use App\Student;
use App\Subject;
use App\User;

Route::get('/', function () {

    $user =Student::find(1);
    $subjects = Subject::find([1,2,4,6]);
    $user->subjects()->attach($subjects);
    return view('welcome');
});


Route::get('/subjects/{id}', function ($id) {

    //$user =Student::find($id);

    //return $user->subjects;

//    $data = Student::with('subjects')->find($id);
//    return $data;

  //  return Student::whereIn('id',[1,2])->get();
});

