@extends('administrator.share_layouts.app')

@section('title')
    <title>Quản trị | Tin tuyển dụng</title>
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
                                    <th>Tên công việc</th>
                                    <th>Công ty</th>
                                    <th>Danh mục</th>
                                    <th>Địa chỉ</th>
                                    <th>Thời hạn</th>
                                    <th>Trạng thái</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($jobs as $job)
                                    <tr>
                                        <td>{{$job->job_name}}</td>
                                        <td>{{$job->name_company}}</td>
                                        <td>{{$job->job_category_name}}</td>
                                        <td>{{$job->address}}</td>
                                        <td>{{$job->deadline_job}}</td>
                                        <td>
                                            @if($job->status == '1')
                                            <span>Hoạt động</span>
                                            @else
                                            <span>Đang khóa</span>
                                            @endif
                                        </td>
                                        <td>
                                          <a class="btn btn-info" href="{{route('show.job',['id' => $job->id])}}"><i class="fas fa-eye " style="margin-right:5px;"></i>Chi tiết</a>
                                          <a class="btn btn-success" href="{{route('edit.job',['id' => $job->id])}}"><i class="fas fa-edit"style="margin-right:5px;"></i>Sửa</a>
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
