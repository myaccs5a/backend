<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthAdminController extends Controller
{
    public function login(){
        return view('administrator.auth.login');
    }
    public function postLogin(Request $request){

        if(Auth::guard('admin')->attempt($request->only('email','password'))) {
            //Đăng nhập thành công
            // dd($request);
            session()->flash('success', 'Dăng nhập thành công.');
            return redirect()
                ->route('admin.dashboard');
        }
        session()->flash('error', 'Có lỗi thử ra vui lòng thử lại');
        return redirect()
            ->route('login.admin');
    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()
            ->route('logout.admin')
            ->with('status','Admin has been logged out!');
    }
}
