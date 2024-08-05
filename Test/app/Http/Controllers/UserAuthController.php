<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserAuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function profile($id)
    {
        return 'my id :' . $id;
    }

    public function signUp()
    {
        $binding = [
            'title' => '註冊',
            'sub_title' => '測試測試',
        ];
        return view('auth.signup', $binding);
    }

    public function inherit()
    {
        $binding = [
            'title' => 'Login - Layout 3 | Canvas',
        ];
        return view('auth.inherit', $binding);
    }

    public function chooise()
    {
        $binding = [
            'title' => 'Chooise Page',
        ];
        return view('auth.chooise', $binding);
    }

    public function signUpProcess(Request $request)
    {
        // 取得輸入資料
        $input = $request->all();

        // 驗證輸入資料
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // 假設使用者資料存儲在一個名為 User 的模型中
        // 將新使用者保存到數據庫中
        $user = new User();
        $user->username = $input['username'];
        $user->email = $input['email'];
        $user->password = bcrypt($input['password']); // 確保密碼加密
        $user->save();

        // 註冊成功後重定向或返回成功信息
        return redirect()->route('login')->with('success', '註冊成功，請登錄。');
    }

    public function chooiseProcess(Request $request)
    {
        // 假設你要處理一些數據
        $form_data = $request->all();

        // 打印數據並終止腳本執行
        dd($form_data);
    }
}
