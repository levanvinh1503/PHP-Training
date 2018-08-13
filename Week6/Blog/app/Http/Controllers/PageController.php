<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getHome()
    {
        return view('index');
    }

    public function getLogin()
    {
        return view('pages.login');
    }

    public function getAdmin()
    {
        return view('admin.index');
    }
}
