@extends('administrator.share_layouts.app')

@section('title')
    <title>QUuanr trị | Sửa tin tuyển dụng</title>
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
                                    <!-- <input type="text" name="company_user_id" readonly value="{{$job->company_user_id}}"
                                        class="form-control"> -->
                                </div>
                                <div class="form-group">
                                    <lable>Danh mục công việc</lable>
                                    <select disabled name="job_category_id" class="form-control">
                                      @foreach($job_categories as $job_category)
                                      <option @if($job_category->id == $job->job_category_id) selected @endif value="{{$job_category->id}}">{{$job_category->job_category_name}}</option>
                                      @endforeach
                                    </select>
                                    <!-- <input type="text" name="job_category_id" readonly value="{{$job->job_category_id}}"
                                        class="form-control"> -->
                                </div>
                                <div class="form-group">
                                    <lable>Địa chỉ</lable>
                                    <input type="text" name="address" readonly value="{{$job->address}}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <lable>Yêu cầu công việc</lable>
                                    <input type="text" name="request" readonly value="{{$job->request}}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <lable>Interest</lable>
                                    <input type="text" name="interest" readonly value="{{$job->interest}}"
                                        class="form-control">
                                </div>

                                <div class="form-group">
                                    <lable>Hạn nộp</lable>
                                    <input type="text" name="deadline_job" readonly value="{{$job->deadline_job}}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <lable>Số lượng tuyển</lable>
                                    <input type="text" name="amount_people" readonly value="{{$job->amount_people}}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <lable>Kinh nghiệm</lable>
                                    <input type="text" name="experience" readonly value="{{$job->experience}}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <lable>Giới tính</lable>
                                    <input type="text" name="gender" readonly value="{{$job->gender}}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <lable>Trình độ</lable>
                                    <input type="text" name="degree" readonly value="{{$job->degree}}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <lable>Mô tả công việc</lable>
                                    <input type="text" name="job_desc" readonly value="{{$job->job_desc}}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <lable>Lương</lable>
                                    <input type="text" name="saraly" readonly value="{{$job->saraly}}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <lable>Trạng thái</lable>
                                    <select name="status" class="form-control">
                                        <option @if($job->status == '1') selected @endif value="1">Hoạt động</option>
                                        <option @if($job->status == '0') selected @endif value="0">Đang khóa</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                            <button class="btn btn-success float-right" type="submit">Gửi</button>
                             <a class="btn btn-info float-right" href="{{route('browser.job')}}">Quay về</a>
                    </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection


