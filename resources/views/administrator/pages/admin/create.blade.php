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
                <form action="{{route('storeAdmin')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tên người dùng</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Xác nhận mật khẩu</label>
                        <input type="password" name="password_confirm" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Ảnh đại diện</label>
                        <input type="file" accept="image/*" onchange="loadFile(event)" name="avatar">
                        <img style="display:block;width:100px;height:100px;border-radius:100%;" id="output"/>
                    </div>
                    <div class="form-group">
                        <label>Vai trò</label>
                        <select name="roles" class="form-control">
                            @foreach($roles as $items)
                                <option value="{{$items->id}}">{{$items->display_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success float-right">Gửi</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('javascript')
<script>
  var loadFile = function loadFile(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>


