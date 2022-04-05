<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\aocuoi;
use App\Models\BillsAoCuoi;
use App\Models\Cart;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    //view giỏ hàng
    public function view()
    {
        return view('user.cart');
    }

    //hàm thêm mới sản phẩm
    public function AddCart(Cart $carts, $id)
    {
        $aocuoi = aocuoi::find($id);
        $carts->add($aocuoi);
        //dd(session('carts'));
        return redirect()->back();
    }

    //hàm xoá sản phẩm giỏ hàng
    public function DeleteCart(Cart $carts, $id)
    {
        $carts->remove($id);
        return redirect()->back();
    }
}
