@extends('administrator.share_layouts.app')

@section('title')
<title>Administrator | Edit Company</title>
@endsection()
@section('main_content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('update.user',['id' => $user->id])}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <lable>Họ Tên</lable>
                                    <input type="text" name="name" readonly value="{{$user->name}}"
                                        class="form-control">
                                    <input type="text" name="id" hidden value="{{$user->id}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <lable>Email</lable>
                                    <input type="text" name="email" readonly value="{{$user->email}}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <lable>Điện thoại</lable>
                                    <input type="text" name="phone_number" readonly value="{{$user->phone_number}}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <lable>Địa chỉ</lable>
                                    <input type="text" name="address" readonly value="{{$user->address}}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <lable>Ngày Sinh</lable>
                                    <input type="text" name="birthday" readonly value="{{$user->birthday}}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                            <lable>Ảnh đại diện</lable>

                                <div class="form-group">
                                    <img src="{{asset('administrator/assets/images/users/4.jpg')}}" width="200px" alt="">
                                    <!-- <input type="file" name="avatar" class="form-control"> -->
                                </div>

                                <div class="form-group">
                                    <lable>Ngôn ngữ</lable>
                                    <input type="text" name="language" readonly value="{{$user->language}}"
                                        class="form-control">
                                </div>

                                <div class="form-group">
                                    <lable>Trạng thái</lable>
                                    <select name="status" class="form-control">
                                        <option @if($user->status == '1') selected @endif value="1">Hoạt động</option>
                                        <option @if($user->status == '0') selected @endif value="0">Khóa</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <a class="btn btn-info" href="{{route('browser.user')}}">Back</a>
                        <button class="btn btn-success float-right" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection