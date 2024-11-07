@extends('layouts.admin')

@section('content')
    <div id="content" class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
                        <span>Danh sách danh mục con của "{{ $parentCategory->name }}"</span>
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
                                @foreach ($subcategories as $subcategory)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td><a class="text-setting"
                                                href="{{ $subcategory->children->count() > 0 ? route('category.post.subcategories', $subcategory->id) : '#' }}">{{ $subcategory->name }}</a>
                                        </td>
                                        <td>{{ $subcategory->slug }}</td>
                                        <td>{!! $subcategory->desc !!}</td>
                                        <td>
                                            <button
                                                class="btn btn-success btn-submit btn-sm rounded-0 text-white btn-edit-category-product"
                                                type="button" data-id="{{ $subcategory->id }}"
                                                data-name="{{ $subcategory->name }}" data-desc="{{ $subcategory->desc }}"
                                                data-parent_id="{{ $subcategory->parent_id }}" data-toggle="tooltip"
                                                data-placement="top" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <a href="{{ route('category.product.delete', $subcategory->id) }}"
                                                onclick="return confirm('Bạn có chắc xóa danh mục này không?')"
                                                class="btn btn-danger btn-sm rounded-0 text-white btn-submit" type="button"
                                                data-toggle="tooltip" data-placement="top" title="Delete"><i
                                                    class="fa fa-trash"></i></a>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Cập nhật danh mục -->
        <div class="modal fade" id="editCategoryModal" tabindex="-1" role="dialog"
            aria-labelledby="editCategoryModalLabel" aria-hidden="true">
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
                                <input type="text" name="name" class="form-control" id="edit_name"
                                    placeholder="Nhập tên danh mục" required>
                            </div>
                            <div class="form-group">
                                <label for="edit_desc">Mô tả danh mục</label>
                                <textarea name="desc" class="form-control" id="edit_desc" placeholder="Nhập mô tả danh mục"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="edit_parent_id">Danh mục cha</label>
                                <select name="parent_id" class="form-control" id="edit_parent_id">
                                    <option value="0">Không có danh mục cha</option> 
                                    @foreach ($allCategories as $category)
                                        @include('admin.partials.category-option', ['category' => $category, 'prefix' => ''])
                                    @endforeach
                                </select>
                            </div>                            

                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
