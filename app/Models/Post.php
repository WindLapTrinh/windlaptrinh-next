<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Add this
class Post extends Model
{
    use HasFactory, SoftDeletes;

    // Khai báo bảng được sử dụng
    protected $table = 'posts';

    // Khai báo các trường có thể điền dữ liệu
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'status',
        'user_id',
        'category_id',
        'image_id'
    ];

    // Quan hệ: Mỗi bài viết thuộc về một danh mục
    public function category()
    {
        return $this->belongsTo(CategoriesPost::class, 'category_id');
    }

    //get image tbale posst
    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id', 'id');
    }
}
