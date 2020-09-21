<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest\RequestJobCategory;
use Illuminate\Http\Request;
use App\Models\JobCategorie;
class JobCategoryController extends Controller
{
    public  function getJobCategory(){
        $date['listJobCategorie'] = JobCategorie::all();
        return view('administrator.pages.job_category.show',$date);
    }
    public function addJobCategory(){
        return view('administrator.pages.job_category.add');
    }
    public function saveJobCategory(RequestJobCategory $request){
        $job_cate = new JobCategorie();
        $job_cate->job_category_name =$request->job_category;
        $job_cate->save();
        return redirect()->back()->with(['success'=>'Đã thêm ngành nghề thành công']);

    }
    public function getEditJobCategory($id){
        $date['job_cate']= JobCategorie::find($id);
        return view('administrator.pages.job_category.edit',$date);
    }
    public function postEditJobCategory(RequestJobCategory $request ,$id){
        $job_cate = JobCategorie::find($id);
        $job_cate->job_category_name =$request->job_category;
        $job_cate->save();
        return redirect()->route('job-category')->with(['success'=>'Sửa thành công']);

    }
    public function getDeleteJobCategory($id){
        JobCategorie::destroy($id);
        return redirect()->back()->with(['success'=>'Xoá thành công']);
    }
}
