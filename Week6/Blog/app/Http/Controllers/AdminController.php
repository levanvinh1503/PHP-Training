<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Posts;
use Datatables;
use Auth;

/**
 * AdminController
 */
class AdminController extends Controller
{
    /**
     * Admin interface 
     * 
     * @return Response
     */
    public function GetAdmin()
    {
        $countCategory = Categories::all()->count();
        $countPost = Posts::all()->count();
        return view('admin.index', compact('countCategory', 'countPost'));
    }
    
    /**
     * Logout account
     * 
     * @return Response
     */
    public function GetLogout()
    {
        if(Auth::check()) 
            Auth::logout();
        return redirect()->route('home');
    }
}
