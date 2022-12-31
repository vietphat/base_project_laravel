<?php

namespace App\Http\Controllers;

use App\Models\AppUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthControler extends Controller
{
    // Trang dashboard
    function dashboard()
    {
        return view('admin.dashboard');
    }

    // GET: Đăng nhập
    function get_login_page()
    {
        return view('admin.login');
    }

    // POST: Đăng nhập
    function login(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);

        $rules = [
            'email'         => 'required|email',
            'password'      => 'required',
        ];

        $message = [
            'email'         => 'Email',
            'password'      => 'Password'
        ];

        $this->customValidate($data, $rules, $message);

        $user = array(
            'email'     => $request->email,
            'password'  => $request->password
        );

        if (Auth::attempt($user)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        } else {
            return back();
        }
    }

    // GET: Đăng ký
    function get_register_page()
    {
        return view('admin.register');
    }

    // POST: Đăng ký
    function register(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);

        $rules = [
            'email'             => 'required|unique:app_users|email',
            'fullname'          => 'required',
            // 'phone_number_1'    => 'regex:/^([0-9\s\-\+\(\)]*)$/',
            // 'phone_number_2'    => 'regex:/^([0-9\s\-\+\(\)]*)$/',
            'password'          => 'required|min:4',
            'confirm_password'  => 'required|same:password',
        ];

        $message = [
            'email'             => 'Email',
            'fullname'          => 'Fullname',
            'phone_number_1'    => 'Phonenumber 1',
            'phone_number_2'    => 'Phonenumber 2',
            'password'          => 'Password',
            'confirm_password'  => 'Confirm password'
        ];

        $this->customValidate($data, $rules, $message);

        unset($data['confirm_password']);

        $data['password'] = Hash::make($request->password);
        $user = AppUser::create($data);
        $user->save();

        return redirect()->route('admin.get_login_page');
    }

    // Đăng xuất
    function logout()
    {
        Auth::logout();
        return redirect()->route('admin.get_login_page');
    }

    // Hàm xác thực dữ liệu
    function customValidate($data, $rules, $message)
    {
        $validator = Validator::make($data, $rules, [], $message)->validate();
        return $validator;
    }
}
