<?php

namespace App\Http\Controllers;

use App\Models\AppUser;
use Illuminate\Http\Request;

class AppUserController extends Controller
{
    // Xem danh sách người dùng
    public function index()
    {
        //
    }

    // GET: Thêm người dùng
    public function create()
    {
        //
    }

    // POST: Thêm người dùng
    public function store(Request $request)
    {
        //
    }

    // Xem chi tiết người dùng
    public function show(AppUser $userId)
    {
        //
    }

    // GET: sửa thông tin người dùng
    public function edit(AppUser $userId)
    {
        //
    }

    // POST: sửa thông tin người dùng
    public function update(Request $request, AppUser $userId)
    {
        //
    }

    // POST: xóa người dùng
    public function destroy(AppUser $userId)
    {
        //
    }
}
