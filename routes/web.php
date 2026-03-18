<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/thuthao',function(){
    return 'Thuthao211';
});

Route::get('/phuonganh', function () {
    return 'Phuong Anh';
});

Route::get('/panhle', function () {
    return 'Panh Le';
});
Route::get('/ThachThao', function () {
    return 'Thach Thao';
});
Route::get('/thuhoai', function () {
    return ('Thu Hoai');
});

