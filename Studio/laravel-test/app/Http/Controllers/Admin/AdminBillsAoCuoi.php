<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminBillsAoCuoi extends Controller
{
    public function index()
    {
        $BillsAoCuoi = DB::table('users')
            ->join('bills_ao_cuois', 'bills_ao_cuois.user_id', '=', 'users.id')
            ->get();

        $role = Auth::user()->role;
        if (!Auth::user() || $role == '2') {
            return view('admin.QLBills.BillsAoCuoi', compact('BillsAoCuoi'));
        } else {
            //Lỗi trái phép!!! 401
            abort(401);
        }
    }

    public function showdetail($id)
    {
        $role = Auth::user()->role;
        if (!Auth::user() || $role == '2') {
            $billsaocuoiById = DB::table('bills_ao_cuoi_details')->where('billsaocuoi_id', $id)->get();
            $BillsAoCuoiDetail = DB::table('aocuois')
            ->join('bills_ao_cuoi_details', 'aocuois.id', '=', 'bills_ao_cuoi_details.billsaocuoi_id')
            ->where('billsaocuoi_id', $id)
            ->get();
            return view('admin.QLBills.BillsAoCuoiDetail', compact('billsaocuoiById', 'BillsAoCuoiDetail'));
        } else {
            //Lỗi trái phép!!! 401
            abort(401);
        }
    }

    public function delete($id)
    {
        $role = Auth::user()->role;
        if (!Auth::user() || $role == '2') {
            $BillsAoCuoi = DB::table('bills_ao_cuois')->where('id', $id)->delete();
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
            $BillsAoCuoiDetail = DB::table('bills_ao_cuoi_details')->where('id', $id)->delete();
            return redirect()->back();
        } else {
            //Lỗi trái phép!!! 401
            abort(401);
        }
    }
}
