<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/thuthao',function(){
return 'Thuthao211';
});
use Illuminate\Support\Facades\DB;

Route::get('/thachthao-cau74', function () {
    // 7.4: Hiển thị 10 bộ phim có thời lượng (runtime) > 120 phút
    $movies = DB::table('movies')
                ->where('runtime', '>', 120)
                ->limit(10)
                ->get();
    echo "<h2> Danh sách phim dài trên 120 phút</h2>";
    echo "<table border='1' cellspacing='0' cellpadding='5'>";
    echo "<tr><th>Tên bộ phim</th><th>Ngày phát hành</th><th>Thời lượng (phút)</th></tr>";
    foreach ($movies as $movie) {
        echo "<tr>";
        echo "<td>" . $movie->movie_name . "</td>";
        echo "<td>" . $movie->release_date . "</td>";
        echo "<td>" . $movie->runtime . "</td>";
        echo "</tr>";
    }

    echo "</table>";
});