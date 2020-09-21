@extends('administrator.share_layouts.app')

@section('title')
    <title>Quản trị | Tạo mới khu vực</title>
@endsection()
@section('main_content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @if(session('success'))
                            <div class="red-text" style="color: blue;padding-bottom: 10px">{{session('success')}}</div>
                        @endif
                        <form action="{{route('save-zones')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <lable>Khu vực</lable>
                                <input type="text" name="zones_name" class="form-control">
                                @if($errors->has('zones_name'))
                                    <div class="error-text" style="color: red">
                                        {{$errors->first('zones_name')}}
                                    </div>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-success float-right">Gửi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


