<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Gallery\SkillBrand;
use Illuminate\Http\Request;

class SkillBrandController extends Controller
{
    public function index()
    {
        $logos = SkillBrand::orderBy('id', 'desc')->get();
        $count = 1;
        return view('admin.gallery.skill-brand.index', compact('logos','count'));
    }

    public function create()
    {
        return view('admin.gallery.skill-brand.create');
    }

    public function edit(SkillBrand $logo)
    {
        return view('admin.gallery.skill-brand.edit', compact('logo'));

    }

    public function store()
    {
        $logo = SkillBrand::create($this->validateData());
        $this->storeFile($logo);

        if($logo)
        {
            return redirect()->back()->with('success', 'Skill Brand Logo Publish!');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function update()
    {

        $logo = SkillBrand::first();
        $logo->update($this->validateData());
        $this->storeFile($logo);

        if($logo)
        {
            return redirect()->back()->with('success', 'Skill Brand logo Updated!');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function deactive(SkillBrand $logo)
    {
        $logo->update(['status' => 0]);

        if($logo)
        {
            return redirect()->back()->with('success', 'Brand Logo Deactived.');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function active(SkillBrand $logo)
    {
        $logo->update(['status' => 1]);

        if($logo)
        {
            return redirect()->back()->with('success', 'Brand Logo Activated.');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    private function validateData()
    {
        return request()->validate([
            'name' => '',
            'logo' => 'sometimes|file|image|max:200',
        ]);
    }

    private function storeFile($logo)
    {
        if(request()->has('logo')){
            if(request()->old_logo){
                unlink('storage/'.request()->old_logo);
            }
            $logo->update([
                'logo' => request()->logo->store('image/gallery/skill-brand/', 'public'),
            ]);
        }
    }

    public function permanentDelete(SkillBrand $logo)
    {
        if($logo->logo){
            unlink('storage/'.$logo->logo);
        }
        $logo->delete();

        if($logo)
        {
            return redirect()->back()->with('delete', 'Skill Logo Deleted Permanently!');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }
}
