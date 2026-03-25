<!DOCTYPE html>


<html >


<html>
<head>
    <title>Top 10 Phim Budget Cao Nhất</title>
</head>
<body>
    <h2>Danh sách 10 bộ phim có doanh thu (budget) cao nhất</h2>


    
    <ul>
        @foreach($movies as $movie)
            <li style="margin-bottom: 15px;">
                <strong>Tên bộ phim:</strong> {{ $movie->movie_name }} <br>
                <strong>Ngày phát hành:</strong> {{ date('d-m-Y', strtotime($movie->release_date)) }} <br>
                <strong>Doanh thu (Budget):</strong> {{ number_format($movie->budget) }} USD
            </li>
        @endforeach
    </ul>




    <table border = 1>
        <tr>
            <td> tên phim </td>
            <td> Ngày phát hành </td>
            <td> Goanh thu </td>
</tr>
    <ul>
        @foreach($movies as $movie)
        <tr>
            <li style="margin-bottom: 15px;">
                <th> {{ $movie->movie_name }} </th>
                <th>{{ date('d-m-Y', strtotime($movie->release_date)) }} </th>
                <th> {{ number_format($movie->budget) }} USD</th>
            </li>
            </tr>
        @endforeach
    </ul>
</table>



</body>
</html>