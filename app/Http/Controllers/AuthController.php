<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if($request->getMethod() == 'GET') {
            if(Auth::user())
                return redirect()->route('admin.home');
            return view('auth.login');
        } else {
            $this -> validate($request,
            [
                'password' => 'required|min:6|max:30',
                'email' => 'required',
                'password.min' => 'Mật khẩu từ 6 đến 30 kí tự',
                'password.max' => 'Mật Khẩu từ 6 đến 30 kí tự',
            ],
            [
                'email.required' => 'Bạn chưa nhập tài khoản',
                'password.required' => 'Bạn chưa nhập mật khẩu',
            ]);
            
            if(User::where('email', $request['email'])->where('type', 2)->first()) {
                return redirect()->route('admin.login')->with('error', 'Bạn không có quyền đăng nhập');
            } else {
                if(Auth::attempt($request->only(['email', 'password']))){
                    return redirect()->route('admin.home');
                } else return redirect()->route('admin.login')->with('thongbao', 'Tài khoản mật khẩu không chính xác');
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

}
