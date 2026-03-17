<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/thuthao',function(){
return 'Thuthao211';
});

Route::get('/cau77', "App\Http\Controllers\MovieController@layThongTinPhim");