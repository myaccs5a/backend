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
                        <input type="text" name="name" readonly value="{{$websetting->email}}" class="form-control">
                        <input type="text" name="id" hidden value="{{$websetting->id}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <lable>Điện thoại</lable>
                        <input type="text" name="email" readonly value="{{$websetting->phone}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <lable>Địa chỉ</lable>
                        <input type="text" name="address" readonly value="{{$websetting->address}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <lable>Thời gian làm việc</lable>
                        <input type="text" name="websettingsite" readonly value="{{$websetting->time_working}}" class="form-control">
                    </div>
                    <a class="btn btn-info" href="{{route('browser.web')}}">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection


