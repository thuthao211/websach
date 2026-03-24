<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ViduLayoutController;

// Trang chủ
Route::get('/', function () {
    return view('welcome');
});

// Route từng thành viên
Route::get('/thuthao', function () {
    return 'Thuthao211';
});

Route::get('/phuonganh', function () {
    return 'Phuong Anh';
});

Route::get('/panhle', function () {
    return 'Panh Le';
});

Route::get('/thachthao', function () {
    return 'Thach Thao';
});

Route::get('/thuhoai', function () {
    return 'Thu Hoai';
});

Route::get('/bachhop', function () {
    return 'Bach Hop';
});


// 7.4: runtime > 120
Route::get('/movies/runtime', function () {
    $movies = DB::table('movie')
        ->where('runtime', '>', 120)
        ->limit(10)
        ->get();

    return view('thachthao_74', ['data' => $movies]);
});

// 7.5: Canada
Route::get('/canada', [MovieController::class, 'phimCanada']);

// 7.6: Action
Route::get('/movies/action', [MovieController::class, 'actionMovies']);

// 7.7: vote > 8 và vote_count > 10000
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

Route::get('/trang1', [ViduLayoutController::class, 'trang1']);
Route::get('/vidu2', [ViduLayoutController::class, 'sach']);
Route::get('/sach/theloai/{id}', [ViduLayoutController::class, 'theloai']);