<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\MovieController;

// Trang chủ
Route::get('/', function () {
    return view('welcome');
});

Route::get('/thuthao', function () {
=======
<<<<<<< HEAD

=======
>>>>>>> 9b73e305a9e2d343408deda4629654c990d1898e
Route::get('/', function () {
    return view('welcome');
});
Route::get('/thuthao',function(){
>>>>>>> c9fef094aa8c950b8f06dbbf39c95e2af77b91d2
    return 'Thuthao211';
});

Route::get('/phuonganh', function () {
    return 'Phuong Anh';
});

Route::get('/panhle', function () {
    return 'Panh Le';
});
<<<<<<< HEAD

Route::get('/thachthao', function () {
    return 'Thach Thao';
});

Route::get('/thuhoai', function () {
    return 'Thu Hoai';
});

Route::get('/bachhop', function () {
    return 'Bach Hop';
});


Route::get('/movies/runtime', function () {
    $movies = DB::table('movie')
        ->where('runtime', '>', 120)
        ->limit(10)
        ->get();

    return view('thachthao_74', ['data' => $movies]);
});

Route::get('/canada', [MovieController::class, 'phimCanada']);

Route::get('/movies/action', [MovieController::class, 'actionMovies']);

Route::get('/cau77', [MovieController::class, 'layThongTinPhim']);

Route::get('/top-budget', function () {
    $movies = DB::table('movie')
        ->orderBy('budget', 'desc')
        ->limit(10)
        ->get();

    return view('top_budget', ['movies' => $movies]);
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
});
=======
Route::get('/ThachThao', function () {
    return 'Thach Thao';
});
Route::get('/thuhoai', function () {
    return ('Thu Hoai');
});
<<<<<<< HEAD
=======

>>>>>>> 9b73e305a9e2d343408deda4629654c990d1898e
>>>>>>> c9fef094aa8c950b8f06dbbf39c95e2af77b91d2
