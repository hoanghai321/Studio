<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AddProductController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();

        $role = Auth::user()->role;
        if (!Auth::user() || $role == '2') {
            return view('admin.Products.AddProduct');
        } else {
            //Lỗi trái phép!!! 401
            abort(401);
        }
    }
    public function AddAoCuoi()
    {
        $users = DB::table('users')->get();

        $role = Auth::user()->role;
        if (!Auth::user() || $role == '2') {
            return view('admin.Products.AddAoCuoi');
        } else {
            //Lỗi trái phép!!! 401
            abort(401);
        }
    }
    public function CreateAoCuoi(Request $request)
    {
        //kiểm tra file upload có phải ảnh hay ko với image validator
        $request->validate([
            'upload0' => 'image:jpg,png,gif',
            'upload1' => 'image:jpg,png,gif',
            'upload2' => 'image:jpg,png,gif',
            'upload3' => 'image:jpg,png,gif'
        ]);

        //Lấy name hình ảnh upload
        $image_upload0 = $request->upload0->getClientOriginalName();
        //Đưa hình ảnh đến đường dẫn với public_path
        $request->upload0->move(public_path('images/AoCuoi/'), $image_upload0);

        $image_upload1 = $request->upload1->getClientOriginalName();
        $request->upload1->move(public_path('images/AlbumAoCuoi/'), $image_upload1);

        $image_upload2 = $request->upload2->getClientOriginalName();
        $request->upload2->move(public_path('images/AlbumAoCuoi/'), $image_upload2);

        $image_upload3 = $request->upload3->getClientOriginalName();
        $request->upload3->move(public_path('images/AlbumAoCuoi/'), $image_upload3);

        $add = DB::table('aocuois')
            ->insertGetId([
                'name' => $request->name,
                'price' => $request->price,
                'image' => $image_upload0,
            ]);

        $add2 = DB::table('chi_tiet_ao_cuois')->insert([
            'id_aocuoi' => $add,
            'image1' => $image_upload1,
            'image2' => $image_upload2,
            'image3' => $image_upload3
        ]);
        return redirect()->route('ProductAdmin');
    }

    public function AddAnhCuoi()
    {
        $users = DB::table('users')->get();

        $role = Auth::user()->role;
        if (!Auth::user() || $role == '2') {
            return view('admin.Products.AddAnhCuoi');
        } else {
            //Lỗi trái phép!!! 401
            abort(401);
        }
    }
    public function CreateAnhCuoi(Request $request)
    {
        //kiểm tra file upload có phải ảnh hay ko
        $request->validate([
            'upload0' => 'image:jpg,png,gif',
            'upload1' => 'image:jpg,png,gif',
            'upload2' => 'image:jpg,png,gif',
            'upload3' => 'image:jpg,png,gif'
        ]);

        //Lấy name hình ảnh upload
        $image_upload0 = $request->upload0->getClientOriginalName();
        //Đưa hình ảnh đến đường dẫn với public_path
        $request->upload0->move(public_path('images/AnhCuoi/'), $image_upload0);

        $image_upload1 = $request->upload1->getClientOriginalName();
        $request->upload1->move(public_path('images/AlbumAnhCuoi/'), $image_upload1);

        $image_upload2 = $request->upload2->getClientOriginalName();
        $request->upload2->move(public_path('images/AlbumAnhCuoi/'), $image_upload2);

        $image_upload3 = $request->upload3->getClientOriginalName();
        $request->upload3->move(public_path('images/AlbumAnhCuoi/'), $image_upload3);

        $add = DB::table('anhcuois')
            ->insertGetId([
                'name' => $request->name,
                'price' => $request->price,
                'image' => $image_upload0,
            ]);

        $add2 = DB::table('chi_tiet_anh_cuois')->insert([
            'id_anhcuoi' => $add,
            'image1' => $image_upload1,
            'image2' => $image_upload2,
            'image3' => $image_upload3
        ]);
        return redirect()->route('ProductAdmin');
    }
}
