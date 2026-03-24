<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phim Hành Động (Action)</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #f4f4f4; }
        td img { width: 100px; height: auto; border-radius: 5px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .overview-text { max-width: 400px; line-height: 1.5; }
    </style>
</head>
<body>

    <h2>Danh sách Phim Thể loại: Action</h2>

    <table>
        <thead>
            <tr>
                <th>Tên bộ phim</th>
                <th>Ngày phát hành</th>
                <th>Mô tả</th>
                <th>Ảnh đại diện</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $movie)
            <tr>
                <td><strong>{{ $movie->movie_name }}</strong></td>
                <td>{{ \Carbon\Carbon::parse($movie->release_date)->format('d/m/Y') }}</td>
                <td class="overview-text">{{ $movie->overview }}</td>
                <td>
                    <img src="{{ $movie->image_link }}" alt="Poster {{ $movie->movie_name }}">
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>