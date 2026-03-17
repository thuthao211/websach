<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>Yêu cầu 7.4 - Thạch Thảo</title>
</head>

<body>

<h3>Danh sách 10 phim dài trên 120 phút</h3>

<table border="1">
<tr>
    <th>Tên bộ phim</th>
    <th>Ngày phát hành</th>
    <th>Thời lượng (phút)</th>
</tr>

@foreach($data as $row)
<tr>
    <td>{{ $row->movie_name }}</td>
    <td>{{ $row->release_date }}</td>
    <td>{{ $row->runtime }}</td>
</tr>
@endforeach

</table>

</body>
</html>