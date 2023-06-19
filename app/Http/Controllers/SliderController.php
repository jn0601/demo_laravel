<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function add_slider(){
        return view('admin_pages.slider.add_slider');
    }
    public function list_slider(){
        return view('admin_pages.slider.list_slider');
    }
}
