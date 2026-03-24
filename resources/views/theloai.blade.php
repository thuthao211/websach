<h5>THỂ LOẠI</h5>

@foreach($data as $row)
    <p>{{ $row->genre_name }} - {{ $row->genre_name_vn }}</p>
@endforeach