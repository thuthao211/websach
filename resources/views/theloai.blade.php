<h5>THỂ LOẠI</h5>
<table border = 1>
    <tr>
        <td> tên tiếng anh </td>
        <td> tên tiếng Việt </td>
</tr>
<tr>
@foreach($data as $row)
    <th> {{ $row->genre_name }} </th>
    <th> {{ $row->genre_name_vn }}</th>
@endforeach
</tr>
</table>