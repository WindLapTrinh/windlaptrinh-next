<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    // khai báo bảng được sử dụng 
    protected $table = "product_images";

    //khai báo các trường có thể điền dữ liệu
    protected $fillable = [
        'product_id',
        'image_id'
    ];
}
