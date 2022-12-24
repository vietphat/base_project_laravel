<?php

namespace App\Http\Controllers;

use App\Models\AppUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AppAdminController extends Controller
{
    // Trang dashboard
    function dashboard()
    {
        return view('admin.dashboard');
    }
    // Trang đăng nhập
    function login()
    {
        return view('admin.login');
    }
    // POST: Trang đăng nhập
    function store_login(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);

        $rules = [
            'email' => 'required|email',
            'password_hash' => 'required|min:5'
        ];

        $message = [
            'email' => 'Email',
            'password_hash' => 'Password'
        ];

        $this->customValidate($data, $rules, $message);

        $dt = array(
            'email' => $request->email,
            'password' => $request->password_hash
        );

        if (Auth::attempt($dt)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        } else {
            return back();
        }
    }
    // Trang đăng ký
    function register()
    {
        return view('admin.register');
    }
    // POST: Trang đăng ký
    function store_register(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);

        $rules = [
            'email' => 'required|email',
            'fullname' => 'required|min:3',
            'phone_number_1' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'username' => 'required|min:3',
            'password_hash' => 'required|min:5',
            'confirm_password' => 'required|same:password_hash',
        ];

        $message = [
            'email' => 'Email',
            'fullname' => 'Full Name',
            'phone_number_1' => 'Phone',
            'username' => 'User Name',
            'password_hash' => 'Password',
            'confirm_password' => 'Confirm Password'
        ];

        $this->customValidate($data, $rules, $message);

        unset($data['confirm_password']);

        $data['password_hash'] = Hash::make($request->password_hash);
        $user = AppUser::create($data);
        $user->save();

        return redirect()->route('admin.login');
    }
    // Hàm đăng xuất
    function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

    // Hàm xác thực dữ liệu
    function customValidate($data, $rules, $message)
    {
        $validator = Validator::make($data, $rules, [], $message)->validate();
        return $validator;
    }
}
