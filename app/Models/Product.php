<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    protected $fillable = [
        'name',
        'slug',
        'desc',
        'details',
        'price',
        'stock_quantity',
        'is_featured',
        'product_status',
        'user_id',
        'category_id'
    ];

     // Quan hệ: Mỗi bài viết thuộc về một danh mục
     public function category()
     {
         return $this->belongsTo(CategoriesProduct::class, 'category_id');
     }
 
     //get image tbale posst
     public function image()
     {
         return $this->belongsTo(Image::class, 'image_id', 'id');
     }
}
