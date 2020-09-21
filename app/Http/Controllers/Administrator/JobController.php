<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\CompanyUser;
use App\Models\Job;
use App\Models\JobCategorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{

    //Hiển thị trang bài tuyển dụng
     function index()
    {
        $jobs = DB::table('jobs')
        ->join('company_users', 'company_users.id', '=', 'jobs.company_user_id')
        ->join('job_categories', 'job_categories.id', '=', 'jobs.job_category_id')
        ->select('jobs.*', 'job_categories.job_category_name', 'company_users.name as name_company')
        ->get();
        return view('administrator.pages.jobs.index',compact('jobs'));
    }

    //Tạo mới bài tuyển dụng
    public function create()
    {
        //
    }

    //Lưu bài tuyển dụng
    public function store(Request $request)
    {
        //
    }

    //Hiển thị chi tiết bài tuyển dụng
    public function show($id)
    {
        $company_users = CompanyUser::all();
        $job_categories = JobCategorie::all();
        $job = Job::where('id',$id)->first();
        return view('administrator.pages.jobs.view',compact('job','company_users','job_categories'));
    }

    //Chỉnh sửa bài tuyển dụng
    public function edit($id)
    {
        $company_users = CompanyUser::all();
        $job_categories = JobCategorie::all();
        $job = Job::where('id',$id)->first();
        return view('administrator.pages.jobs.edit',compact('job','company_users','job_categories'));
    }

    //Cập nhập bài tuyển dụng
    public function update(Request $request, $id)
    {
         $check=(int)$id;
        $result = Job::find($id);
        if (is_numeric($check) && $result)
        {
            $result->status = $request->status;
            $result->save();
            return redirect()->route('browser.job')->with('success','Sửa thành công');
        }

        return redirect()->route('browser.job')->with('error','Đã có lỗi sảy ra vui lòng thử lại');
    }

    //Xóa bài tuyển dụng
    public function destroy($id)
    {
        //
    }
}
