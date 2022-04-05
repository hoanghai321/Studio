<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillsAoCuoiDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'billsaocuoi_id',
        'aocuoi_id',
        'price',
        'quantity',
        'timestamps',
    ];

    public function show($billsaocuoi_detail){
        //mảng một chiều
        $item = [
            'id' => $billsaocuoi_detail->id,
            'billsaocuoi_id' => $billsaocuoi_detail->billsaocuoi_id,
            'aocuoi_id' => $billsaocuoi_detail->aocuoi_id,
            'price'  => $billsaocuoi_detail->price,
            'quantity' => $billsaocuoi_detail->quantity,
        ];
    }
}
