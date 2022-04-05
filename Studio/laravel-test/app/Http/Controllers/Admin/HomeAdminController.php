<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class HomeAdminController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();

        $role = Auth::user()->role;
        if (!Auth::user() || $role == '2') {
            return view('admin.IndexAdmin', compact('users'));
        } else {
            //Lỗi trái phép!!! 401
            abort(401);
        }
    }

    //trang thêm mới tài khoản.
    public function add()
    {
        $role = Auth::user()->role;
        if (!Auth::user() || $role == '2') {
            return view('admin.InsertUsers');
        } else {
            //Lỗi trái phép!!! 401
            abort(401);
        }
    }
    //xử lý thêm mới tài khoản 
    public function insert(Request $request){
        $role = Auth::user()->role;
        if (!Auth::user() || $role == '2') {
            $add = DB::table('users')->insert([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'phone' => $request->phone,
                'address' => $request->address,
                'role' => $request->role
            ]);
            return redirect()->route('Admin');
        } else {
            //Lỗi trái phép!!! 401
            abort(401);
        }
    }

    //trang chỉnh sửa tài khoản
    public function edit($id)
    {
        $users_id = DB::table('users')->where('id', $id)->select('name', 'email', 'phone', 'address', 'role')->get();
        
        $role = Auth::user()->role;
        if (!Auth::user() || $role == '2') {
            return view('admin.EditInfoUsers', compact('users_id'));
        } else {
            //Lỗi trái phép!!! 401
            abort(401);
        }
    }

    //xử lý chỉnh sửa tài khoản
    public function update($id, Request $request)
    {
        $role = Auth::user()->role;
        if (!Auth::user() || $role == '2') {
            $update = DB::table('users')->where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'role' => $request->role
            ]);
            return redirect()->route('Admin');
        } else {
            //Lỗi trái phép!!! 401
            abort(401);
        }
    }

    //xoá tài khoản
    public function delete($id)
    {
        $role = Auth::user()->role;
        if (!Auth::user() || $role == '2') {
            $users_id = DB::table('users')->where('id', $id)->delete();
            return redirect()->back();
        } else {
            //Lỗi trái phép!!! 401
            abort(401);
        }
    }
}
