<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Crypt;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
use App\Categories;
use App\Posts;

class PageController extends Controller
{
    /**
     * Display home interface
     * 
     * @return Response
     */
    public function GetHome()
    {
        $arrayCategory = Categories::all();
        $arrayPost = Posts::where('post_status', 1)->get();
        return view('pages.index', compact('arrayCategory', 'arrayPost'));
    }

    /**
     * Display login interface
     * 
     * @return Response
     */
    public function GetLogin()
    {
        return view('pages.login');
    }

    /**
     * Show category interface
     * 
     * @param string $slugCategory
     * 
     * @return Response
     */
    public function GetCategory($slugCategory)
    {
        $arrayCategory = Categories::where('category_slug', $slugCategory)->first();
        /*Sort the post in descending order by created_at.*/
        $arrayPost = Posts::where('category_id_fkey', $arrayCategory->id)
        ->orderBy('created_at','des')
        ->get();
        return view('pages.category', compact('arrayCategory', 'arrayPost'));
    }

    /**
     * Display post detail interface
     * 
     * @param string $slugPost
     * 
     * @return Response
     */
    public function GetPost($slugPost)
    {
        $arrayPost = Posts::where('post_slug', $slugPost)->first();
        /*Increase post views*/
        $arrayPost->post_view = $arrayPost->post_view + 1;
        $arrayPost->save();
        /*List of related post*/
        $arrayPostOther = Posts::where('post_slug', '!=', $slugPost)
        ->where('category_id_fkey', $arrayPost->category_id_fkey)
        ->get();
        return view('pages.posts', compact('arrayPost', 'arrayPostOther'));
    }

    /**
     * Check login account
     * 
     * @param Request $requestData
     * 
     * @return Response
     */
    public function PostLogin(Request $requestData)
    {
        /*Check form input validate*/
        $this->validate($requestData, 
            [
                'username-login' => 'required|min:5|max:191',
                'password-login' => 'required|min:8|max:191'
            ],
            [
                'username-login.required' => 'Tên đăng nhập không được bỏ trống',
                'username-login.min' => 'Tên đăng nhập phải lớn hơn 5 kí tự',
                'username-login.max' => 'Tên đăng nhập tối đa 191 kí tự',
                'password-login.required' => 'Mật khẩu không được bỏ trống',
                'password-login.min' => 'Mật khẩu phải lớn hơn 8 kí tự',
                'password-login.max' => 'Mật khẩu tối đa 191 kí tự'
            ]);
        /*The username and password is valid...*/

        $username = $requestData->input('username-login');
        $password = $requestData->input('password-login');
        /*Check login with username and password*/
        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            return redirect()->route('indexadmin');
        } else {
            $msg = new MessageBag(['errlogin'=> 'Sai thông tin đăng nhập.']);
            return redirect()->back()->withErrors($msg);
        }
    }
}
