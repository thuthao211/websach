<?php
// fix conflict
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome');
});
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

Route::get('/movies/runtime', function () {
    $movies = DB::table('movie')
        ->where('runtime', '>', 120)
        ->limit(10)
        ->get();

    return view('thachthao_74', ['data' => $movies]);
});

Route::get('/canada', 'App\Http\Controllers\MovieController@phimCanada');

Route::get('/movies/action', [MovieController::class, 'actionMovies']);

Route::get('/cau77', "App\Http\Controllers\MovieController@layThongTinPhim");

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