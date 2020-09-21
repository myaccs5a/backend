@extends('administrator.share_layouts.app')

@section('title')
    <title>Quản trị | Cài đặt website</title>
@endsection()
@section('main_content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="myTable">
                                <thead class="bg-light text-dark">
                                <tr>
                                    <th>Email</th>
                                    <th>Điện thoại</th>
                                    <th>Địa chỉ</th>
                                    <th>Thòi gian làm việc</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($web_setting as $web)
                                    <tr>
                                        <td>{{$web->email}}</td>
                                        <td>{{$web->phone}}</td>
                                        <td>{{$web->address}}</td>
                                        <td>{{$web->time_working}}</td>
                                        <td>
                                          <a class="btn btn-success" href="{{route('edit.web',['id' => $web->id])}}">Sửa</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



