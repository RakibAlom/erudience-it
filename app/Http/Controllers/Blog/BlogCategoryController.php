<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Category\CategoryBlog;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    public function index()
    {
        $categories = CategoryBlog::all();
        $count = 1;
        return view('admin.blog.category.index', compact('categories','count'));
    }

    public function create()
    {
        return view('admin.blog.category.create');
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
            'slug' => 'required|unique:category_blogs',
        ]);
        $category = CategoryBlog::create([
            'name' => request('name'),
            'slug' => request('slug'),
            'snumber' => CategoryBlog::max('snumber') + 1,
        ]);

        if($category)
        {
            return back()->with('success', 'New Category Publish!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function edit(CategoryBlog $category)
    {
        return view('admin.blog.category.edit', compact('category'));
    }

    public function update(CategoryBlog $category)
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

    public function deactive(CategoryBlog $category)
    {
        $category->update(['status' => 0]);

        if($category)
        {
            return back()->with('success', 'Category Deactived!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function active(CategoryBlog $category)
    {
        $category->update(['status' => 1]);

        if($category)
        {
            return back()->with('success', 'Category Activated!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function permanentDelete(CategoryBlog $category)
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
