<?php

namespace App\Http\Controllers\User\Bills;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\BillsAoCuoi;
use App\Models\Cart;
use App\Models\BillsAoCuoiDetail;

class BillsAoCuoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.bills.aocuoi_checkout');
    }

    public function submit(Request $request, Cart $carts)
    {
        //Tạo biến $c_id gọi đến thông tin của user theo id
        $c_id = Auth::guard('web')->user()->id;

        //nếu tồn tại sản phẩm trong carts thì tiến hành lưu thông tin thanh toán
        //nếu không tồn tại thì trả về http 419
        if (session('carts')) {
            //Bước 1: tạo Bills áo cưới
            //tạo biến $billsaocuoi và nếu như bills thanh toán được tạo thì......
            if ($billsaocuoi = BillsAoCuoi::create([

                'user_id' => $c_id, //lấy thông tin id user 
                'note' => $request->note, //dữ liệu note người dùng nhập vào

            ])) {
                $billsaocuoi_id = $billsaocuoi->id; //lấy id của bills áo cưới đã thanh toán

                foreach ($carts->items as $aocuoi_id => $item) {
                    $quantity = $item['quantity'];
                    $price = $item['price'];
                     //Bước 2: tạo chi tiết bills áo cưới 
                    BillsAoCuoiDetail::create([

                        'billsaocuoi_id' => $billsaocuoi_id,
                        'aocuoi_id' => $aocuoi_id,
                        'price' => $price,
                        'quantity' => $quantity,

                    ]);
                }
                session(['carts' => '']);
                abort(403);
            } else {
                abort(419);
            }
        }
        // không tồn tại session sản phẩm 
        else{ 
            abort(419); 
        }
    }
}
