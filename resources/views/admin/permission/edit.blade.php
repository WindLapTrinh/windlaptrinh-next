@extends('layouts.admin')

@section('content')
<div id="content" class="container-fluid">
    @if(session('status'))
        <div class="alert alert-success" role="alert">
            {{session('status')}}
        </div>
    @endif
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-header font-weight-bold">
                    Cập nhập thông tin
                </div>
                <div class="card-body">
                        {!! Form::open(['route' => ['permission.update', $permission->id], 'method' => 'POST']) !!}
                            <div class="form-group">
                                {!! Form::label("name", "Tên quyền")!!}
                                {!! Form::text("name", $permission->name, ["class" => "form-control", "id" => "name"])!!}
                                @error('name')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            
                            </div>
                            <div class="form-group">
                                {!! Form::label("slug", "Slug")!!}
                                {!! Form::text("slug", $permission->slug, ["class" => "form-control", "id" => "slug"])!!}
                                @error('slug')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                {!! Form::label("description", "Mô tả")!!}
                                {!! Form::textarea("description", $permission->description, ["class" => "form-control",
                                "id" => "description",
                                "rows" => 3]) !!}
                                @error('description')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Xác nhận</button>
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-header font-weight-bold">
                    Danh sách quyền
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
                            @php
                                $i = 0;
                            @endphp
                            @foreach ($permissions as $moduleName => $modulePermissions)
                                <tr>
                                    <td scope="row"></td>
                                    <td><strong> Module {{ucfirst($moduleName)}}</strong></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach ($modulePermissions as $permission)
                                <tr>
                                    <td scope="row">{{$i++}}</td>
                                    <td>|---{{$permission->name}}</td>
                                    <td>{{$permission->slug}}</td>
                                    <td>
                                        <a href="{{route('permission.edit', $permission->id)}}" class="btn btn-success btn-sm rounded-0 text-white btn-submit" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                        <a href="{{route('permission.delete', $permission->id)}}" onclick="return confirm('Bạn có chắc xóa quyền này không')" class="btn btn-danger btn-sm rounded-0 text-white btn-submit" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
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