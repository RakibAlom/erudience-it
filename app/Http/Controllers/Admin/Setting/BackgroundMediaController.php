<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Models\Admin\Setting\BackgroundMedia;
use Illuminate\Http\Request;

class BackgroundMediaController extends Controller
{
    public function index()
    {
        $bgmedia = BackgroundMedia::first();
        return view('admin.setting.background_media', compact('bgmedia'));
    }

    public function store()
    {
        $bgmedia = BackgroundMedia::create($this->validateData());
        $this->storeFile($bgmedia);

        if($bgmedia)
        {
            return redirect()->back()->with('success', 'Backgrund Setting Publish!');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function update()
    {

        $bgmedia = BackgroundMedia::first();
        $bgmedia->update($this->validateData());
        $this->storeFile($bgmedia);

        if($bgmedia)
        {
            return redirect()->back()->with('success', 'Background Setting Updated!');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    private function validateData()
    {
        return request()->validate([
            'hero_bg_image' => 'sometimes|file|image',
            'hero_bg_video' => 'mimetypes:video/avi,video/mpeg,video/webm,video/quicktime,video/mp4',
            'achievement_bg' => 'sometimes|file|image',
            'testimonial_bg' => 'sometimes|file|image',
            'marketplace_bg' => 'sometimes|file|image',
            'products_bg' => 'sometimes|file|image',
            'about_bg' => 'sometimes|file|image',
            'blog_bg' => 'sometimes|file|image',
            'hosting_bg' => 'sometimes|file|image',
            'services_bg' => 'sometimes|file|image',
            'contact_bg' => 'sometimes|file|image',
            'user_bg' => 'sometimes|file|image',
            'default_bg' => 'sometimes|file|image',
            'bg_mood' => '',
            'editor' => '',
        ]);
    }

    private function storeFile($bgmedia)
    {
        if(request()->has('hero_bg_image')){
            if(request()->old_hero_bg_image){
                unlink('storage/'.request()->old_hero_bg_image);
            }
            $bgmedia->update([
                'hero_bg_image' => request()->hero_bg_image->store('image/setting/background', 'public'),
            ]);
        }

        if(request()->has('hero_bg_video')){
            if(request()->old_hero_bg_video){
                unlink('storage/'.request()->old_hero_bg_video);
            }
            $bgmedia->update([
                'hero_bg_video' => request()->hero_bg_video->store('image/setting/background', 'public'),
            ]);
        }

        if(request()->has('achievement_bg')){
            if(request()->old_achievement_bg){
                unlink('storage/'.request()->old_achievement_bg);
            }
            $bgmedia->update([
                'achievement_bg' => request()->achievement_bg->store('image/setting/background', 'public'),
            ]);
        }
        if(request()->has('testimonial_bg')){
            if(request()->old_testimonial_bg){
                unlink('storage/'.request()->old_testimonial_bg);
            }
            $bgmedia->update([
                'testimonial_bg' => request()->testimonial_bg->store('image/setting/background', 'public'),
            ]);
        }
        if(request()->has('marketplace_bg')){
            if(request()->old_marketplace_bg){
                unlink('storage/'.request()->old_marketplace_bg);
            }
            $bgmedia->update([
                'marketplace_bg' => request()->marketplace_bg->store('image/setting/background', 'public'),
            ]);
        }
        if(request()->has('products_bg')){
            if(request()->old_products_bg){
                unlink('storage/'.request()->old_products_bg);
            }
            $bgmedia->update([
                'products_bg' => request()->products_bg->store('image/setting/background', 'public'),
            ]);
        }
        if(request()->has('about_bg')){
            if(request()->old_about_bg){
                unlink('storage/'.request()->old_about_bg);
            }
            $bgmedia->update([
                'about_bg' => request()->about_bg->store('image/setting/background', 'public'),
            ]);
        }
        if(request()->has('blog_bg')){
            if(request()->old_blog_bg){
                unlink('storage/'.request()->old_blog_bg);
            }
            $bgmedia->update([
                'blog_bg' => request()->blog_bg->store('image/setting/background', 'public'),
            ]);
        }
        if(request()->has('hosting_bg')){
            if(request()->old_hosting_bg){
                unlink('storage/'.request()->old_hosting_bg);
            }
            $bgmedia->update([
                'hosting_bg' => request()->hosting_bg->store('image/setting/background', 'public'),
            ]);
        }
        if(request()->has('services_bg')){
            if(request()->old_services_bg){
                unlink('storage/'.request()->old_services_bg);
            }
            $bgmedia->update([
                'services_bg' => request()->services_bg->store('image/setting/background', 'public'),
            ]);
        }
        if(request()->has('contact_bg')){
            if(request()->old_contact_bg){
                unlink('storage/'.request()->old_contact_bg);
            }
            $bgmedia->update([
                'contact_bg' => request()->contact_bg->store('image/setting/background', 'public'),
            ]);
        }
        if(request()->has('user_bg')){
            if(request()->old_user_bg){
                unlink('storage/'.request()->old_user_bg);
            }
            $bgmedia->update([
                'user_bg' => request()->user_bg->store('image/setting/background', 'public'),
            ]);
        }
        if(request()->has('default_bg')){
            if(request()->old_default_bg){
                unlink('storage/'.request()->old_default_bg);
            }
            $bgmedia->update([
                'default_bg' => request()->default_bg->store('image/setting/background', 'public'),
            ]);
        }
    }

    public function darkMode()
    {
        $bgmedia = BackgroundMedia::first();
        if($bgmedia->bg_mood == 1) {
            $bgmedia->update([
                'bg_mood' =>  0
            ]);
        }else{
            $bgmedia->update([
                'bg_mood' =>  1
            ]);
        }
        return back();
    }
}
