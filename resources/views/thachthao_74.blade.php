<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>Yêu cầu 7.4 - Thạch Thảo</title>
</head>

<body>
<h3>Danh sách 10 phim dài trên 120 phút</h3>
@foreach($data as $row)
    
        <b>Tên phim:</b> {{ $row->movie_name }} <br>
        <b>Ngày phát hành:</b> {{ $row->release_date }} <br>
        <b>Thời lượng:</b> {{ $row->runtime }} phút
   
    <br>
@endforeach
</body>
</html>