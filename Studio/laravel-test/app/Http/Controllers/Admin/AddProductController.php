<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddProductController extends Controller
{
    public function index(){
        return view('admin.Products.AddProduct');
    }
    public function AddAoCuoi(){
        return view('admin.Products.AddAoCuoi');
    }
    public function CreateAoCuoi(Request $request){
        $request->validate([
            'upload' => 'mimes:jpg,png,gif'
        ]);

        $image_upload = $request->upload->getClientOriginalName();
        $request->upload->move(public_path(''));
        dd($image_upload);
    }

    public function AddAnhCuoi(){
        return view('admin.Products.AddAnhCuoi');
    }
}
