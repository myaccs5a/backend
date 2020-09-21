@extends('administrator.share_layouts.app')

@section('title')
    <title>Quản trị | Cài đặt website</title>
@endsection()
@section('main_content')
<div class="container-fluid">
    <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('update.web',['id' => $websetting->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <lable>Email</lable>
                        <input type="text" name="email" value="{{$websetting->email}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <lable>Điện thoại</lable>
                        <input type="text" name="phone" value="{{$websetting->phone}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <lable>Địa chỉ</lable>
                        <input type="text" name="address" value="{{$websetting->address}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <lable>Thời gian làm việc</lable>
                        <input type="text" name="time_working" value="{{$websetting->time_working}}" class="form-control">
                    </div>
                    <a class="btn btn-info" href="{{route('browser.web')}}">Back</a>
                    <button class="btn btn-success float-right" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection


