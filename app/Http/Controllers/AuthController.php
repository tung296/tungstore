<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function postLogin(Request $request){
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
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/home');
        }else return redirect('login')->with('thongbao', 'Tài khoản mật khẩu không chính xác');
    }
}
