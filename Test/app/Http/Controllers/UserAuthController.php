<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User; // 导入 User 模型
use Illuminate\Support\Facades\Hash; // 导入 Hash 类

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
        $form_data = $request->all();

        // 数据验证
        if (empty($form_data['password']) || empty($form_data['account']) || empty($form_data['nickname'])) {
            return redirect('/user/auth/chooise')
                ->withInput()
                ->withErrors(['message' => '資料不齊全']);
        } else {
            $user = User::create([
                'account' => $form_data['account'],
                'password' => Hash::make($form_data['password']),
                'nickname' => $form_data['nickname'],
                'phone' => $form_data['phone'],
                'repassword' => Hash::make($form_data['repassword']),
                'name' => $form_data['name']
            ]);

            dd($user);
        }
    }
}

