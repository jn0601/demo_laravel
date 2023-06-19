<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function add_user(){
        return view('admin_pages.user.add_user');
    }
    public function list_user(){
        return view('admin_pages.user.list_user');
    }
}
