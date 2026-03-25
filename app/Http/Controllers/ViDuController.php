<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViduController extends Controller
        {
        function theloai($id)
{
$data = DB::select("select * from sach where the_loai = ?",[$id]);
return view("vidusach.index", compact("data"));
}

        }