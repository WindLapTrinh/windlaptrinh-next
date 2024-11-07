@extends('layouts.admin')

@section('content')
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold">
            Chỉnh sửa thông tin người dùng
        </div>
        <div class="card-body">
            <form action="{{route('user.update', $user->id)}}"  method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Họ và tên</label>
                    <input class="form-control" type="text" value="{{$user->name}}" name="name" id="name">
                    @error('name')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    {{-- <label for="email">Email</label>
                    <input class="form-control" type="text" value="{{$user->email}}" name="email" id="email" disabled> --}}
                    {!! Form::label("email", "Email") !!}
                    {!! Form::text("email", $user->email, ["class" => "form-control", "id" => "email", "readonly" => "readonly"]) !!}
                    @error('email')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    @php
                        $selectedRoles = $user->roles->pluck('id')->toArray();
                        $options = $roles->pluck('name', 'id')->toArray();
                    @endphp
                    <label for="roles">Nhóm quyền</label>
                    {!! Form::select("role_id[]", $options, $selectedRoles, ["id" => "roles","class" => "form-control", "multiple" => true]) !!}
                </div>

                <button type="submit" name="btn-update" value="Cập nhập" class="btn btn-primary">Cập nhập</button>
            </form>
        </div>
    </div>
</div>
@endsection