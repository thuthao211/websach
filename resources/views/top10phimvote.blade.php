<h3>Top 10 phim vote_average cao nhất</h3>
<table border = 1>
    <tr>
        <td> tên Phim </td>
        <td> ngày phát hành </td>
        <td> Lượng vote </td>
</tr>
@foreach($data as $row)
<tr>
    <p>
       <th> {{ $row->movie_name }} </th>
      <th>  {{ $row->release_date }} </th>
        <th> {{ $row->vote_average }} </th>
    </p>
</tr>
@endforeach