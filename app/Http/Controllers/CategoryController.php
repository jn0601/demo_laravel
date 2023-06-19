<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function add_category(){
        return view('admin_pages.category.add_category');
    }
    public function list_category(){
        return view('admin_pages.category.list_category');
    }
}
