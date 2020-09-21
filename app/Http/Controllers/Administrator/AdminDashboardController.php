<?php

namespace App\Http\Controllers\Administrator;
use App\Http\Controllers\Controller;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $data['admin']=Admin::count();
        $data['company']=Admin::count();
        $data['user']=Admin::count();
        $data['job']=Admin::count();
        
        return view('administrator.pages.dashboard',$data);
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
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
