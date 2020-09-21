@extends('administrator.share_layouts.app')

@section('title')
    <title>Quản trị | Người dùng</title>
@endsection()
@section('main_content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" >
                                <thead class="bg-light text-dark">
                                <tr>
                                    <th>Tên người dùng</th>
                                    <th>ĐỊa chỉ email</th>
                                    <th>Điện thoại</th>
                                    <th>Địa chỉ</th>
                                    <th>Ảnh đại diện</th>
                                    <th>Ngôn ngữ</th>
                                    <th>Trạng thái</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->phone_number}}</td>
                                        <td>{{$user->address}}</td>
                                        <td>
                                             <img src="{{asset('administrator/assets/images/users/4.jpg')}}" alt="Avatar" class="rounded-circle">
                                        </td>
                                        <td>{{$user->language}}</td>
                                        <td>@if($user->status == '1') Hoạt động @endif
                                            @if($user->status == '0') Khóa @endif
                                        </td>
                                        <td>
                                          <a class="btn btn-info" href="{{route('show.user',['id' => $user->id])}}"><i class="fas fa-eye " style="margin-right:5px;"></i>Chi tiết</a>
                                          <a class="btn btn-success" href="{{route('edit.user',['id' => $user->id])}}"><i class="fas fa-edit"style="margin-right:5px;"></i>Sửa</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="float-lg-right">
                                {!! $users->links('vendor.pagination.custom') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
@endsection

