@extends('layouts.admin')

@section('content')
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold">
                Thêm bài viết
            </div>
            <div class="card-body">
                <!-- Form method POST -->
                <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Tiêu đề bài viết -->
                    <div class="form-group">
                        <label for="name">Tiêu đề bài viết</label>
                        <input class="form-control" type="text" name="title" id="name" >
                    </div>

                    <!-- Nội dung bài viết -->
                    <div class="form-group">
                        <label for="content">Nội dung bài viết</label>
                        <textarea class="form-control" name="content" id="content" rows="5"></textarea>
                    </div>

                    <!-- Danh mục bài viết từ bảng CategoriesPost -->
                    <div class="form-group">
                        <label for="category">Danh mục</label>
                        <select class="form-control" name="category" id="category" >
                            <option value="">Chọn danh mục</option>
                            @foreach ($categories as $category)
                                @include('admin.partials.category-option', ['category' => $category, 'prefix' => ''])
                            @endforeach
                        </select>
                    </div>
                     <!-- Upload hình ảnh bài viết -->
                     <div class="form-group">
                        <label for="image">Ảnh thumbnail</label>
                        <input type="file" name="image" id="image" class="form-control-file" required>
                    </div>

                    <!-- Trạng thái bài viết -->
                    <div class="form-group">
                        <label for="status">Trạng thái</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status_pending" value="pending">
                            <label class="form-check-label" for="status_pending">
                                Chờ duyệt
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status_published" value="published">
                            <label class="form-check-label" for="status_published">
                                Công khai
                            </label>
                        </div>          
                    </div>
                    <!-- Submit -->
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </form>
            </div>
        </div>
    </div>
@endsection
