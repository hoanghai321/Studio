<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminBillsAnhCuoi extends Controller
{
    public function index()
    {
        $BillsAnhCuoi = DB::table('users')
            ->join('bills_anh_cuois', 'bills_anh_cuois.user_id', '=', 'users.id')
            ->get();

        $role = Auth::user()->role;
        if (!Auth::user() || $role == '2') {
            return view('admin.QLBills.BillsAnhCuoi', compact('BillsAnhCuoi'));
        } else {
            //Lỗi trái phép!!! 401
            abort(401);
        }
    }

    public function showdetail($id)
    {
        $role = Auth::user()->role;
        if (!Auth::user() || $role == '2') {
            $billsanhcuoiById = DB::table('bills_anh_cuoi_details')->where('billsanhcuoi_id', $id)->get();

            $BillsAnhCuoiDetail = DB::table('anhcuois')
            ->join('bills_anh_cuoi_details', 'bills_anh_cuoi_details.anhcuoi_id', '=' ,'anhcuois.id')
            ->where('bills_anh_cuoi_details.billsanhcuoi_id', $id)->get();

            return view('admin.QLBills.BillsAnhCuoiDetail', compact('billsanhcuoiById', 'BillsAnhCuoiDetail'));
        } else {
            //Lỗi trái phép!!! 401
            abort(401);
        }
    }

    public function delete($id)
    {
        $role = Auth::user()->role;
        if (!Auth::user() || $role == '2') {
            $BillsAnhCuoi = DB::table('bills_anh_cuois')->where('id', $id)->delete();
            return redirect()->back();
        } else {
            //Lỗi trái phép!!! 401
            abort(401);
        }
    }
    public function deletedetail($id)
    {
        $role = Auth::user()->role;
        if (!Auth::user() || $role == '2') {
            $BillsAnhCuoiDetail = DB::table('bills_anh_cuoi_details')->where('id', $id)->delete();
            return redirect()->back();
        } else {
            //Lỗi trái phép!!! 401
            abort(401);
        }
    }
}
