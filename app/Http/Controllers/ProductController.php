<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add_product(){
        return view('admin_pages.product.add_product');
    }
    public function list_product(){
        return view('admin_pages.product.list_product');
    }
}
