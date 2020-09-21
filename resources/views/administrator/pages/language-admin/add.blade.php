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
                        @if(session('success'))
                            <div class="red-text" style="color: blue;padding-bottom: 10px">{{session('success')}}</div>
                        @endif
                        <form action="{{route('save-language')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <lable>Ngôn ngữ</lable>
                                <input type="text" name="language" class="form-control">
                                @if($errors->has('language'))
                                    <div class="error-text" style="color: red">
                                        {{$errors->first('language')}}
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


