<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;
use Gate;
class RoleController extends Controller
{

    public function index()
    {
        $role = Role::all();
        $auth = \Auth::guard('admin')->user();
        return view('administrator.pages.role.index',compact('role'));
    }


    public function create()
    {
        $data['permissions']    = Permission::all();
        return view('administrator.pages.role.create', $data);
    }


    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $permission = $request->input('permission',[]);
            try {
                \DB::beginTransaction();
                $data = array(
                    'name'          => $request->name,
                    'display_name'  => $request->display_name
                );
                $rolesCreate = Role::create($data);
                if ($rolesCreate){
                    $rolesCreate->permissions()->attach($permission);
                }
                \DB::commit();
                return redirect()->route('index.role')->with('success', 'Nó đã làm việc, Đăng bài thành công!');
            } catch (\Throwable $th) {
                \DB::rollBack();
                // dd($th->getMessage(),$th->getLine());
                return redirect()->route('index.role')->with('error', 'Đã có lỗi sảy ra, Đăng bài không thành công!');
            }
        }
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $data['lsRole']         = \DB::table('permission_role')->where('role_id',$id)->pluck('permission_id');
        $data['permissions']    = Permission::all();
        $data['edit']           = Role::where('id',$id)->first();
        return view('administrator.pages.role.edit', $data);
    }


    public function update(Request $request, $id)
    {
        $id = (int)$id;
        $result = Role::find($id);
        if(is_numeric($id) && $result){
            try {
                \DB::beginTransaction();
                $permission = $request->input('permission',[]);
                $data = array(
                    'name'          =>  $request->name,
                    'display_name'  =>  $request->display_name
                );
                if($result->update($data)){
                    \DB::table('permission_role')->where('role_id', $id)->delete();
                    $result->permissions()->attach($permission);
                    \DB::commit();
                }
                return redirect()->route('index.role')->with('success', 'Cập nhật vai trò thành công!');
            } catch (\Throwable $th) {
                //throw $th;
                dd($th->getMessage());
                \DB::rollback();
                return redirect()->route('index.role')->with('error', 'Cập nhật vai trò không thành công!');
            }
        }
    }

    public function destroyRole(Request $request,$id)
    {
        $id =(int)$id;
        if(is_numeric($id) && $request->isMethod('post')){
            \DB::beginTransaction();
            try {
               $role=Role::find($id);
               $role->delete();
                \DB::commit();
                return redirect()->back()->with('success','Xóa vai trò thành công');
            }catch (\Exception $e){
               \DB::rollBack();
                return redirect()->back()->with('error','Xóa không thành công. Đã có lỗi xảy ra');
            }

        }


    }
}
