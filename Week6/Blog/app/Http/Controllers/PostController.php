<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Posts;
use Datatables;
use Auth;

/**
 * PostController
 */
class PostController extends Controller
{
    /**
     * Show post list interface
     * 
     * @return Response
     */
    public function GetListPost()
    {
        $arrayPost = Posts::all();
        return view('admin.listpost', compact('arrayPost'));        
    }
    
    /**
     * Show post add interface
     * 
     * @return Response
     */
    public function GetAddPost()
    {
        $categoryModel = Categories::all();
        return view('admin.addpost', compact('categoryModel'));
    }
    
    /**
     * Show post edit interface
     * 
     * @return Response
     */
    public function GetEditPost($idPost)
    {
        $arrayCategory = Categories::all();
        $arrayPost = Posts::find($idPost);
        return view('admin.editpost', compact('arrayPost', 'arrayCategory'));
    }

    /**
     * Add posts to the database
     * 
     * @param Request $requestData 
     * 
     * @return Response
     */
    public function PostAddPost(Request $requestData)
    {
        $this->validate($requestData, 
            [
                'post-title' => 'required|max:191',
                'post-description' => 'required',
                'post-image' => 'required|max:191',
            ],
            [
                'post-title.required' => 'Vui lòng nhập vào trường này',
                'post-title.max' => 'Tối đa 191 kí tự',
                'post-description.required' => 'Vui lòng nhập vào trường này',
                'post-image.required' => 'Vui lòng nhập vào trường này',
                'post-image.max' => 'Tối đa 191 kí tự',
            ]);
        $requestImage = $requestData->file('post-image');
        $postImage = $requestImage->getClientOriginalName();
        $requestImage->move('images',$postImage);
        $newPost = new Posts();
        $newPost->category_id_fkey = $requestData->input('post-category');
        $newPost->post_title = $requestData->input('post-title');
        $newPost->post_description = $requestData->input('post-description');
        $newPost->post_slug = $requestData->input('post-slug');
        $newPost->post_content = $requestData->input('post-content');
        $newPost->post_image = $postImage;
        $newPost->post_view = 0;
        $newPost->post_status = 0;
        $newPost->save();
        return redirect()->back()->with('thanhcong','Thêm bài viết thành công');
    }
    
    /**
     * Edit posts from the database
     * 
     * @param Request $requestData 
     * 
     * @return Response
     */
    public function PostEditPost(Request $requestData, $idPost)
    {
        if ($requestData->file('post-image')) {
            $requestImage = $requestData->file('post-image');
            $postImage = $requestImage->getClientOriginalName();
            $requestImage->move('images',$postImage);
            $arrayData = array(
                'category_id_fkey' => $requestData->input('post-category-update'),
                'post_title' => $requestData->input('post-title'),
                'post_description' => $requestData->input('post-description'),
                'post_slug' => $requestData->input('post-slug'),
                'post_content' => $requestData->input('post-content'),
                'post_image' => $postImage,
            );
            $updatePost = Posts::where('id', $idPost)->update($arrayData);
            if ($updatePost) {
                return redirect()->back()->with('thanhcong','Sửa bài viết thành công');
            }
        } else {
            $arrayData = array(
                'category_id_fkey' => $requestData->input('post-category-update'),
                'post_title' => $requestData->input('post-title'),
                'post_description' => $requestData->input('post-description'),
                'post_slug' => $requestData->input('post-slug'),
                'post_content' => $requestData->input('post-content'),
                'post_image' => $requestData->input('old-post-image'),
            );
            $updatePost = Posts::where('id', $idPost)->update($arrayData);
            if ($updatePost) {
                return redirect()->back()->with('thanhcong','Sửa bài viết thành công');
            }
        }
    }

    /**
     * Remove the post from the database
     * 
     * @param Request $requestData 
     * 
     * @return Response
     */
    public function GetDeletePost(Request $requestData, $idPost)
    {
        $arrayPost = Posts::where('id', $idPost)->delete();
        return redirect()->back()->with('thanhcong','Xóa viết thành công');
    }
}
