<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function GetHome()
    {
        return view('index');
    }

    public function GetLogin()
    {
        return view('pages.login');
    }

    public function GetAdmin()
    {
        return view('admin.index');
    }
}
