@extends('administrator.share_layouts.app')

@section('title')
    <title>Quản trị | Tạo mới Role</title>
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
                <form action="{{route('store.role')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Tên khóa</label>
                                <input type="text" name="name" class="form-control" placeholder="Tên khóa">
                            </div>
                            <div class="form-group">
                                <label>Tên quyền </label>
                                <input type="text" name="display_name" class="form-control" placeholder="Tên quyền">
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                @if (isset($permissions))
                                    @foreach ($permissions as $permission)
                                    <div class="form-check">
                                        <input type="checkbox" name="permission[]"  id="exampleCheck{{ $permission->id }}" value="{{ $permission->id }}">
                                        <label for="exampleCheck{{ $permission->id }}"><h4>{{ $permission->display_name }}</h4></label>
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


