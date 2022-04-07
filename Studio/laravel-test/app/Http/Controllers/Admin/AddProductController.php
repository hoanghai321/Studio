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
    public function AddAnhCuoi(){
        return view('admin.Products.AddAnhCuoi');
    }
}
