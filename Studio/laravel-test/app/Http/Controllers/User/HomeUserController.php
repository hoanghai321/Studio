<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\aocuoi;
use App\Models\anhcuoi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection\paginate;

class HomeUserController extends Controller
{
    //tạo hàm index
    public function index()
    {
        //lấy dữ liệu từ table 'aocuois'
        $aocuoi['aocuoi'] = DB::table('aocuois')->paginate(3); //phân trang 
        //Lấy dữ liệu từ table 'anhcuois'
        $anhcuoi['anhcuoi'] = DB::table('anhcuois')->paginate(3);
        //trả về view 
        return view('user.Index', $aocuoi, $anhcuoi);
    }
}
