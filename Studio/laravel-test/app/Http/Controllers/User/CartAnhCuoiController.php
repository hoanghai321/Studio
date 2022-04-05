<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\anhcuoi;
use App\Models\CartAnhCuoi;
use Illuminate\Http\Request;

class CartAnhCuoiController extends Controller
{
    //view giỏ hàng 
    public function view(){
        return view('user.cart');
    }

    //hàm thêm mới ảnh cưới
    public function AddCart(CartAnhCuoi $carts2,$id){
        $anhcuoi = anhcuoi::find($id);
        $carts2->add($anhcuoi);
        //dd(session('carts2'));
        return redirect()->back();
    }

    //hàm xoá sản phẩm ảnh cưới
    public function DeleteCart(CartAnhCuoi $carts2, $id){
        $carts2->remove($id);
        return redirect()->back();
    }
}
