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
                <a href="{{route('add-job-category')}}" class="btn btn-success" id="crn">Tạo mới</a>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table">
                                <thead class="bg-light text-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>Danh sách ngành nghề </th>
                                </tr>
                                </thead>
                                <tbody>

                          @foreach ($listJobCategorie as $listjob)
                                    <tr>
                                        <td>{{$listjob->id}}</td>
                                        <td>{{$listjob->job_category_name}}</td>
                                        <td>
                                            <a href="{{asset('admin/job-category/edit-job-category/'.$listjob->id)}}">
                                                <button class="btn btn-success"><i class="fas fa-edit"></i>Sửa</button>
                                            </a>
                                            <a onclick="return confirm('Bạn có chắc là muốn xóa danh mục này không?" href="{{asset('admin/job-category/delete-job-category/'.$listjob->id)}}">
                                            <button class="btn btn-danger" data-catid= data-toggle="modal"
                                                    data-target="#delete"><i class="fas fa-trash-alt"></i>Xóa
                                            </button></a>
                                        </td>
                                    </tr>
                              @endforeach
                                </tbody>
                            </table>
                            <div class="float-right">
{{--                                {!! $admin->links('vendor.pagination.custom') !!}--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



