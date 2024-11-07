@extends('layouts.admin')

@section('content')
    <div id="content" class="container-fluid">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
                </ul>
            </div>
        @endif

        <div class="card">
            <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
                <h5 class="m-0">Danh sách sản phẩm</h5>
                <div>
                    <!-- Nút để mở modal thêm mới sản phẩm -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProductModal">
                        Thêm mới
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-checkall">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Danh mục</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($products->count() > 0)
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="text-setting">{{ $product->name }}</td>
                                    <td>{{ $product->category->name ?? 'Không có' }}</td>
                                    <td>{{ number_format($product->price, 0, ',', '.') }} VND</td>
                                    <td>{{ $product->stock_quantity }}</td>
                                    <td>{{ $product->product_status }}</td>
                                    <td>
                                        <button class="btn btn-success btn-sm btn-edit-product" data-toggle="modal"
                                            data-target="#editProductModal" data-id="{{ $product->id }}"
                                            data-name="{{ $product->name }}" data-desc="{{ $product->desc }}"
                                            data-details="{{ $product->details }}" data-price="{{ $product->price }}"
                                            data-stock-quantity="{{ $product->stock_quantity }}"
                                            data-is-featured="{{ $product->is_featured }}"
                                            data-product-status="{{ $product->product_status }}"
                                            data-image="{{ $product->image ? asset($product->image->url) : '' }}"
                                            data-category="{{ $product->category_id }}">
                                            <i class="fa fa-edit"></i>
                                        </button>

                                        <a href="{{ route('product.delete', $product->id) }}" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Bạn có chắc chắn xóa sản phẩm này không?')">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>

                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7">Hiện tại chưa có thông tin sản phẩm nào!</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                <!-- Phân trang -->
                <div class="d-flex justify-content-center">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>

    {{-- Modal add  --}}
    <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addProductModalLabel">Thêm sản phẩm</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body row">
                        <!-- Các trường thông tin sản phẩm -->
                        <div class="form-group col-12">
                            <label for="name">Tên sản phẩm</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <label for="desc">Mô tả ngắn</label>
                            <input type="text" name="desc" class="form-control" id="desc">
                            @error('desc')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <label for="details">Chi tiết sản phẩm</label>
                            <textarea type="text" name="details" class="form-control" id="details"placeholder="Nhập chi tiết sản phẩm"></textarea>
                            @error('details')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6 col-sm-12">
                            <label for="price">Giá</label>
                            <input type="number" name="price" class="form-control" id="price" required>
                            @error('price')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6 col-sm-12">
                            <label for="stock_quantity">Số lượng kho</label>
                            <input type="number" name="stock_quantity" class="form-control" id="stock_quantity" required>
                            @error('stock_quantity')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6 col-sm-12">
                            <label for="is_featured">Nổi bật</label>
                            <select name="is_featured" class="form-control" id="is_featured">
                                <option value="0">Không</option>
                                <option value="1">Có</option>
                            </select>
                            @error('is_featured')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6 col-sm-12">
                            <label for="product_status">Trạng thái</label>
                            <select name="product_status" class="form-control" id="product_status">
                                <option value="active">Hoạt động</option>
                                <option value="inactive">Vô hiệu hóa</option>
                                <option value="out_of_stock">Hết hàng</option>
                            </select>
                            @error('product_status')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <label for="category_id">Danh mục</label>
                            <select name="category_id" class="form-control" id="category_id">
                                @foreach ($categories as $category)
                                    @include('admin.partials.category-option', [
                                        'category' => $category,
                                        'prefix' => '',
                                    ])
                                @endforeach
                            </select>
                            @error('category_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <label for="images">Ảnh sản phẩm</label>
                            <input type="file" name="images[]" id="images" class="form-control-file" multiple>
                            <div id="image-preview" class="mt-3"></div>
                            @error('image')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Product Modal -->
    <div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="editProductModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProductModalLabel">Chỉnh sửa thông tin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('product.update', $product->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="id" id="product-id">

                        <div class="mb-3">
                            <label for="name" class="form-label">Tên sản phẩm</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="desc" class="form-label">Mô tả</label>
                            <input type="text" class="form-control" id="desc" name="desc">
                        </div>

                        <div class="mb-3">
                            <label for="details" class="form-label">Chi tiết sản phẩm</label>
                            <textarea name="details" id="mytextarea" placeholder="Nhập chi tiết sản phẩm"></textarea>
                            @error('details')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Giá</label>
                            <input type="number" class="form-control" id="price" name="price" required>
                        </div>

                        <div class="mb-3">
                            <label for="stock_quantity" class="form-label">Số lượng</label>
                            <input type="number" class="form-control" id="stock_quantity" name="stock_quantity"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="is_featured">Nổi bật</label>
                            <select name="is_featured" class="form-control" id="is_featured">
                                <option value="0" {{ $product->is_featured == 0 ? 'selected' : '' }}>Không</option>
                                <option value="1" {{ $product->is_featured == 1 ? 'selected' : '' }}>Có</option>
                            </select>
                            @error('is_featured')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="product_status">Trạng thái</label>
                            <select name="product_status" class="form-control" id="product_status">
                                <option value="active" {{ $product->product_status == 'active' ? 'selected' : '' }}>Hoạt
                                    động</option>
                                <option value="inactive" {{ $product->product_status == 'inactive' ? 'selected' : '' }}>Vô
                                    hiệu hóa</option>
                                <option value="out_of_stock"
                                    {{ $product->product_status == 'out_of_stock' ? 'selected' : '' }}>Hết hàng</option>
                            </select>
                            @error('product_status')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="category_id">Danh mục</label>
                            <select name="category_id" class="form-control" id="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="images">Ảnh sản phẩm</label>
                            <input type="file" name="images[]" id="images" class="form-control-file" multiple>
                            <div id="image-preview" class="mt-3"></div>
                            @error('image')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
