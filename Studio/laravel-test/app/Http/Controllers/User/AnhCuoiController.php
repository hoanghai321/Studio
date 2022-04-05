<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnhCuoiController extends Controller
{
    public function index(){
        //lấy dữ liệu từ table anhcuois
        $anhcuoi['anhcuoi'] = DB::table('anhcuois')->paginate(3); //phân trang
        return view('user.anhcuoi', $anhcuoi);
    }

    public function anhcuoiById($id){
        $anhcuoi = DB::table('anhcuois')->where('id', $id)->get();
        $chitietanhcuoi = DB::table('chi_tiet_anh_cuois')->where('id', $id)->get();

        return view('user.chitietanhcuoi', compact('anhcuoi', 'chitietanhcuoi'));
    }
}
