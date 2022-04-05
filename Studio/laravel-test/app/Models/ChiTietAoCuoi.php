<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietAoCuoi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'image1',
        'image2',
        'image3',
        'id_aocuoi',
    ];
}
