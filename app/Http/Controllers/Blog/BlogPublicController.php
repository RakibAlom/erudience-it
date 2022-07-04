<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog\Blog;
use Illuminate\Http\Request;

class BlogPublicController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('status', 1)->orderBy('id', 'desc')->paginate(6);
        return view('blog.index', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $blog->update([
            'views' => $blog->views + 1,
        ]);
        return view('blog.blog_show', compact('blog'));
    }
}
