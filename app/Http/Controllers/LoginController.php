<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class LoginController extends Controller
{
    public function index() {
        return view('admin_pages.login.login'); // gọi login.blade trong folder admin_pages
    }

    public function login(Request $request) {
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);

        $result = DB::table('tbl_admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first(); // first để limit 1 user
        // nếu result là true
        if ($result) {
            Session::put('admin_name', $result->admin_name); // lấy tên admin
            Session::put('admin_id', $result->admin_id);
            return Redirect::to('/trang-chu-admin');
        }
        // nếu sai
        else {
            Session::put('message', 'Tài khoản hoặc mật khẩu chưa đúng'); // lấy tên admin
            return Redirect::to('/login-auth');
        }
    }

    public function logout() {
        Session::put('admin_name', null); // reset session
        Session::put('admin_id', null);
        return Redirect::to('/login-auth');
    }
}
