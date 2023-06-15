<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('admin_pages.login.login'); // gọi login.blade trong folder admin_pages
    }
}
