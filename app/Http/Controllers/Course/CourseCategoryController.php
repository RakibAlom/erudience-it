<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Models\Category\CategoryCourse;
use Illuminate\Http\Request;

class CourseCategoryController extends Controller
{
    public function index()
    {
        $categories = CategoryCourse::all();
        $count = 1;
        return view('admin.course.category.index', compact('categories','count'));
    }

    public function create()
    {
        return view('admin.course.category.create');
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
            'slug' => 'required|unique:category_courses',
        ]);
        $category = CategoryCourse::create([
            'name' => request('name'),
            'slug' => request('slug'),
            'snumber' => CategoryCourse::max('snumber') + 1,
        ]);

        if($category)
        {
            return back()->with('success', 'New Category Publish!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function edit(CategoryCourse $category)
    {
        return view('admin.course.category.edit', compact('category'));
    }

    public function update(CategoryCourse $category)
    {
        $data = request()->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $category->update($data);

        if($category)
        {
            return back()->with('success', 'Category Updated!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function deactive(CategoryCourse $category)
    {
        $category->update(['status' => 0]);

        if($category)
        {
            return back()->with('success', 'Category Deactived!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function active(CategoryCourse $category)
    {
        $category->update(['status' => 1]);

        if($category)
        {
            return back()->with('success', 'Category Activated!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function permanentDelete(CategoryCourse $category)
    {
        $category->delete();

        if($category)
        {
            return back()->with('delete', 'Category Has Been Deleted Permanently!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }
}
