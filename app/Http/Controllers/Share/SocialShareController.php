<?php

namespace App\Http\Controllers\Share;

use App\Http\Controllers\Controller;
use App\Models\Share\SocialShare;
use Illuminate\Http\Request;

class SocialShareController extends Controller
{
    public function index()
    {
        $shares = SocialShare::orderBy('id', 'desc')->get();
        $count = 1;
        return view('admin.share.index', compact('shares','count'));
    }

    public function create()
    {
        return view('admin.share.create');
    }

    public function edit(SocialShare $share)
    {
        return view('admin.share.edit', compact('share'));

    }

    public function store()
    {
        $share = SocialShare::create($this->validateData());
        $this->validateData();

        if($share)
        {
            return back()->with('success', 'New Share Publish!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function update(SocialShare $share)
    {
        $share->update($this->validateData());

        if($share)
        {
            return back()->with('success', 'Share Updated!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function deactive(SocialShare $share)
    {
        $share->update(['status' => 0]);

        if($share)
        {
            return back()->with('success', 'Share Deactived.');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function active(SocialShare $share)
    {
        $share->update(['status' => 1]);

        if($share)
        {
            return back()->with('success', 'Share Activated.');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    private function validateData()
    {
        return request()->validate([
            'title' => 'required',
            'link_code' => 'required',
            'icon' => 'required',
        ]);
    }


    public function permanentDelete(SocialShare $share)
    {
        $share->delete();

        if($share)
        {
            return back()->with('delete', 'Share Deleted Permanently!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }
}
