<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin_pages.admin_home'); // gọi admin_home.blade trong folder admin_pages
    }
}
