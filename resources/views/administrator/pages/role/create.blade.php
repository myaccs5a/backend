@extends('administrator.share_layouts.app')

@section('title')
    <title>Quản trị | Tạo mới quản trị</title>
@endsection()
@section('main_content')
<div class="container-fluid">
    <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('store.role')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <lable>Tên người dùng</lable>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <lable>Email</lable>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <lable>Mật khẩu</lable>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <lable>Xác nhận mật khẩu</lable>
                        <input type="password" name="password_confirm" class="form-control">
                    </div>
                    <div class="form-group">
                        <lable>Ảnh đại diện</lable>
                        <input type="file" name="avatar" class="form-control">
                    </div>
                    <div class="form-group">
                        <label></label>
                        @foreach ($permissions as $permission)
                        {{-- <input type="checkbox" class="form-control"> --}}
                        <input type="checkbox" name="permission[]"  id="exampleCheck{{ $permission->id }}" value="{{ $permission->id }}">
                        <label for="exampleCheck{{ $permission->id }}">{{ $permission->display_name }}</label>
                        {{-- <input type="checkbox" name="permission[]" value="{{ $permission->id }}"> --}}
                        {{-- <label class="form-check-label" for="exampleCheck{{ $permission->id }}">{{ $permission->display_name }}</label> --}}

                            
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-success float-right">Gửi</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection


