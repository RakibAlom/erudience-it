<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use App\Models\About\OurStory;
use Illuminate\Http\Request;

class OurStoryController extends Controller
{
    public function index()
    {
        $stories = OurStory::orderBy('id', 'desc')->get();
        $count = 1;
        return view('admin.about.our-story.index', compact('stories','count'));
    }

    public function create()
    {
        return view('admin.about.our-story.create');
    }

    public function edit(OurStory $story)
    {
        return view('admin.about.our-story.edit', compact('story'));

    }

    public function store()
    {
        $story = OurStory::create($this->validateData());
        $this->storeFile($story);

        if($story)
        {
            return redirect()->back()->with('success', 'Our Story Publish!');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function update(OurStory $story)
    {
        $story->update($this->validateData());
        $this->storeFile($story);

        if($story)
        {
            return redirect()->back()->with('success', 'Our Story Updated!');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function deactive(OurStory $story)
    {
        $story->update(['status' => 0]);

        if($story)
        {
            return redirect()->back()->with('success', 'Our Story Deactived.');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function active(OurStory $story)
    {
        $story->update(['status' => 1]);

        if($story)
        {
            return redirect()->back()->with('success', 'Our Story Activated.');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    private function validateData()
    {
        return request()->validate([
            'title' => 'required',
            'caption' => '',
            'details' => 'required',
            'image' => 'sometimes|file|image',
        ]);
    }

    private function storeFile($story)
    {
        if(request()->has('image')){
            if(request()->old_image){
                unlink('storage/'.request()->old_image);
            }
            $story->update([
                'image' => request()->image->store('image/about/our-story/', 'public'),
            ]);
        }
    }

    public function permanentDelete(OurStory $story)
    {
        if($story->image){
            unlink('storage/'.$story->image);
        }
        $story->delete();

        if($story)
        {
            return redirect()->back()->with('delete', 'Story Deleted Permanently!');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }
}
