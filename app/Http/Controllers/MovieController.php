<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function layThongTinPhim() {
    $movies =  DB::table("movie")
                    ->where('vote_average', '>', 8.0)
                    ->where('vote_count', '>', 10000)
                    ->get();

    return view('cau77', compact('movies')); }
}
