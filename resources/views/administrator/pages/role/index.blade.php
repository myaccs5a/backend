@extends('administrator.share_layouts.app')

@section('title')
    <title>Administrator | Role</title>
@endsection()
@section('main_content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="bg-light text-dark">
                                <tr>
                                    <th>Tên quyền</th>
                                    <th>Tên hiển thị</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                        @foreach ($role as $key => $items)
                                        <tr>
                                            <td>{{$items->name}}</td>
                                            <td>{{$items->display_name}}</td>
                                            <td>
                                                <button class="btn btn-primary"  data-toggle="modal" data-target="#delete"><i class="fas fa-eye "></i>View</button>
                                                <button class="btn btn-success"  data-toggle="modal" data-target="#delete"><i class="fas fa-edit"></i>Edit</button>
                                                <button class="btn btn-danger"  data-catid={{$items->id}} data-toggle="modal" data-target="#delete"><i class="fas fa-trash-alt"></i>Delete</button>

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
