<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController; 

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
Route::get('/thuthao',function(){
return 'Thuthao211';
});

Route::get('/cau77', "App\Http\Controllers\MovieController@layThongTinPhim");
=======

Route::get('/thuhoai', function () {
    return ('Thu Hoai');
});
Route::get('/movies/action', [MovieController::class, 'actionMovies']);

>>>>>>> remotes/origin/thuhoai
