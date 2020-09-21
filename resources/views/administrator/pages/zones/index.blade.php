@extends('administrator.share_layouts.app')

@section('title')
    <title>Quản trị | Khu vực</title>
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
                <a href="{{route('add-zones')}}" class="btn btn-success" id="crn">Tạo mới</a>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table">
                                <thead class="bg-light text-dark">
                                <tr>
                                    <th>Khu vực </th>
                                    <th>Hành động </th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($listZones as $zones)
                                    <tr>
                                        <td>{{$zones->name_zone}}</td>
                                        <td>
                                            <a href="{{asset('admin/zones/edit-zones/'.$zones->id)}}">
                                                <button class="btn btn-success"><i class="fas fa-edit"></i>Sửa</button>
                                            </a>
                                            <a onclick="return confirm('Bạn có chắc là muốn xóa danh mục này không?" href="{{asset('admin/zones/delete-zones/'.$zones->id)}}">
                                            <button class="btn btn-danger" data-catid= data-toggle="modal"
                                                    data-target="#delete"><i class="fas fa-trash-alt"></i>Xóa
                                            </button></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="float-right">
                                {!! $listZones->links('vendor.pagination.custom') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



