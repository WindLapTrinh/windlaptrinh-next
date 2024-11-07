@extends('layouts.admin')
@section('content')
<div id="content" class="container-fluid">
    @if(session('status'))
        <div class="alert alert-success" role="alert">
            {{session('status')}}
        </div>
    @endif
    <div class="card">
        <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
            <h5 class="m-0 ">Thêm mới vai trò</h5>
            <div class="form-search form-inline">
                <form action="#">
                    <input type="" class="form-control form-search" placeholder="Tìm kiếm">
                    <input type="submit" name="btn-search" value="Tìm kiếm" class="btn btn-primary">
                </form>
            </div>
        </div>
        <div class="card-body">
            {!! Form::open(['route' => 'role.store']) !!}
                <div class="form-group">
                    {!! Form::label("name", "Tên vai trò") !!}
                    {!! Form::text("name", old("name"), ["class" => "form-control", "id" => "name"]) !!}
                    @error('name')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label("description", "Mô tả") !!}
                    {!! Form::textarea("description", old("description"), 
                    ["class" => "form-control", "id" => "description", "rows" => 3]) !!}
                     @error('description')
                     <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <strong>Vai trò này có quyền gì?</strong>
                <small class="form-text text-muted pb-2">Check vào module hoặc các hành động bên dưới để chọn quyền.</small>
             
                <!-- List Permission  -->

                @foreach ($permissions as $moduleName => $modulePermissions)
                    <div class="card my-4 border">
                        <div class="card-header">
                            {!! Form::checkbox(null, null, null, ["class" => "check-all", "id" => $moduleName]) !!}
                            {!! html_entity_decode(Form::label($moduleName, '<strong>Module '.ucfirst($moduleName) .'</strong>')) !!}
                        </div>
                        <div class="card-body">
                            @foreach ($modulePermissions as $permission)
                                <div class="row">
                                    <div class="col-md-3">
                                        {!! Form::checkbox("permission_id[]", $permission->id, null, ["id" => $permission->slug, "class" => "permission"]) !!}
                                        {!! Form::label($permission->slug, $permission->name)!!}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
                
                <input type="submit" name="btn-add" class="btn btn-primary" value="Thêm mới">
            {!! Form::close() !!}

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $('.check-all').click(function () {
        $(this).closest('.card').find('.permission').prop('checked', this.checked)
      })
</script>
@endsection