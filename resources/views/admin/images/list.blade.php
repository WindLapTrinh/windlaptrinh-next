@extends('layouts.admin')

@section('content')
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
            <h5 class="m-0">Danh sách hình ảnh</h5>
            <div class="btn-upload">
                <button id="upload-btn" class="btn btn-primary" data-toggle="modal" data-target="#fileManagerModal">Upload Hình Ảnh</button>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Tên file</th>
                        <th scope="col">Kích thước</th>
                        <th scope="col">Người upload</th>
                        <th scope="col">Ngày upload</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($images as $image)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ asset('storage/' . $image->image_url) }}" class="img-thumbnail" style="width: 80px;"></td>
                            <td>{{ $image->file_name }}</td>
                            <td>{{ $image->file_size }} KB</td>
                            <td>{{ $image->user->name }}</td>
                            <td>{{ $image->created_at->format('d/m/Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal để chọn hình ảnh -->
<div class="modal fade" id="fileManagerModal" tabindex="-1" role="dialog" aria-labelledby="fileManagerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="fileManagerModalLabel">Chọn hình ảnh</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe src="{{ url('/laravel-filemanager?type=image') }}" style="width: 100%; height: 500px; border: none;"></iframe>
            </div>
        </div>
    </div>
</div>

@endsection
