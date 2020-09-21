@extends('administrator.share_layouts.app')

@section('title')
    <title>Quản trị | Chi tiết tin tuyển dụng</title>
@endsection()
@section('main_content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('update.job',['id' => $job->id])}}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <lable>Tên Công việc</lable>
                                        <input type="text" name="job_name" readonly value="{{$job->job_name}}"
                                               class="form-control">
                                        <input type="text" name="id" hidden value="{{$job->id}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <lable>Tên Slug</lable>
                                        <input type="text" name="slug_name" readonly value="{{$job->slug_name}}"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <lable>Công ty</lable>
                                        <select disabled name="company_user_id" class="form-control">
                                            @foreach($company_users as $company_user)
                                                <option value="{{$company_user->id}}">{{$company_user->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <lable>Danh mục công việc</lable>
                                        <select disabled name="job_category_id" class="form-control">
                                            @foreach($job_categories as $job_category)
                                                <option @if($job_category->id == $job->job_category_id) selected
                                                        @endif value="{{$job_category->id}}">{{$job_category->job_category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <lable>Địa chỉ</lable>
                                        <input type="text" readonly value="{{$job->address}}"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <lable>Yêu cầu công việc</lable>
                                        <textarea readonly id="" cols="30" rows="4" class="form-control">{{$job->request}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <lable>Interest</lable>
                                        <input type="text"  readonly value="{{$job->interest}}"
                                               class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <lable>Hạn nộp</lable>
                                        <input type="text"  readonly value="{{$job->deadline_job}}"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <lable>Số lượng tuyển</lable>
                                        <input type="text"  readonly value="{{$job->amount_people}}"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <lable>Kinh nghiệm</lable>
                                        <input type="text"  readonly value="{{$job->experience}}"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <lable>Giới tính</lable>
                                        <input type="text" readonly value="{{$job->gender}}"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <lable>Trình độ</lable>
                                        <input type="text" readonly value="{{$job->degree}}"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <lable>Mô tả công việc</lable>
                                        <textarea readonly id="" cols="30" rows="4" class="form-control">{{$job->job_desc}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <lable>Lương</lable>
                                        <input type="text" readonly value="{{$job->saraly}}"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <lable>Trạng thái</lable>


                                        <input type="text" readonly value="@if($job->status == '1') Hoạt động @else Đang khóa @endif" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-info" href="{{route('company.index')}}">Quay về</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
