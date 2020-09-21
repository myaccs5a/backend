@extends('administrator.share_layouts.app')

@section('title')
    <title>Quản trị | Chỉnh sửa quyền</title>
@endsection()
@section('main_content')
<style>
    label {
      cursor: pointer;
    }
  </style>
<div class="container-fluid">
    <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('update.role',['id'=>$edit->id])}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Tên quyền</label>
                                <input type="text" name="display_name" class="form-control" placeholder="Tên hiển thị" value="{{$edit->display_name}}">
                            </div>
                            <div class="form-group">
                                <label>Tên khóa</label>
                                <input type="text" name="name" class="form-control" placeholder="Khóa" value="{{$edit->name}}">
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                @if (isset($permissions))
                                    @foreach ($permissions as $index => $permission)
                                        {{-- <?php
                                        $k = $index+4;
                                        if($k % 4 == 0){
                                            $explode = explode(' ',$permission->display_name);
                                            echo 'Vai trò: '.array_pop($explode);
                                        }     
                                        ?> --}}
                                        <div class="form-check">
                                            <div class="form-check">
                                                <input {{$lsRole->contains($permission->id) ? 'checked' : ''}} type="checkbox" name="permission[]" class="form-check-input" id="exampleCheck{{ $permission->id }}" value="{{ $permission->id }}">
                                                <label class="form-check-label" for="exampleCheck{{ $permission->id }}">{{ $permission->display_name }}</label>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success float-right">Gửi</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection


