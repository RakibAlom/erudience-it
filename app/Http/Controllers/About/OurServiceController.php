<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use App\Models\About\OurService;
use Illuminate\Http\Request;

class OurServiceController extends Controller
{
    public function index()
    {
        $services = OurService::orderBy('id', 'desc')->get();
        $count = 1;
        return view('admin.about.our-service.index', compact('services','count'));
    }

    public function show($slug)
    {
        $service = OurService::where('slug', $slug)->first();
        return view('admin.about.our-service.show', compact('OurService'));
    }

    public function create()
    {
        return view('admin.about.our-service.create');
    }

    public function edit(OurService $service)
    {
        return view('admin.about.our-service.edit', compact('service'));
    }

    public function store()
    {
        $this->validateData();

        $check = OurService::where('slug', request()->slug)->first();

        if(!$check){
            $service = OurService::create([
                'title' => request('title'),
                'slug' => request('slug'),
                'slogan' => request('slogan'),
                'body' => request('body'),
                'meta_description' => request('meta_description'),
                'keywords' => request('keywords'),
                'status' => 1,
            ]);
        }else{
            $service = OurService::create([
                'title' => request('title'),
                'slug' => request('slug') . '-' . uniqid(),
                'slogan' => request('slogan'),
                'body' => request('body'),
                'meta_description' => request('meta_description'),
                'keywords' => request('keywords'),
                'status' => 1,
            ]);
        }

        $this->storeImage($service);

        if($service)
        {
            return back()->with('success', 'Our Service Publish Successfully!');
        }else{
            return back()->with('error', 'Something Went Wrong!');
        }
    }

    public function update(OurService $service)
    {
        $this->validateData();

        $service->update([
            'title' => request('title'),
            'slug' => request('slug'),
            'slogan' => request('slogan'),
            'body' => request('body'),
            'meta_description' => request('meta_description'),
            'keywords' => request('keywords'),
        ]);

        $this->storeImage($service);

        if($service)
        {
            return back()->with('success', 'Our Service Updated Successfully!');
        }else{
            return back()->with('error', 'Something Went Wrong!');
        }
    }

    public function deactive(OurService $service)
    {
        $service->update(['status' => 0]);

        if($service)
        {
            return back()->with('success', 'Our Service Deactived!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function active(OurService $service)
    {
        $service->update(['status' => 1]);

        if($service)
        {
            return back()->with('success', 'Our Service Activated!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function permanentDelete(OurService $service)
    {
        if($service->image){
            unlink('storage/'.$service->image);
        }
        $service->delete();

        if($service)
        {
            return back()->with('delete', 'Our Service Deleted Permanently!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }


    // PRIVATE FUNCTION
    private function validateData()
    {
        return request()->validate([
            'title' => 'required',
            'slug' => 'required',
            'slogan' => '',
            'body' => 'required',
            'image' => 'sometimes|file|image',
            'meta_description' => '',
            'keywords' => '',
        ]);
    }

    private function storeImage($service)
    {
        if(request()->has('image'))
        {
            if(request()->old_image){
                unlink('storage/'.$service->image);
            }
            $service->update([
                'image' => request()->image->store('image/about/our-service', 'public'),
            ]);
        }
    }
}
