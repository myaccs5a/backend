@extends('administrator.share_layouts.app')

@section('title')
<title>Administrator | Chỉnh sửa company</title>
@endsection()
@section('main_content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('update.company',['id' => $company_users->id])}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Tên công ty</label>
                                    <input type="text" name="name" readonly value="{{$company_users->name}}"
                                        class="form-control">
                                    <input type="text" name="id" hidden value="{{$company_users->id}}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" readonly value="{{$company_users->email}}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Điện thoại</label>
                                    <input type="text" name="phone" readonly value="{{$company_users->phone}}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input type="text" name="address" readonly value="{{$company_users->address}}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Quy mô</label>
                                    <input type="text" name="scales" readonly value="{{$company_users->scales}}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <input type="text" name="desc" readonly value="{{$company_users->desc}}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <label>Logo</label>
                                <div class="form-group">
                                    <img src="{{asset('administrator/assets/images/users/4.jpg')}}" width="260px"
                                        alt="">
                                    <!-- <input type="file" name="avatar" class="form-control"> -->
                                </div>
                                <div class="form-group">
                                    <label>Website</label>
                                    <input type="text" name="website" readonly value="{{$company_users->website}}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select name="status" class="form-control">
                                        <option @if($company_users->status == '1') selected @endif value="1">Hoạt động
                                        </option>
                                        <option @if($company_users->status == '0') selected @endif value="0">Khóa
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-info" href="{{route('index.company')}}">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection