<h3>Top 10 phim vote_average cao nhất</h3>

@foreach($data as $row)
    <p>
        {{ $row->movie_name }} __ 
        {{ $row->release_date }} __
        {{ $row->vote_average }}
    </p>
@endforeach