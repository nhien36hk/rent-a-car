<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function logon(){
        return view('admin.logon');
    }
    public function postLogon(Request $request){
        if(Auth::attempt(['email'=>$request->username, 'password'=>$request->password, 'role'=>1])){
            return redirect()->route('admin.index');
        }else{
            return redirect()->back()->with('err', 'sai mật khẩu hoặc không có quyền admin');
        }
    }
    public function sigOut(){
        Auth::logout();
        return redirect()->route('logon');
    }
}
