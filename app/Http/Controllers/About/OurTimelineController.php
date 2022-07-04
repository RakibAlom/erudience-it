<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use App\Models\About\OurTimeline;
use Illuminate\Http\Request;

class OurTimelineController extends Controller
{
    public function index()
    {
        $timelines = OurTimeline::orderBy('id', 'desc')->get();
        $count = 1;
        return view('admin.about.our-timeline.index', compact('timelines','count'));
    }

    public function create()
    {
        return view('admin.about.our-timeline.create');
    }

    public function edit(OurTimeline $timeline)
    {
        return view('admin.about.our-timeline.edit', compact('timeline'));

    }

    public function store()
    {
        $timeline = OurTimeline::create($this->validateData());
        $this->storeFile($timeline);

        if($timeline)
        {
            return redirect()->back()->with('success', 'Our timeline Publish!');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function update(OurTimeline $timeline)
    {
        $timeline->update($this->validateData());
        $this->storeFile($timeline);

        if($timeline)
        {
            return redirect()->back()->with('success', 'Our timeline Updated!');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function deactive(OurTimeline $timeline)
    {
        $timeline->update(['status' => 0]);

        if($timeline)
        {
            return redirect()->back()->with('success', 'Our timeline Deactived.');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function active(OurTimeline $timeline)
    {
        $timeline->update(['status' => 1]);

        if($timeline)
        {
            return redirect()->back()->with('success', 'Our timeline Activated.');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    private function validateData()
    {
        return request()->validate([
            'title' => 'required',
            'date' => '',
            'details' => 'required',
            'image' => 'sometimes|file|image',
        ]);
    }

    private function storeFile($timeline)
    {
        if(request()->has('image')){
            if(request()->old_image){
                unlink('storage/'.request()->old_image);
            }
            $timeline->update([
                'image' => request()->image->store('image/about/our-timeline/', 'public'),
            ]);
        }
    }

    public function permanentDelete(OurTimeline $timeline)
    {
        if($timeline->image){
            unlink('storage/'.$timeline->image);
        }
        $timeline->delete();

        if($timeline)
        {
            return redirect()->back()->with('delete', 'Timeline Deleted Permanently!');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }
}
