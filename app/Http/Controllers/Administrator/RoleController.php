<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function index()
    {
        $role = Role::all();
        return view('administrator.pages.role.index',compact('role'));
    }


    public function create()
    {
        $data['roles']          = 'Roles';
        $data['permissions']    = Permission::all();
        return view('administrator.pages.role.create', $data);
    }


    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyRole(Request $request,$id)
    {
            try {
                \DB::beginTransaction();
                Role::deleted($id);
                return redirect()->back()->with('success','Xóa thành công');

            }catch (\Exception $e){
               \DB::rollBack();
                return redirect()->back()->with('error','Xóa khôngthành công');
            }


    }
}
