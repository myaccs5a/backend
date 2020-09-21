@extends('administrator.share_layouts.app')

@section('title')
    <title>Quản trị | Tài khoản quản trị</title>
@endsection()
@section('main_content')
    <div class="container-fluid">
        <div class="row">
            <style>
                #crn {
                    margin-bottom: 20px;
                }

                .avatar {
                    vertical-align: middle;
                    width: 50px;
                    height: 50px;
                    border-radius: 50%;
                }
            </style>
            <div class="col-lg-12">
                <a href="{{route('createAdmin')}}" class="btn btn-success" id="crn">Tạo mới</a>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table">
                                <thead class="bg-light text-dark">
                                <tr>
                                    <th>Tên tài khoản</th>
                                    <th>Địa chỉ mail</th>
                                    <th>Ảnh</th>
                                    <th>Vai trò</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($admin as $key => $items)
                                    <tr>
                                        <td>{{$items->name}}</td>
                                        <td>{{$items->email}}</td>
                                        <td>
                                            <img src="{{asset($items->avatar)}}" alt="Avatar" class="rounded-circle">
                                        </td>
                                        <td>
                                            @foreach ($items->roles as $role)
                                                <span class="btn btn-primary">{{ $role->name }}</span>
                                            @endforeach
                                        </td>

                                        <td>
                                            <a href="{{route('editAdmin',$items->id)}}">
                                                <button class="btn btn-success"><i class="fas fa-edit"></i>Sửa</button>
                                            </a>
                                            <button class="btn btn-danger" data-catid={{$items->id}} data-toggle="modal"
                                                    data-target="#delete"><i class="fas fa-trash-alt"></i>Xóa
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="float-right">
                                {!! $admin->links('vendor.pagination.custom') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal -->
    <div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                </div>
                <form action="{{route('destroy_admin',$items->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <p class="text-center">
                            Bạn có chắc chắn muốn xóa trường này không?
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Không, Quay lại</button>
                        <button type="submit" class="btn btn-danger">Có, Xóa ngay</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

