<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aocuoi extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'image',
    ];
    public function chitietaocuoi(){
        return $this->hasOne(ChiTietAoCuoi::class, 'foreign_key');
    }
}
