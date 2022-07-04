<?php

namespace App\Http\Controllers;

use App\Models\Blog\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slogans = DB::table('hero_slogans')->where('status', 1)->get();
        $intro = DB::table('company_intros')->first();
        $testimonials = DB::table('testimonials')->orderBy('id', 'desc')->where('status', 1)->get();
        $blogs = Blog::where('status', 1)->orderBy('id', 'desc')->limit(3)->get();

        return view('home', compact('slogans', 'intro', 'testimonials', 'blogs'));
    }
}
