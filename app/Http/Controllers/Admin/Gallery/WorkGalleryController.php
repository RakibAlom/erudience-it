<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Gallery\WorkGallery;
use Illuminate\Http\Request;

class WorkGalleryController extends Controller
{
    public function index()
    {
        $galleries = WorkGallery::orderBy('id', 'desc')->get();
        $count = 1;
        return view('admin.gallery.work-gallery.index', compact('galleries','count'));
    }

    public function create()
    {
        return view('admin.gallery.work-gallery.create');
    }

    public function edit(WorkGallery $gallery)
    {
        return view('admin.gallery.work-gallery.edit', compact('gallery'));

    }

    public function store()
    {
        $gallery = WorkGallery::create($this->validateData());
        $this->storeFile($gallery);

        if($gallery)
        {
            return redirect()->back()->with('success', 'Working Photo Publish!');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function update()
    {

        $gallery = WorkGallery::first();
        $gallery->update($this->validateData());
        $this->storeFile($gallery);

        if($gallery)
        {
            return redirect()->back()->with('success', 'Working Photo Updated!');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function deactive(WorkGallery $gallery)
    {
        $gallery->update(['status' => 0]);

        if($gallery)
        {
            return redirect()->back()->with('success', 'Working Photo Deactived.');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function active(WorkGallery $gallery)
    {
        $gallery->update(['status' => 1]);

        if($gallery)
        {
            return redirect()->back()->with('success', 'Working Photo Activated.');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    private function validateData()
    {
        return request()->validate([
            'title' => '',
            'image' => 'sometimes|file|image',
        ]);
    }

    private function storeFile($gallery)
    {
        if(request()->has('image')){
            if(request()->old_image){
                unlink('storage/'.request()->old_image);
            }
            $gallery->update([
                'image' => request()->image->store('image/gallery/work-gallery/', 'public'),
            ]);
        }
    }

    public function permanentDelete(WorkGallery $gallery)
    {
        if($gallery->image){
            unlink('storage/'.$gallery->image);
        }
        $gallery->delete();

        if($gallery)
        {
            return redirect()->back()->with('delete', 'Gallery Image Deleted Permanently!');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }
}
