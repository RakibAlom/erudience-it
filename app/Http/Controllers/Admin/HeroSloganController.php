<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Frontend\HeroSlogan;
use Illuminate\Http\Request;

class HeroSloganController extends Controller
{
    public function index()
    {
        $slogans = HeroSlogan::orderBy('id', 'desc')->get();
        $count = 1;
        return view('admin.hero-slogan.index', compact('slogans','count'));
        
    }

    public function create()
    {
        return view('admin.hero-slogan.create');
    }

    public function store()
    {
        $data = request()->validate([
            'slogan_title' => 'required',
            'slogan_description' => 'required',
        ]);

        $slogan = HeroSlogan::create($data);

        if($slogan)
        {
            return redirect()->back()->with('success', 'New Slogan Publish!');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function edit(HeroSlogan $slogan)
    {
        return view('admin.hero-slogan.edit', compact('slogan'));

    }

    public function update(HeroSlogan $slogan)
    {
        $data = request()->validate([
            'slogan_title' => 'required',
            'slogan_description' => 'required',
        ]);

        $slogan->update($data);

        if($slogan)
        {
            return redirect()->back()->with('success', 'Slogan Updated!');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function deactive(HeroSlogan $slogan)
    {
        $slogan->update(['status' => 0]);

        if($slogan)
        {
            return redirect()->back()->with('success', 'Slogan Deactived.');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function active(HeroSlogan $slogan)
    {
        $slogan->update(['status' => 1]);

        if($slogan)
        {
            return redirect()->back()->with('success', 'Slogan Activated.');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    // public function softDelete(HeroSlogan $slogan)
    // {
    //     $slogan->update(['status' => 9]);

    //     if($slogan)
    //     {
    //         return redirect()->back()->with('delete', 'Slogan moved to trash.');
    //     }else{
    //         return redirect()->back()->with('error', 'Error, Something Went Wrong!');
    //     }
    // }

    public function permanentDelete(HeroSlogan $slogan)
    {
        $slogan->delete();

        if($slogan)
        {
            return redirect()->back()->with('delete', 'Slogan Has Been Deleted Permanently.');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }
}
