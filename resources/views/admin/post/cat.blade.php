@extends('layouts.admin')

@section('content')
    <div id="content" class="container-fluid">
        <div class="row">
            <div class="col-12">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
                        <span>Danh sách danh mục</span>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCategoryModal">
                            Thêm mới
                        </button>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên danh mục</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Mô tả</th>
                                    <th scope="col">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $category)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td><a class="text-setting"
                                                href="{{ $category->children->count() > 0 ? route('category.post.subcategories', $category->id) : "#" }}">{{ $category->name }}</a>
                                        </td>
                                        <td>{{ $category->slug }}</td>
                                        <td>{!! $category->desc !!}</td>
                                        <td>
                                            <button class="btn btn-success btn-submit btn-sm rounded-0 text-white btn-edit-category-post"
                                                type="button" data-id="{{ $category->id }}"
                                                data-name="{{ $category->name }}" data-desc="{{ $category->desc }}"
                                                data-parent_id="{{ $category->parent_id }}" data-toggle="tooltip"
                                                data-placement="top" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <a href="{{route('category.product.delete', $category->id)}}"
                                                onclick="return confirm('Bạn có chắc xóa danh mục này không?')"
                                                class="btn btn-danger btn-sm rounded-0 text-white btn-submit" type="button"
                                                data-toggle="tooltip" data-placement="top" title="Delete"><i
                                                    class="fa fa-trash"></i></a>
                                        </td>

                                    </tr>
                                    @empty
                                    <tr class="bg-white">
                                        <td colspan="7">Không có thông tin danh mục nào!</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Thêm mới danh mục -->
    <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-labelledby="addCategoryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCategoryModalLabel">Thêm mới danh mục</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="close-model">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('category.post.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Tên danh mục</label>
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Nhập tên danh mục" required>
                        </div>
                        <div class="form-group">
                            <label for="desc">Mô tả danh mục</label>
                            <textarea name="desc" class="form-control" id="desc" placeholder="Nhập mô tả danh mục"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="parent_id">Danh mục cha</label>
                            <select name="parent_id" class="form-control" id="parent_id">
                                <option value="0">Không có</option>
                                <!-- Gọi hàm đệ quy để hiển thị danh mục phân cấp -->
                                @foreach ($categories as $category)
                                    @include('admin.partials.category-option', [
                                        'category' => $category,
                                        'prefix' => '',
                                    ]) 
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-submit">Thêm mới</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Cập nhật danh mục -->
    <div class="modal fade" id="editCategoryModal" tabindex="-1" role="dialog" aria-labelledby="editCategoryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editCategoryModalLabel">Cập nhật danh mục</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="close-model">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editCategoryForm" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="category_id" id="category_id">
                        <div class="form-group">
                            <label for="edit_name">Tên danh mục</label>
                            <input type="text" name="name" class="form-control" id="edit_name" placeholder="Nhập tên danh mục" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_desc">Mô tả danh mục</label>
                            <textarea name="desc" class="form-control" id="edit_desc" placeholder="Nhập mô tả danh mục"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="edit_parent_id">Danh mục cha</label>
                            <select name="parent_id" class="form-control" id="edit_parent_id">
                                <option value="0">Không có</option>
                                @foreach ($categories as $category)
                                    @include('admin.partials.category-option', [
                                        'category' => $category,
                                        'prefix' => '',
                                    ])
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
