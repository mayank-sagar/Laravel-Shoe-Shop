<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    function product() {
        return $this->hasOne(Product::class,'id','product_id');
    }

}
