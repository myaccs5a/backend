@extends('administrator.share_layouts.app')

@section('title')
    <title>Administrator | Role</title>
@endsection()
@section('main_content')
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{route('create.role')}}" class="btn btn-success" id="crn">Tạo mới</a>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="bg-light text-dark">
                                <tr>
                                    <th>Tên khóa</th>
                                    <th>Tên quyền</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                        @foreach ($role as $key => $items)
                                        <tr>
                                            <td>{{$items->name}}</td>
                                            <td>{{$items->display_name}}</td>
                                            <td>
                                                <button class="btn btn-success"><i class="fas fa-edit"></i><a href="{{route('edit.role',['id'=>$items->id])}}">Chỉnh sửa</a> </button>
                                                <button class="btn btn-danger"  data-catid={{$items->id}} data-toggle="modal" data-target="#delete"><i class="fas fa-trash-alt"></i>Xóa</button>
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

    <!-- modal -->
    <div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                </div>
                <form action="{{route('destroy.role',$items->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <p class="text-center">
                            Bạn có chắc chắn muốn xóa trường này không?
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Không, Quay lại</button>
                        <button type="submit" class="btn btn-warning">Có, Xóa ngay</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
