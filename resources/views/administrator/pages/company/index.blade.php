@extends('administrator.share_layouts.app')

@section('title')
    <title>Quản trị | Doanh nghiệp</title>

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
                                    <th>Tên công ty</th>
                                    <th>Địa chỉ email</th>
                                    <th>Điện thoại</th>
                                    <th>Địa chỉ</th>
                                    <th>Logo</th>
                                    <th>Quy mô</th>
                                    <th>Website</th>
                                    <th>Trạng thái</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($company_users as $company_user)
                                    <tr>
                                        <td>{{$company_user->name}}</td>
                                        <td>{{$company_user->email}}</td>
                                        <td>{{$company_user->phone}}</td>
                                        <td>{{$company_user->address}}</td>
                                        <td>
                                        <img src="{{asset($company_user->avatar)}}" alt="Avatar" class="rounded-circle">
                                        </td>
                                        <td>{{$company_user->scales}}</td>
                                        <td>{{$company_user->website}}</td>
                                        <td>
                                            @if($company_user->status == '1')
                                                <span>Hoạt động</span>
                                            @else
                                               <span>Khóa</span>
                                            @endif
                                        </td>
                                        <td>
                                          <a class="btn btn-info" href="{{route('show.company',['id' => $company_user->id])}}"><i class="fas fa-eye " style="padding-right:5px;"></i>Chi tiết</a>
                                          <a class="btn btn-success" href="{{route('edit.company',['id' => $company_user->id])}}"><i class="fas fa-edit"style="padding-right:5px;"></i>Sửa</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="float-lg-right">
                                {!! $company_users->links('vendor.pagination.custom') !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
