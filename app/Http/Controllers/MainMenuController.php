<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainMenuController extends Controller
{
    public function add_menu(){
        return view('admin_pages.main_menu.add_menu');
    }
    public function list_menu(){
        return view('admin_pages.main_menu.list_menu');
    }
}
