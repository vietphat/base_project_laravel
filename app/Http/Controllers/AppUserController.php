<?php

namespace App\Http\Controllers;

use App\Models\AppUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AppUserController extends Controller
{
    // Xem danh sách người dùng
    public function index()
    {
        $dataUser = AppUser::orderByDesc("id")->get();
        // dd($dataUser);
        return view('admin.user.list',compact('dataUser'));
    }

    // GET: Thêm người dùng
    public function create()
    {
        return view("admin.user.add");
    }

    // POST: Thêm người dùng
    public function store(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);

        $rules = [
            'fullname'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'confirm_password'=>'required|same:password',
            'address'=>'required'
        ];
        $messages = [
            'fullname' => 'Full Name',
            'email' => 'Email',
            'password' => 'Password',
            'confirm_password' => 'Confirm Password',
            'address' => 'Address'
        ];

        $this->customValidate($data,$rules,$messages);

        unset($data['confirm_password']);

        $data['password'] = Hash::make($request->password);
        
        $user = AppUser::create($data);
        $user->save();
        return back();
    }

    // Xem chi tiết người dùng
    public function show($userId)
    {
        $user = AppUser::findOrFail($userId);
        return view('admin.user.show', compact('user'));
    }

    // GET: sửa thông tin người dùng
    public function edit($userId)
    {
        $user = AppUser::findOrFail($userId);
        return view("admin.user.edit", compact('user'));
    }

    // POST: sửa thông tin người dùng
    public function update(Request $request, $userId)
    {
        $data = $request->all();
        unset($data['_token']);


        $rules = [
            'fullname'=>'required',
            'email'=>'required|email',
            'address'=>'required'
        ];
        $messages = [
            'fullname' => 'Full Name',
            'email' => 'Email',
            'address' => 'Address'
        ];

        $this->customValidate($data,$rules,$messages);

        $userUpdate = AppUser::updateOrCreate(['id'=>$userId],$data);
        $userUpdate->save();

        return redirect()->route('admin.user.list');

    }

    // POST: xóa người dùng
    public function destroy($userId)
    {
        AppUser::destroy($userId);
        return back();
    }
    // Profile
    function info(){
        return view('admin.user.info');
    }
    // Hàm xác thực dữ liệu
    function customValidate($data, $rules, $messages)
    {
        $validator = Validator::make($data, $rules, [], $messages)->validate();
        return $validator;
    }
    // Đổi mật khẩu
    function changePassword(){
        return view('admin.user.change-password');
    }
    // POST: Đổi mật khẩu
    function storeChangePassword(Request $request){
        $data = $request->all();
        unset($data['_token']);

        $request->validate([
            'old_password' => 'required',
            'password' => 'required|different:old_password',
            'confirm_password' => 'required|same:password',
        ]);

        if(!Hash::check($request->old_password, Auth::user()->password)){
            return back();
        }

        $user = AppUser::findOrFail(Auth::user()->id);
        unset($data['old_password']);
        unset($data['confirm_password']);
        $data['password'] = Hash::make($request->password);
        $user->update($data);

        return redirect()->route('admin.logout');
    }
}
