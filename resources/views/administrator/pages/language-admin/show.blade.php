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
                <a href="{{route('add-language')}}" class="btn btn-success" id="crn">Tạo mới</a>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table">
                                <thead class="bg-light text-dark">
                                <tr>
                                    <th>Ngôn Ngữ</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                @if(session('success'))
                                    <div class="red-text" style="color: blue;padding-bottom: 10px">{{session('success')}}</div>
                                @endif
                                <tbody>

                                @foreach ($listLanguage as $listlang)
                                    <tr>
                                        <td>{{$listlang->name_language}}</td>
                                        <td>
                                            <a href="{{asset('admin/language/edit-language/'.$listlang->id)}}">
                                                <button class="btn btn-success"><i class="fas fa-edit"></i>Sửa</button>
                                            </a>
                                            <a onclick="return confirm('Bạn có chắc là muốn xóa danh mục này không ?')" href="{{asset('admin/language/delete-language/'.$listlang->id)}}">
                                            <button class="btn btn-danger" data-catid= data-toggle="modal"
                                                    data-target="#delete"><i class="fas fa-trash-alt"></i>Xóa
                                            </button></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="float-right">
                                {!! $listLanguage->links('vendor.pagination.custom') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal -->
@endsection


