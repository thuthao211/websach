<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

// Route mặc định
Route::get('/', function () {
    return view('welcome');
});

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