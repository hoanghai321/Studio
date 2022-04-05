<?php

namespace App\Http\Controllers\User\Bills;

use App\Http\Controllers\Controller;
use App\Models\CartAnhCuoi;
use Illuminate\Http\Request;
use App\Models\BillsAnhCuoi;
use App\Models\BillsAnhCuoiDetail;
use Illuminate\Support\Facades\Auth;

class BillsAnhCuoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('user.bills.anhcuoi_checkout');
    }

    public function submit(Request $request, CartAnhCuoi $carts2)
    {
        //Tạo biến $c_id gọi đến thông tin của user theo id
        $c_id = Auth::guard('web')->user()->id;

        //nếu tồn tại sản phẩm trong carts thì tiến hành lưu thông tin thanh toán
        //nếu không tồn tại thì trả về http 419
        if (session('carts2')) {
            //Bước 1: tạo Bills áo cưới
            //tạo biến $billsaocuoi và nếu như bills thanh toán được tạo thì......
            if ($billsanhcuoi = BillsAnhCuoi::create([

                'user_id' => $c_id, //lấy thông tin id user đưa vào trong bills áo cưới
                'note' => $request->note, //dữ liệu note người dùng nhập vào

            ])) {
                $billsanhcuoi_id = $billsanhcuoi->id; //lấy id của bills áo cưới đã thanh toán

                foreach ($carts2->items as $anhcuoi_id => $item) {
                    $quantity = $item['quantity'];
                    $price = $item['price'];
                     //Bước 2: tạo chi tiết bills áo cưới 
                    BillsAnhCuoiDetail::create([

                        'billsanhcuoi_id' => $billsanhcuoi_id,
                        'anhcuoi_id' => $anhcuoi_id,
                        'price' => $price,
                        'quantity' => $quantity,

                    ]);
                }
                session(['carts2' => '']);
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
