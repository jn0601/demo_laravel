<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function add_post(){
        return view('admin_pages.post.add_post');
    }
    public function list_post(){
        return view('admin_pages.post.list_post');
    }
}
