<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>Yêu cầu 7.4 - Thạch Thảo</title>
</head>

<body>
<h3>Danh sách 10 phim dài trên 120 phút</h3>
<table border = 1>
<tr>
    <td> Tên phim </td>
    <td> Ngày phát hành </td>
    <td> Thời lườn </td>
</tr>
@foreach($data as $row)
    <tr>
        <th> {{ $row->movie_name }}  </th>
        <th> {{ $row->release_date }} </th>
        <th>  {{ $row->runtime }} phút </th>
</tr>
@endforeach
</table>
</body>
</html>