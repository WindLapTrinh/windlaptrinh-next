@extends('layouts.admin')

@section('content')
<div id="content" class="container-fluid">
    @if(session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="row">
        <!-- Button to open modal -->

        <!-- Modal -->
        <div class="modal fade" id="addPermissionModal" tabindex="-1" role="dialog" aria-labelledby="addPermissionModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addPermissionModalLabel">Thêm quyền</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {!! Form::open(['route' => 'permission.store']) !!}
                            <div class="form-group">
                                {!! Form::label('name', 'Tên quyền') !!}
                                {!! Form::text('name', old('name'), ['class' => 'form-control', 'id' => 'name']) !!}
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                {!! Form::label('slug', 'Slug') !!}
                                <small class="form-text text-muted pb-2">Ví dụ: posts.add</small>
                                {!! Form::text('slug', old('slug'), ['class' => 'form-control', 'id' => 'slug']) !!}
                                @error('slug')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                {!! Form::label('description', 'Mô tả') !!}
                                {!! Form::textarea('description', old('description'), ['class' => 'form-control', 'id' => 'description', 'rows' => 3]) !!}
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

        <!-- Danh sách quyền -->
        <div class="col-12">
            <div class="card">
                <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
                    <span>Danh Sách Quyền</span>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPermissionModal">
                        Thêm mới
                    </button>
                </div>
                
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên quyền</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Tác vụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 0; @endphp
                            @foreach ($permissions as $moduleName => $modulePermissions)
                                <tr>
                                    <td></td>
                                    <td><strong>Module {{ ucfirst($moduleName) }}</strong></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach ($modulePermissions as $permission)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>|---{{ $permission->name }}</td>
                                        <td>{{ $permission->slug }}</td>
                                        <td>
                                            <a href="{{ route('permission.edit', $permission->id) }}" class="btn btn-success btn-sm" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{ route('permission.delete', $permission->id) }}" onclick="return confirm('Bạn có chắc chắn xóa quyền này không?')" class="btn btn-danger btn-sm" title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
