<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/thuthao',function(){
return 'Thuthao211';
});

Route::get('/cau77', "App\Http\Controllers\MovieController@layThongTinPhim");
Route::get('/trang1','App\Http\Controllers\ViduLayoutController@trang1');
Route::get('/vidu2','App\Http\Controllers\ViduLayoutController@sach');
Route::get('/sach/theloai/{id}','App\Http\Controllers\ViduLayoutController@theloai');
