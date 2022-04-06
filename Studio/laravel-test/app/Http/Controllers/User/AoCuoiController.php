<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\aocuoi;
use App\Models\ChiTietAoCuoi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AoCuoiController extends Controller
{
    //tạo hàm index áo cưới
    public function index()
    {
        $aocuoi['aocuoi'] = DB::table('aocuois')->paginate(9); // phân trang
        return view('user.aocuoi', $aocuoi);
    }

    //Hàm hiển thị chi tiết áo cưới theo id
    public function aocuoiById($id)
    {
        $chitietaocuoi = ChiTietAoCuoi::all()->where('id_aocuoi', $id);
        $aocuoi = DB::table('aocuois')->where('id', $id)->get();
        return view('user.chitietaocuoi', compact('aocuoi', 'chitietaocuoi'));
    }
}
