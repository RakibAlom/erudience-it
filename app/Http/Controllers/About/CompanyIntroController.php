<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use App\Models\About\CompanyIntro;
use Illuminate\Http\Request;

class CompanyIntroController extends Controller
{
    public function index()
    {
        $intro = CompanyIntro::first();
        return view('admin.about.company_intro', compact('intro'));
    }

    public function store()
    {
        $intro = CompanyIntro::create($this->validateData());
        $this->storeFile($intro);

        if($intro)
        {
            return back()->with('success', 'Company Intro Publish!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function update()
    {

        $intro = CompanyIntro::first();
        $intro->update($this->validateData());
        $this->storeFile($intro);

        if($intro)
        {
            return back()->with('success', 'Company Intro Updated!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    private function validateData()
    {
        return request()->validate([
            'hero_title' => '',
            'hero_sub_title' => '',
            'intro_title' => '',
            'intro_sub_title' => '',
            'video_thumbnail' => 'sometimes|file|image',
            'video_link' => '',
            'vlist_1' => '',
            'vlist_2' => '',
            'vlist_3' => '',
            'vlist_4' => '',
            'vlist_5' => '',
            'vlist_6' => '',
            'meta_title' => '',
            'meta_des' => '',
            'meta_keys' => '',
            'meta_img' => 'sometimes|file|image',
        ]);
    }

    private function storeFile($intro)
    {
        if(request()->has('video_thumbnail')){
            if(request()->old_video_thumbnail){
                unlink('storage/'.request()->old_video_thumbnail);
            }
            $intro->update([
                'video_thumbnail' => request()->video_thumbnail->store('image/about/intro', 'public'),
            ]);
        }

        if(request()->has('meta_img')){
            if(request()->old_meta_img){
                unlink('storage/'.request()->old_meta_img);
            }
            $intro->update([
                'meta_img' => request()->meta_img->store('image/about/intro', 'public'),
            ]);
        }
    }
}
