@extends('layouts.admin')

@section('content')
    <div id="content" class="container-fluid">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
                <h5 class="m-0 ">Danh sách bài viết</h5>
                <div class="form-search form-inline">
                    <form action="#">
                        <input type="" class="form-control form-search" name="keyword"
                            value="{{ $request->input('keyword') }}" placeholder="Tìm kiếm">
                        <input type="submit" name="btn-search" value="Tìm kiếm" class="btn btn-primary">
                    </form>
                </div>
            </div>
            <div class="card-body">
                <div class="analytic">
                    <a href="{{ $request->fullUrlWithQuery(['status' => 'active']) }}" class="text-primary">Kích hoạt<span
                            class="text-muted">({{ $count[0] }})</span></a>
                    <a href="{{ $request->fullUrlWithQuery(['status' => 'trash']) }}" class="text-primary">Vô hiệu hóa<span
                            class="text-muted">({{ $count[1] }})</span></a>
                </div>
                <form action="{{ url('/admin/post/action') }}" method="GET">
                    <div class="form-action form-inline py-3">
                        <select class="form-control mr-1" id="" name="act">
                            <option>Chọn</option>
                            @foreach ($list_act as $k => $act)
                                <option value="{{$k}}">{{$act}}</option>
                            @endforeach
                        </select>
                        <input type="submit" name="btn-search" value="Áp dụng" class="btn btn-primary">
                    </div>
                    <table class="table table-striped table-checkall">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <input name="checkall" type="checkbox">
                                </th>
                                <th scope="col">#</th>
                                <th scope="col">Ảnh</th>
                                <th scope="col">Tiêu đề</th>
                                <th scope="col">Danh mục</th>
                                <th scope="col">Ngày tạo</th>
                                <th scope="col">Tác vụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($posts->total() > 0)
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="list_check[]" value="{{ $post->id }}">
                                        </td>
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td>
                                            @if ($post->image)
                                                <img src="{{ asset($post->image->url) }}" alt="" width="80"
                                                    height="80">
                                            @else
                                                <img src="http://via.placeholder.com/80X80" alt="">
                                            @endif
                                        </td>
                                        <td><a href="" class="title-post">{{ $post->title }}</a></td>
                                        <td>{{ $post->category->name ?? 'Không có' }}</td>
                                        <td>{{ $post->created_at->format('d/m/Y') }}</td>
                                        <td>
                                            <button
                                                class="btn btn-success btn-submit btn-sm rounded-0 text-white btn-edit-post"
                                                data-id="{{ $post->id }}" data-title="{{ $post->title }}"
                                                data-category="{{ $post->category_id }}"
                                                data-content="{{ $post->content }}"
                                                data-image="{{ $post->image ? asset($post->image->url) : '' }}"
                                                type="button" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </button>

                                            <a href="{{ route('post.delete', $post->id) }}"
                                                onclick="return confirm('Bạn có chắc chắn xóa bài viết này không')"
                                                class="btn btn-danger btn-sm rounded-0 text-white btn-submit" type="button"
                                                data-toggle="tooltip" data-placement="top" title="Delete"><i
                                                    class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="7">Hiện tại chưa có thông tin bài viết nào !</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </form>
                <div class="d-flex justify-content-center">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
    {{-- Modal  --}}
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="editPostForm" action="{{ route('post.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="post_id" id="post_id">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Chỉnh sửa bài viết</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="post_title">Tiêu đề</label>
                            <input type="text" name="title" class="form-control" id="post_title" required>
                        </div>
                        <div class="form-group">
                            <label for="post_title">Nội dung</label>
                            <textarea class="form-control" name="content" id="post_content"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="post_category">Danh mục</label>
                            <select name="category_id" class="form-control" id="post_category">
                                <option value="0">Không có</option>
                                @foreach ($categories as $category)
                                    @include('admin.partials.category-option', [
                                        'category' => $category,
                                        'prefix' => '',
                                    ])
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <!-- Hiển thị ảnh hiện tại nếu có -->
                            <div class="mt-2">
                                <label class="col-12">Ảnh hiện tại:</label>
                                <img src="" alt="Ảnh hiện tại" class="img-thumbnail" id="current_image"
                                    width="150" style="display: none;">
                            </div>
                            <label for="image">Chọn ảnh mới (tùy chọn)</label>
                            <input type="file" name="image" id="image" class="form-control-file">

                        </div>

                        <div class="form-group">
                            <label for="status">Trạng thái</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status_pending"
                                    value="pending">
                                <label class="form-check-label" for="status_pending">
                                    Chờ duyệt
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status_published"
                                    value="published">
                                <label class="form-check-label" for="status_published">
                                    Công khai
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
