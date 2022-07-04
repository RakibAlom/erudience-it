<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\Category\CategoryPortfolio;
use Illuminate\Http\Request;

class PortfolioCategoryController extends Controller
{
    public function index()
    {
        $categories = CategoryPortfolio::all();
        $count = 1;
        return view('admin.portfolio.category.index', compact('categories','count'));
    }

    public function create()
    {
        return view('admin.portfolio.category.create');
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
            'slug' => 'required|unique:category_portfolios',
        ]);
        $category = CategoryPortfolio::create([
            'name' => request('name'),
            'slug' => request('slug'),
            'snumber' => CategoryPortfolio::max('snumber') + 1,
        ]);

        if($category)
        {
            return back()->with('success', 'New Category Publish!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function edit(CategoryPortfolio $category)
    {
        return view('admin.portfolio.category.edit', compact('category'));
    }

    public function update(CategoryPortfolio $category)
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

    public function deactive(CategoryPortfolio $category)
    {
        $category->update(['status' => 0]);

        if($category)
        {
            return back()->with('success', 'Category Deactived!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function active(CategoryPortfolio $category)
    {
        $category->update(['status' => 1]);

        if($category)
        {
            return back()->with('success', 'Category Activated!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function permanentDelete(CategoryPortfolio $category)
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
