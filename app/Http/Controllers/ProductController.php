<?php

namespace App\Http\Controllers;

use App\Models\CategoriesProduct;
use App\Models\Image;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;


class ProductController extends Controller
{
    //
    function list(Request $request)
    {
        $products = Product::paginate(10);

        $categories = CategoriesProduct::where('parent_id', 0)->get();

        $keyword = $request->input('keyword');

        return view('admin.product.list', compact('products', 'categories', 'keyword'));
    }
    function add()
    {
        $categories = CategoriesProduct::where('parent_id', 0)->get();
        return view('admin.product.add', compact('categories'));
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|max:255',
                'price' => 'required|integer',
                'stock_quantity' => 'required|integer',
                'category_id' => 'required|exists:categories_product,id', 
                'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);
    
            //new product
            $product = new Product();
            $product->name = $request->name;
            $product->slug = Str::slug($request->name);
            $product->desc = $request->desc;
            $product->details = $request->details;
            $product->price = $request->price;
            $product->stock_quantity = $request->stock_quantity;
            $product->is_featured = $request->is_featured;
            $product->product_status = $request->product_status;
            $product->category_id = $request->category_id;
            $product->user_id = auth()->id();
    
            $product->save();
            
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $imageSize = $image->getSize();
                    $imageName = time() . '-' . $image->getClientOriginalName();
                    $image->move(public_path('images'), $imageName);
            
                    // Tạo bản ghi trong bảng images
                    $imageModel = new Image();
                    $imageModel->url = 'images/' . $imageName;
                    $imageModel->name = $imageModel->url;
                    $imageModel->size = $imageSize;
                    $imageModel->user_id = auth()->id();
                    $imageModel->save();
            
                    // Lưu vào bảng trung gian product_image
                    $productImage = new ProductImage();
                    $productImage->product_id = $product->id;
                    $productImage->image_id = $imageModel->id;
                    $productImage->save();
                }
            }
    
            return redirect()->back()->with('status', 'Thêm sản phẩm thành công!');
        } catch (\Exception $e) {
            Log::error('Error adding product: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Đã có lỗi xảy ra !']);
        }
    }
    
}
