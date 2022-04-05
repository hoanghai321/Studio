<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\aocuoi;

class Cart
{
    //khởi tạo các biến
    public $items = [];
    public $total_price = 0;
    public $total_quantity = 0;

    //hàm khởi tạo các biến
    public function __construct()
    {
        $this->total_price = $this->total_price();
        $this->total_quantity = $this->total_quantity();
        $this->items = session('carts') ? session('carts') : [];
    }

    //hàm thêm mới sản phẩm vào giỏ hàng
    public function add($aocuoi, $quantity = 1){
        //mảng một chiều
        $item = [
            'id' => $aocuoi->id,
            'name' => $aocuoi->name,
            'price' => $aocuoi->price,
            'image'  => $aocuoi->image,
            'quantity' => $quantity,
        ];

        //nếu đã có
        if(isset($this->items[$aocuoi->id])){
            //thì cộng số lượng lên
            $this->items[$aocuoi->id]['quantity'] += $quantity;
        }else{
            //ko thì thôi
             //mảng 2 chiều
            $this->items[$aocuoi->id] = $item;
        } 
        session(['carts' => $this->items]);
    }

    //hàm remove cart
    public function remove($id){
        if (isset($this->items[$id])){
            unset($this->items[$id]);
        }
        session(['carts' => $this->items]);
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

?>