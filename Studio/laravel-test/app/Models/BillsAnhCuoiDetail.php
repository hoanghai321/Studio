<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillsAnhCuoiDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'billsanhcuoi_id',
        'anhcuoi_id',
        'price',
        'quantity',
        'timestamps',
    ];
}
