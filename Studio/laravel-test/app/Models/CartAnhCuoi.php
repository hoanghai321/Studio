<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\anhcuoi;

class CartAnhCuoi
{
    //khởi tạo các biến
    public $items = [];
    public $total_price = 0;
    public $total_quantity = 0;

    public function __construct()
    {
        $this->total_price = $this->total_price();
        $this->total_quantity = $this->total_quantity();
        $this->items = session('carts2') ? session('carts2') : [];
    }

    //hàm thêm mới sản phẩm ảnh cưới vào giỏ hàng
    public function add($anhcuoi, $quantity = 1){
        //mảng một chiều item
        $item = [
            'id' => $anhcuoi->id,
            'name' => $anhcuoi->name,
            'price' => $anhcuoi->price,
            'image' => $anhcuoi-> image,
            'quantity' => $quantity,
        ];

        //nếu đã có
        if(isset($this->items[$anhcuoi->id])){
            //thì cộng số lượng lên
            $this->items[$anhcuoi->id]['quantity'] += $quantity;
        }else{
            //ko thì thôi
             //mảng 2 chiều
            $this->items[$anhcuoi->id] = $item;
        } 
        session(['carts2' => $this->items]);
    }

     //hàm remove cart
     public function remove($id){
        if (isset($this->items[$id])){
            unset($this->items[$id]);
        }
        session(['carts2' => $this->items]);
    }

    //hàm tổng giá
    public function total_price(){
        $t = 0;
        foreach($this->items as $item){
            $t +=$item['price']*$item['quantity'];
        }
        return $t;
    }

    //hàm tổng số lượng
    public function total_quantity(){
        $t = 0;
        foreach($this->items as $item){
            $t +=$item['quantity'];
        }
        return $t;
    }
}
