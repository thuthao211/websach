<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/thuthao',function(){
return 'Thuthao211';
});


Route::get('/top-budget', function () {
    $movies = DB::table('movie')
                ->orderBy('budget', 'desc')
                ->limit(10)
                ->get();

    return view('top_budget', ['movies' => $movies]);
});