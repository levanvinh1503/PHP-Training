<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Posts;
use Datatables;
use Auth;

/**
 * CategoryController
 */
class CategoryController extends Controller
{
    /**
     * Category list interface
     * 
     * @return Response
     */
    public function GetListCategory()
    {
        return view('admin.category');
    }

    /**
     * Category add interface
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
        $this->validate($requestData, 
            [
                'category_name' => 'required|max:191',
                'category_slug' => 'unique:category'
            ],
            [
                'category_name.required' => 'Không bỏ trống tên chuyên mục',
                'category_name.max' => 'Tên chuyên mục tối đa 191 kí tự',
                'category_slug.unique' => 'Url chuyên mục đã tồn tại, vui lòng nhập lại tên!',
            ]);
        $newCategory = new Categories();
        $newCategory->category_name = $requestData->input('category-name');
        $newCategory->category_slug = $requestData->input('category-slug');
        $newCategory->save();
        return redirect()->back()->with('thanhcong','Thêm chuyên mục thành công');
    }

    /**
     * List data of Category from database
     * 
     * @return Response
     */
    public function DataTables()
    {
        $newCategory = Categories::query();
        return DataTables::of($newCategory)
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
        if ($requestData->ajax()) {
            $categoryModel = Categories::where('id', $requestData->input('category-id'));
            $arrayData = array(
                'category_slug' => $requestData->input('category-slug'),
                'category_name' => $requestData->input('category-name')
            );
            if ($categoryModel->update($arrayData)) {
                return 'success';	
            } else {
                return 'error';
            }
        } else {
            return 'error ajax';
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
            if ($categoryModel->delete()) {
                return 'success';
            } else {
                return 'error';
            }
        } else {
            return 'error';
        }
    }
}
