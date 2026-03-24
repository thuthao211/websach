<!DOCTYPE html>
<html>
<head>
    <title>Top 10 Phim Budget Cao Nhất</title>
</head>
<body>
    <h2>Danh sách 10 bộ phim có doanh thu (budget) cao nhất</h2>
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