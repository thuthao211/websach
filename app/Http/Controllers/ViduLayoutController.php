<?php
<<<<<<< HEAD
=======

>>>>>>> 1e69824c31fcd6130eb5b9798a26f73d86391ef0
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD
class ViduLayoutController extends Controller
{
function trang1()
{
return view("vidulayout.trang1");
}
function sach()
{
$data = DB::select("select * from sach order by gia_ban asc limit 0,8");
return view("vidusach.index", compact("data"));
}
}
=======


class ViduLayoutController extends Controller
{
    function trang1()
    {
    return view("trang1");
    }

    public function sach()
    {
    $data = DB::select("select * from sach order by gia_ban asc limit 0,8");
    return view("components.viduindex", compact("data"));
    }
    function theloai($id)
    {
    $data = DB::select("select * from sach where the_loai = ?",[$id]);
    return view("components.viduindex", compact("data"));
    }
}
>>>>>>> 1e69824c31fcd6130eb5b9798a26f73d86391ef0
