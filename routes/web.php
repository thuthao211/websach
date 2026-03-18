<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> remotes/origin/bachhop
use App\Http\Controllers\MovieController; 
=======
use Illuminate\Support\Facades\DB;
>>>>>>> remotes/origin/thachthao
=======
use Illuminate\Support\Facades\DB;
>>>>>>> remotes/origin/phuonganh

<<<<<<< HEAD
<<<<<<< HEAD
=======
// Route mặc định
Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
=======

>>>>>>> remotes/origin/bachhop
<<<<<<< HEAD
<<<<<<< HEAD
Route::get('/thuthao',function(){
<<<<<<< HEAD
    return 'Thuthao211';
});

<<<<<<< HEAD
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
=======
Route::get('/phuonganh', function () {
    return 'Phuong Anh';
});
>>>>>>> remotes/origin/bachhop

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
<<<<<<< HEAD

Route::get('/top-budget', function () {
    $movies = DB::table('movie')
                ->orderBy('budget', 'desc')
                ->limit(10)
                ->get();

    return view('top_budget', ['movies' => $movies]);
});
=======
return 'Thuthao211';
});

<<<<<<< HEAD
<<<<<<< HEAD

Route::get('/top-budget', function () {
    $movies = DB::table('movie')
                ->orderBy('budget', 'desc')
                ->limit(10)
                ->get();

    return view('top_budget', ['movies' => $movies]);
});
>>>>>>> remotes/origin/bachhop
>>>>>>> remotes/origin/phuonganh
=======
Route::get('/canada', 'App\Http\Controllers\MovieController@phimCanada');
>>>>>>> remotes/origin/nhuthao
<<<<<<< HEAD
=======
=======
use Illuminate\Support\Facades\DB;

>>>>>>> cc42fe7d4baaff9c9851b00bc09030bfe58d8e86
Route::get('/bachhop',function(){
    return 'Bach Hop';
});

Route::get('/theloai', function () {
    $data = DB::select("SELECT genre_name, genre_name_vn FROM genre");
    return view('theloai', ['data' => $data]);
});

Route::get('/top10phimvote', function () {
    $data = DB::select("
        SELECT movie_name, release_date, vote_average 
        FROM movie 
        ORDER BY vote_average DESC 
        LIMIT 10
    ");
    return view('top10phimvote', ['data' => $data]);
<<<<<<< HEAD
=======
Route::get('/thuthao',function(){
return 'Thuthao211';
});
Route::get('/phuonganh', function () {
    return 'Phuong Anh';
});
Route::get('/bachhop',function(){
    return 'Bach Hop';
>>>>>>> main
});
=======
});
>>>>>>> remotes/origin/bachhop
=======
Route::get('/cau77', "App\Http\Controllers\MovieController@layThongTinPhim");
>>>>>>> remotes/origin/thuthao
>>>>>>> cc42fe7d4baaff9c9851b00bc09030bfe58d8e86
>>>>>>> remotes/origin/bachhop
