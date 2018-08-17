<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Posts;
use Datatables;
use Auth;

class PostController extends Controller
{
    /**
     * Display post list interface
     * 
     * @return Response
     */
    public function GetListPost()
    {
        $arrayPost = Posts::all();
        return view('admin.listpost', compact('arrayPost'));        
    }
    
    /**
     * Display post add interface
     * 
     * @return Response
     */
    public function GetAddPost()
    {
        $categoryModel = Categories::all();
        return view('admin.addpost', compact('categoryModel'));
    }
    
    /**
     * Display post edit interface
     * 
     * @param string $idPost
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
        /*Check form input validate*/
        $this->validate($requestData, 
            [
                'post-title' => 'required|unique:posts,post_title|max:191',
                'post-slug' => 'required|unique:posts,post_slug',
                'post-description' => 'required',
                'post-image' => 'required|max:191',
            ],
            [
                'post-title.required' => 'Tiêu đề bài viết không được để trống',
                'post-title.max' => 'Tiêu đề bài viết tối đa 191 kí tự',
                'post-title.unique' => 'Tin này đã trùng, vui lòng nhập lại',
                'post-slug.unique' => 'Url này đã trùng, vui lòng nhập lại',
                'post-slug.required' => 'Đường dẫn bài viết không được để trống',
                'post-description.required' => 'Mô tả ngắn bài viết không được để trống',
                'post-image.required' => 'Ảnh đại diện không được bỏ trống',
                'post-image.max' => 'Tên file ảnh tối đa 191 kí tự',
            ]);
        /*The blog post is valid...*/

        /*Get file name and file path*/
        $requestImage = $requestData->file('post-image');
        $postImage = $requestImage->getClientOriginalName();
        /*Move image to folder public/images*/
        $requestImage->move('images',$postImage);

        /*Create a Posts model object*/
        $newPost = new Posts();
        $newPost->category_id_fkey = $requestData->input('post-category');
        $newPost->post_title = $requestData->input('post-title');
        $newPost->post_description = $requestData->input('post-description');
        $newPost->post_slug = $requestData->input('post-slug');
        $newPost->post_content = $requestData->input('post-content');
        $newPost->post_image = $postImage;
        $newPost->post_view = 0;
        $newPost->post_status = 0;
        /*Add a new post*/
        $newPost->save();
        return redirect()->back()->with('thanhcong','Thêm bài viết thành công');
    }
    
    /**
     * Edit posts from the database
     * 
     * @param Request $requestData 
     * @param string $idPost
     * 
     * @return Response
     */
    public function PostEditPost(Request $requestData, $idPost)
    {
        /*Check form input validate*/
        $this->validate($requestData, 
            [
                'post-title' => 'required|max:191',
                'post-slug' => 'required',
            ],
            [
                'post-title.required' => 'Tiêu đề bài viết không được để trống',
                'post-title.max' => 'Tiêu đề bài viết tối đa 191 kí tự',
                'post-slug.required' => 'Đường dẫn bài viết không được để trống',
            ]);
        /*The blog post is valid...*/
        /*Check upload photos*/
        if ($requestData->file('post-image')) {
            /*Get file name and file path*/
            $requestImage = $requestData->file('post-image');
            $postImage = $requestImage->getClientOriginalName();
            /*Move image to folder public/images*/
            $requestImage->move('images',$postImage);
        } else {
            $postImage = $requestData->input('old-post-image');
        }
        /*Array of post data*/
        $arrayData = array(
            'category_id_fkey' => $requestData->input('post-category-update'),
            'post_title' => $requestData->input('post-title'),
            'post_description' => $requestData->input('post-description'),
            'post_slug' => $requestData->input('post-slug'),
            'post_content' => $requestData->input('post-content'),
            'post_image' => $postImage,
        );
        /*Update post*/
        $updatePost = Posts::where('id', $idPost)->update($arrayData);
        if ($updatePost) {
            return redirect()->back()->with('thanhcong','Sửa bài viết thành công');
        } else {
            return redirect()->back()->with('error','Tiêu đề hoặc Url bài viết bị trùng');
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
        /*Delete post*/
        $arrayPost = Posts::where('id', $idPost)->delete();
        return redirect()->back()->with('thanhcong','Xóa bài viết thành công');
    }
}
