<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddProductController extends Controller
{
    public function index()
    {
        return view('admin.Products.AddProduct');
    }
    public function AddAoCuoi()
    {
        return view('admin.Products.AddAoCuoi');
    }
    public function CreateAoCuoi(Request $request)
    {
        $request->validate([
            'upload0' => 'mimes:jpg,png,gif',
            'upload1' => 'mimes:jpg,png,gif',
            'upload2' => 'mimes:jpg,png,gif',
            'upload3' => 'mimes:jpg,png,gif'
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


        if ($add||$add2) {
            return redirect()->route('ProductAdmin');
        } else {
            abort(419);
        }
    }

    public function AddAnhCuoi()
    {
        return view('admin.Products.AddAnhCuoi');
    }
}
