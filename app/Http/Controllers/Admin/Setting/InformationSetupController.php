<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Models\Admin\Setting\InformationSetup;
use Illuminate\Http\Request;

class InformationSetupController extends Controller
{
    public function index()
    {
        $infosetup = InformationSetup::first();
        return view('admin.setting.information_setup', compact('infosetup'));
    }

    public function store()
    {
        $infosetup = InformationSetup::create($this->validateData());
        $this->storeFile($infosetup);

        if($infosetup)
        {
            return redirect()->back()->with('success', 'Information Publish!');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function update()
    {

        $infosetup = InformationSetup::first();
        $infosetup->update($this->validateData());
        $this->storeFile($infosetup);

        if($infosetup)
        {
            return redirect()->back()->with('success', 'Information Updated!');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    private function validateData()
    {
        return request()->validate([
            'title' => '',
            'hero_title' => '',
            'email' => '',
            'phone_1' => '',
            'phone_2' => '',
            'address' => '',
            'year_experience' => '',
            'unique_project' => '',
            'total_project' => '',
            'happy_clients' => '',
            'supported_staff' => '',
            'service_time' => '',
            'certificate' => '',
            'daily_solution' => '',
            'fb_link' => '',
            'twitter_link' => '',
            'quora_link' => '',
            'linkedin_link' => '',
            'instagram_link' => '',
            'youtube_link' => '',
            'github_link' => '',
            'pinterest_link' => '',
            'telegram_link' => '',
            'whatsapp_link' => '',
            'discord_link' => '',
            'description' => '',
            'keywords' => '',
            'short_about' => '',
            'copyright' => '',
            'favicon' => 'sometimes|file|image|max:50',
            'logo' => 'sometimes|file|image|max:100',
            'cover_image' => 'sometimes|file|image|max:200',
        ]);
    }

    private function storeFile($infosetup)
    {
        if(request()->has('favicon')){
            if(request()->old_favicon){
                unlink('storage/'.request()->old_favicon);
            }
            $infosetup->update([
                'favicon' => request()->favicon->store('image/setting', 'public'),
            ]);
        }

        if(request()->has('logo')){
            if(request()->old_logo){
                unlink('storage/'.request()->old_logo);
            }
            $infosetup->update([
                'logo' => request()->logo->store('image/setting', 'public'),
            ]);
        }

        if(request()->has('footer_logo')){
            if(request()->old_footer_logo){
                unlink('storage/'.request()->old_footer_logo);
            }
            $infosetup->update([
                'footer_logo' => request()->footer_logo->store('image/setting', 'public'),
            ]);
        }

        if(request()->has('cover_image')){
            if(request()->old_cover){
                unlink('storage/'.request()->old_cover);
            }
            $infosetup->update([
                'cover_image' => request()->cover_image->store('image/setting', 'public'),
            ]);
        }
    }
}
