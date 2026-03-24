<html>
<head>
    <style>
    </style>
</head>
<body>
    <table border="1">
    <tr> 
        <th> Tên phim </th>
        <th> Ngày phát hành </th>
        <th> Mô tả </th>
        <th> Hình ảnh </th>
    </tr>
    <?php
    foreach($movies as $row)
    {
    ?>
    <tr>
        <td> <?php echo $row->movie_name; ?> </td>
        <td style="width:120px" > <?php echo $row->release_date; ?> </td>
        <td> <?php echo $row->overview; ?> </td>
        <td> <img src="<?php echo $row->image_link; ?>" width="80"></td> 
    </tr>
    <?php
    }
    ?>
    </table>
</body>
</html>