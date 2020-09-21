<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthAdminController extends Controller
{
    public function login(){
        return view('administrator.auth.login');
    }
    public function postLogin(LoginRequest $request){

        if(Auth::guard('admin')->attempt($request->only('email','password'))) {
            //Đăng nhập thành công
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
