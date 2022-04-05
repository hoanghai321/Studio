<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\aocuoi;
use App\Models\BillsAoCuoi;
use App\Models\BillsAoCuoiDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class HistoryCart extends Controller
{
    public function index()
    {
        //check id của người dùng đã login
        $user_id = Auth::guard('web')->user()->id;

        //nối 2 bảng users và bills_ao_cuois với nhau và dùng 'where' để lấy ra thông tin dữ liệu của user đã login
        $list = DB::table('users')
            ->join('bills_ao_cuois', 'bills_ao_cuois.user_id', '=', 'users.id')
            ->where('users.id', $user_id)->get();

        $list2 = DB::table('users')
            ->join('bills_anh_cuois', 'bills_anh_cuois.user_id', '=', 'users.id')
            ->where('users.id', $user_id)->get();

        return view('user.HistoryCart', compact('list', 'list2','user_id'));
    }

    public function showbilldetail($id)
    {
        $billsaocuoiById = DB::table('bills_ao_cuoi_details')->where('billsaocuoi_id', $id)->get();

        $list = DB::table('bills_ao_cuoi_details')
            ->join('aocuois', 'bills_ao_cuoi_details.aocuoi_id', '=', 'aocuois.id')
            ->where('bills_ao_cuoi_details.billsaocuoi_id', $id)->get();

        return view('user.HistoryCartAoCuoi', compact('billsaocuoiById', 'list'));
    }

    public function showbilldetail2($id)
    {
        $billsanhcuoiById = DB::table('bills_anh_cuoi_details')->where('billsanhcuoi_id', $id)->get();

        $list2 = DB::table('bills_anh_cuoi_details')
            ->join('anhcuois', 'bills_anh_cuoi_details.anhcuoi_id', '=', 'anhcuois.id')
            ->where('bills_anh_cuoi_details.billsanhcuoi_id', $id)->get();

        return view('user.HistoryCartAnhCuoi', compact('billsanhcuoiById', 'list2'));
    }
}
