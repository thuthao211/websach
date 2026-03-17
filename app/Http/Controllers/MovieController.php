<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MovieController extends Controller {
    public function phimCanada() {
        $ds_phim = DB::table('movie')
            ->select('movie_name', 'release_date', 'runtime')
            ->where('country_name', 'Canada')
            ->get();
        return view('canada', compact('ds_phim'));
    }
}