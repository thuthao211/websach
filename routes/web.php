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

Route::get('/phuonganh', function () {
    return 'Phuong Anh';
});

Route::get('/panhle', function () {
    return 'Panh Le';
});
Route::get('/ThachThao', function () {
    return 'Thach Thao';
});
=======
Route::get('/thuhoai', function () {
    return ('Thu Hoai');
});
Route::get('/movies/action', [MovieController::class, 'actionMovies']);

>>>>>>> remotes/origin/thuhoai
