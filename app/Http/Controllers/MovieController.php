<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    // Câu 7.7
    public function layThongTinPhim() {
        $movies = DB::table("movie")
                    ->where('vote_average', '>', 8.0)
                    ->where('vote_count', '>', 10000)
                    ->get();

        return view('cau77', compact('movies'));
    }

    // Câu 7.5
    public function phimCanada() {
        $ds_phim = DB::table('movie')
            ->select('movie_name', 'release_date', 'runtime')
            ->where('country_name', 'Canada')
            ->get();

        return view('canada', compact('ds_phim'));
    }
}