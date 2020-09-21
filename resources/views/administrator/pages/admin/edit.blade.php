@extends('administrator.share_layouts.app')

@section('title')
    <title>Administrator | Create Account</title>
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
                        <lable>Tên người dùng</lable>
                        <input type="text" name="name" class="form-control" value="{{$account->name}}">
                    </div>
                    <div class="form-group">
                        <lable>Email</lable>
                        <input type="text" name="email" class="form-control" value="{{$account->email}}">
                    </div>
                    <div class="form-group">
                        <lable>Ảnh đại diện</lable>
                        <input type="file" accept="image/*" onchange="loadFile(event)" name="avatar">
                        <img class="rounded-circle" id="output" src="{{asset($account->avatar)}}"/>
                    </div>
                    <div class="form-group">
                        <lable>Vai trò</lable>
                        <select name="roles" class="form-control">
                            @foreach($roles as $items)
                                <option value="{{$items->id}}">{{$items->role_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Lưu</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('script')
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
@endsection


