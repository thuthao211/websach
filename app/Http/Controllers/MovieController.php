<?php
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> remotes/origin/thuthao

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
<<<<<<< HEAD
    public function actionMovies()
    {

        $movies = DB::table('movie')
            ->join('movie_genre', 'movie.id', '=', 'movie_genre.id_movie')
            ->join('genre', 'movie_genre.id_genre', '=', 'genre.id')
            ->where('genre.genre_name', 'Action')
            ->select('movie.movie_name', 'movie.release_date', 'movie.overview', 'movie.image_link')
            ->get();


        return view('action', compact('movies'));
=======
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
>>>>>>> remotes/origin/nhuthao
    }
}
=======
    public function layThongTinPhim() {
    $movies =  DB::table("movie")
                    ->where('vote_average', '>', 8.0)
                    ->where('vote_count', '>', 10000)
                    ->get();

    return view('cau77', compact('movies')); }
}
>>>>>>> remotes/origin/thuthao
