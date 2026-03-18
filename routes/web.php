<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
<<<<<<< HEAD
use App\Http\Controllers\MovieController; 
=======
use Illuminate\Support\Facades\DB;
>>>>>>> remotes/origin/thachthao
=======
use Illuminate\Support\Facades\DB;
>>>>>>> remotes/origin/phuonganh

// Route mặc định
Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
<<<<<<< HEAD
Route::get('/thuthao',function(){
return 'Thuthao211';
});

<<<<<<< HEAD
<<<<<<< HEAD
Route::get('/cau77', "App\Http\Controllers\MovieController@layThongTinPhim");
=======

Route::get('/thuhoai', function () {
    return ('Thu Hoai');
});
Route::get('/movies/action', [MovieController::class, 'actionMovies']);

>>>>>>> remotes/origin/thuhoai
=======

// Route của Thư Thảo (Yêu cầu mục 3)
Route::get('/thuthao', function () {
    return 'Thuthao211';
});

Route::get('/thachthao', function () {

    $movies = DB::table('movie')
                ->where('runtime', '>', 120)
                ->limit(10)
                ->get();

    return view('thachthao_74', ['data' => $movies]);
});
>>>>>>> remotes/origin/thachthao
=======

Route::get('/top-budget', function () {
    $movies = DB::table('movie')
                ->orderBy('budget', 'desc')
                ->limit(10)
                ->get();

    return view('top_budget', ['movies' => $movies]);
});
>>>>>>> remotes/origin/phuonganh
=======
Route::get('/canada', 'App\Http\Controllers\MovieController@phimCanada');
>>>>>>> remotes/origin/nhuthao
