<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog\Blog;
use App\Models\Blog\BlogCategory;
use App\Models\Category\CategoryBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('id', 'desc')->get();
        $count = 1;
        return view('admin.blog.index', compact('blogs','count'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return view('admin.blog.show', compact('blog'));
    }

    public function create()
    {
        $categories = CategoryBlog::where('status', 1)->orderBy('name','asc')->get();
        return view('admin.blog.create', compact('categories'));
    }

    public function edit(Blog $blog)
    {
        $categories = CategoryBlog::orderBy('name','asc')->get();
        return view('admin.blog.edit', compact('blog','categories'));
    }

    public function store()
    {
        $this->validateData();

        $check = Blog::where('slug', request()->slug)->first();

        if(!$check){
            $blog = Blog::create([
                'user_id' => Auth::id(),
                'title' => request('title'),
                'slug' => request('slug'),
                'body' => request('body'),
                'date' => date('d'),
                'month' => date('F'),
                'year' => date('Y'),
                'meta_description' => request('meta_description'),
                'keywords' => request('keywords'),
                'status' => 1,
            ]);
        }else{
            $blog = Blog::create([
                'user_id' => Auth::id(),
                'title' => request('title'),
                'slug' => request('slug') . '-' . uniqid(),
                'body' => request('body'),
                'date' => date('d'),
                'month' => date('F'),
                'year' => date('Y'),
                'meta_description' => request('meta_description'),
                'keywords' => request('keywords'),
                'status' => 1,
            ]);
        }

        $this->storeImage($blog);
        if(request()->category_id){
            foreach(request()->category_id as $key=>$category_id){
                $category = New BlogCategory();
                $category->category_id = $category_id;
                $category->blog_id = $blog->id;
                $category->save();
            }
        }


        if($blog)
        {
            return back()->with('success', 'Blog Publish Successfully!');
        }else{
            return back()->with('error', 'Something Went Wrong!');
        }
    }

    public function update(Blog $blog)
    {
        $this->validateData();

        $blog->update([
            'title' => request('title'),
            'slug' => request('slug'),
            'body' => request('body'),
            'keywords' => request('keywords'),
        ]);

        $this->storeImage($blog);

        if(request()->category_id){
            foreach($blog->category as $item){
                $item->delete();
            }

            foreach(request()->category_id as $key=>$category_id){
                $category = New BlogCategory();
                $category->category_id = $category_id;
                $category->blog_id = $blog->id;
                $category->save();
            }
        }


        if($blog)
        {
            return back()->with('success', 'Blog Updated Successfully!');
        }else{
            return back()->with('error', 'Something Went Wrong!');
        }
    }

    public function deactive(Blog $blog)
    {
        $blog->update(['status' => 0]);

        if($blog)
        {
            return back()->with('success', 'Blog Deactived!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function active(Blog $blog)
    {
        $blog->update(['status' => 1]);

        if($blog)
        {
            return back()->with('success', 'Blog Activated!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function permanentDelete(Blog $blog)
    {
        if($blog->image){
            unlink('storage/'.$blog->image);
        }
        $blog->delete();

        if($blog)
        {
            return back()->with('delete', 'Blog Deleted Permanently!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }


    // PRIVATE FUNCTION
    private function validateData()
    {
        return request()->validate([
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'image' => 'sometimes|file|image',
            'keywords' => '',
        ]);
    }

    private function storeImage($blog)
    {
        if(request()->has('image'))
        {
            if(request()->oldimage){
                unlink('storage/'.$blog->image);
            }
            $blog->update([
                'image' => request()->image->store('image/blog', 'public'),
            ]);
        }
    }
}
