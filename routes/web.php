<?php

use Illuminate\Support\Facades\Route;

Route::get('/thuhoai', function () {
    return view('welcome');
});
Route::get('/thuthao',function(){
return 'Thuthao211';
});