<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/thuthao',function(){
return 'Thuthao211';
});

Route::get('/canada', 'App\Http\Controllers\MovieController@phimCanada');
