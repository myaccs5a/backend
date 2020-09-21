@extends('administrator.share_layouts.app')

@section('title')
    <title>Quản trị | Liên hệ</title>
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
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="bg-light text-dark">
                                <tr>
                                    <th>Tên người gửi</th>
                                    <th>Địa chỉ mail</th>
                                    <th>Tiêu đề</th>
                                    <th>Nội dung</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($contact as $key => $items)
                                
                                    <tr>
                                        <td>{{$items->name}}</td>
                                        <td>{{$items->email}}</td>
                                        <td>{{$items->title}}</td>
                                        <td>
                                            <textarea class="form-control" readonly cols="30" rows="5">
                                                {{$items->message}}                                          
                                            </textarea>
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
                                {!! $contact->links('vendor.pagination.custom') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

