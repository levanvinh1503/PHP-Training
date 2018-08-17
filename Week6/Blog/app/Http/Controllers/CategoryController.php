<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Posts;
use Datatables;
use Auth;
use Validator;

class CategoryController extends Controller
{
    /**
     * Display Category list interface
     * 
     * @return Response
     */
    public function GetListCategory()
    {
        return view('admin.category');
    }

    /**
     * Display Category add interface
     * 
     * @return Response
     */
    public function GetAddCategory()
    {
        return view('admin.addcategory');
    }

    /**
     * Add category from the database
     * 
     * @param Request $requestData 
     * 
     * @return Response
     */
    public function PostAddCategory(Request $requestData)
    {
        /*Check form input validate*/
        $this->validate($requestData, 
            [
                'category-name' => 'required|unique:category,category_name|max:191',
                'category-slug' => 'required|unique:category,category_slug'
            ],
            [
                'category-name.required' => 'Không bỏ trống tên chuyên mục',
                'category-name.unique' => 'Tên chuyên mục đã tồn tại',
                'category-name.max' => 'Tên chuyên mục tối đa 191 kí tự',
                'category-slug.unique' => 'Url chuyên mục đã tồn tại, vui lòng nhập lại!',
                'category-slug.required' => 'Không được bỏ trống url',
                
            ]);
        /*The category is valid...*/

        /*Create a Posts model object*/
        $newCategory = new Categories();
        $newCategory->category_name = $requestData->input('category-name');
        $newCategory->category_slug = $requestData->input('category-slug');
        /*Add a new category*/
        $newCategory->save();
        return redirect()->back()->with('thanhcong','Thêm chuyên mục thành công');
    }

    /**
     * List data of Category from database
     * 
     * @return json
     */
    public function DataTables()
    {
        $newCategory = Categories::query();
        return DataTables::of($newCategory)
        /*New column is the total number of posts in the column*/
        ->addColumn('post_count', function (Categories $itemsCate) {
            return $itemsCate->CategoryPost->count().' bài viết';
        })
        ->addColumn('action', '
            <button class="btn btn-primary" data-toggle="modal" data-target="#show-update-category">
            <i class="fa fa-edit"></i> Sửa
            </button>
            <button class="btn btn-danger" data-toggle="modal" data-target="#show-delete-category">
            <i class="fa fa-trash"></i> Xóa
            </button>
            ')
        ->make(true);
    }

    /**
     * Edit category from the database
     * 
     * @param Request $requestData 
     * 
     * @return Response
     */
    public function PostEditCategory(Request $requestData)
    {
        /*Check request ajax*/
        if ($requestData->ajax()) {
            /*Check form input validate*/
            $validatorInput = Validator::make($requestData->all(), [
                'category-name' => 'required|unique:category,category_name|max:191',
                'category-slug' => 'required|unique:category,category_slug',
            ],
            [
                'category-name.required' => 'Tên chuyên mục không được bỏ trống',
                'category-name.unique' => 'Tên chuyên mục đã tồn tại',
                'category-name.max' => 'Tên chuyên mục không vượt quá 191 kí tự',
                'category-slug.unique' => 'Url đã tồn tại',
                'category-slug.required' => 'Url không được bỏ trống'
            ]);
            /*The category is valid...*/
            if ($validatorInput->passes()) {
                $categoryModel = Categories::where('id', $requestData->input('category-id'));
                /*Array data category*/
                $arrayData = array(
                    'category_slug' => $requestData->input('category-slug'),
                    'category_name' => $requestData->input('category-name')
                );
                /*Check update category*/
                if ($categoryModel->update($arrayData)) {
                    return 'success';   
                } else {
                    response()->json(['error'=>'Cập nhật thất bại, vui lòng thử lại']);
                }
            }
            return response()->json(['error'=>$validatorInput->errors()->all()]);
            
        } else {
            return response()->json(['error'=>'Có lỗi, vui lòng thử lại']);
        }
    }

    /**
     * Delete category from the database
     * 
     * @param Request $requestData 
     * 
     * @return Response
     */
    public function PostDeleteCategory(Request $requestData)
    {
        if ($requestData->ajax()) {
            $categoryModel = Categories::where('id', $requestData->input('category-id'));
            $postModel = Posts::where('category_id_fkey', $requestData->input('category-id'));
            if ($postModel) {
                $postModel->delete();
            } 
            $categoryModel->delete();
            return 'success';
        } else {
            return response()->json(['error'=>'Có lỗi, vui lòng thử lại']);
        }
    }
}
