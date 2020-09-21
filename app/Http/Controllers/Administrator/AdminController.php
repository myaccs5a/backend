<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Gate;
class AdminController extends Controller
{
    //
    public function index()
    {
//        dd(Gate:('admin_list'));
//       $this->authorize('admin_list');

        $admin = Admin::paginate(2);
        return view('administrator.pages.admin.index',compact('admin'));
        // Gate::authorize('view-settings', $admin);
    }


    public function create()
    {
        $roles = Role::all();
        return view('administrator.pages.admin.create',compact('roles'));
    }


    public function store(Request $request)
    {
        if ($request->isMethod('post')){
            \DB::beginTransaction();
            try {
                $adminuser = new Admin();
                $adminuser->name = $request->name;
                $adminuser->email = $request->email;
                if ($request->hasFile('avatar')) {
                    $file = $request->file('avatar');
                    $extension = $file->getClientOriginalExtension(); // getting image extension
                    $filename =time().'.'.$extension;
                    $file->move('images/admins/', $filename);
                }
                $adminuser->avatar= 'images/admins/'.$filename;
                $adminuser->password = Hash::make($request->password);
                $adminuser->created_at = now();

                $adminuser->save();
                if ($adminuser){
                    \DB::table('admin_role')->insert(array(
                        'admin_role_id' => $request->roles,
                        'admin_user_id' => $adminuser->id,
                    ));
                }
                \DB::commit();
                return redirect()->route('browserAdmin')->with('success','Tạo mới quản trị thành công');
            }catch (\Exception $e){
                \DB::rollback();
                return redirect()->route('browserAdmin')->with('error','Đã có lỗi sảy ra vui lòng thử lại sau');
            }
        }
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $id=(int)$id;
        $data['account'] = Admin::find($id)->first();
        if (is_numeric($id) && $data){
            $data['roles'] = Role::all();
            return view('administrator.pages.admin.edit',$data);
        }
        return redirect()->route('browserAdmin')->with('error', 'Đã có lỗi sảy ra, vui lòng thử lại sau');

    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroyAdmin(Request $request, $id)
    {

        if ($request->isMethod('post')){
            \DB::beginTransaction();
            try {
                $userdestroy=Admin::find($id);
                unlink($userdestroy->avatar);
                $userdestroy->delete();
                \DB::commit();
                return redirect()->route('browserAdmin')->with('success','Xóa tài quản trị thành công');
            }catch (\Exception $e) {
                \DB::rollback();
                return redirect()->route('browserAdmin')->with('error', 'Đã có lỗi sảy ra, vui lòng thử lại sau');
            }
        }
    }
}
