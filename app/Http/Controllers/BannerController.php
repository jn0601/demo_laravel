<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function add_banner(){
        return view('admin_pages.banner.add_banner');
    }
    public function list_banner(){
        return view('admin_pages.banner.list_banner');
    }
}
