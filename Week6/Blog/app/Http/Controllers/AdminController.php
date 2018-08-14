<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Posts;
use Datatables;

class AdminController extends Controller
{
    //
    public function GetListCategory()
    {
        $listCategory = Categories::all();
        return view('admin.category', compact('listCategory'));
    }

    public function GetListPost()
    {
        return view('admin.post');    	
    }

    public function GetAddCategory()
    {
        return view('admin.addcategory');
    }

    public function PostAddCategory(Request $requestData)
    {
        $this->validate($requestData, 
            [
                'category-name' => 'required|max:191',
            ],
            [
                'category-name.required' => 'Vui lòng nhập vào trường này',
                'category-name.max' => 'Tối đa 191 kí tự',
            ]);
        $newCategory = new Categories();
        $newCategory->category_name = $requestData->input('category-name');
        $newCategory->category_slug = $requestData->input('category-slug');
        $newCategory->save();
        return redirect()->back()->with('thanhcong','Thêm chuyên mục thành công');
    }

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

    public function PostEditCategory(Request $requestData)
    {
        if ($requestData->ajax()) {
            $categoryModel = Categories::find($requestData->input('category-id'));
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
            return 'error';
        }
    }

    public function PostDeleteCategory(Request $requestData)
    {
        if ($requestData->ajax()) {
            $categoryModel = Categories::find($requestData->input('category-id'));
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
