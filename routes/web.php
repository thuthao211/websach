<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ViduLayoutController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/thuthao', function () {
    return 'Thuthao211';
});

Route::get('/top-budget', function () {
    $movies = DB::table('movie')
                ->orderBy('budget', 'desc')
                ->limit(10)
                ->get();

    return view('top_budget', ['movies' => $movies]);
});

Route::get('/trang1', [ViduLayoutController::class, 'trang1']);

Route::get('/sach','App\Http\Controllers\ViduLayoutController@sach');

Route::get('/sach/theloai/{id}','App\Http\Controllers\ViduLayoutController@theloai');
