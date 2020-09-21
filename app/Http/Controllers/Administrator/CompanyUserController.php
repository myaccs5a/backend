<?php

namespace App\Http\Controllers\Administrator;
use App\Http\Controllers\Controller;
use App\Models\CompanyUser;
use Illuminate\Http\Request;

class CompanyUserController extends Controller
{

    public function index()
    {
        $company_users = CompanyUser::paginate(5);
        return view('administrator.pages.company.index',compact('company_users'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $company_users = CompanyUser::where('id',$id)->first();
        return view('administrator.pages.company.view',compact('company_users'));
    }


    public function edit($id)
    {
        $company_users = CompanyUser::where('id',$id)->first();
        return view('administrator.pages.company.edit',compact('company_users'));
    }


    public function update(Request $request, $id)
    {
        $company_users = CompanyUser::find($id);
        $company_users->status = $request->status;
        $company_users->save();
        return redirect()->route('company.index')->with('success','Cập nhập thành công');
    }


    public function destroy($id)
    {
        //
    }
}
