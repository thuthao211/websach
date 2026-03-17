<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
});