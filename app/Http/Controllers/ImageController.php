<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Post;

class ImageController extends Controller
{
    public function uploadImage(Request $request)
    {
        // Kiểm tra nếu có file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');

            // Đặt tên file
            $fileName = time() . '_' . $file->getClientOriginalName();

            // Lưu file vào thư mục storage/app/public/images
            $filePath = $file->storeAs('public/images', $fileName);

            // Lưu thông tin file vào bảng images
            $image = Image::create([
                'file_path' => $filePath
            ]);

            // Lấy ID của image vừa tạo
            $imageId = $image->id;

            // Ví dụ thêm post mới và liên kết với ảnh
            $post = Post::create([
                'title' => $request->input('title'),
                'content' => $request->input('content'),
                'id_image' => $imageId
            ]);

            return redirect()->back()->with('success', 'Ảnh và bài đăng đã được lưu thành công!');
        }

        return redirect()->back()->with('error', 'Chưa có ảnh nào được tải lên.');
    }
}
