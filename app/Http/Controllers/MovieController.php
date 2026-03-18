<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function actionMovies()
    {

        $movies = DB::table('movie')
            ->join('movie_genre', 'movie.id', '=', 'movie_genre.id_movie')
            ->join('genre', 'movie_genre.id_genre', '=', 'genre.id')
            ->where('genre.genre_name', 'Action')
            ->select('movie.movie_name', 'movie.release_date', 'movie.overview', 'movie.image_link')
            ->get();


        return view('action', compact('movies'));
    }
}