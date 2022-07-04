<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::orderBy('id', 'desc')->get();
        $count = 1;
        return view('admin.testimonial.index', compact('testimonials','count'));
        
    }

    public function create()
    {
        return view('admin.testimonial.create');
    }

    public function store()
    {
        $data = request()->validate([
            'client_name' => 'required',
            'review' => 'required',
        ]);

        $testimonial = Testimonial::create($data);

        if($testimonial)
        {
            return redirect()->back()->with('success', 'New Testimonial Publish!');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonial.edit', compact('testimonial'));

    }

    public function update(Testimonial $testimonial)
    {
        $data = request()->validate([
            'client_name' => 'required',
            'review' => 'required',
        ]);

        $testimonial->update($data);

        if($testimonial)
        {
            return redirect()->back()->with('success', 'Testimonial Updated!');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function deactive(Testimonial $testimonial)
    {
        $testimonial->update(['status' => 0]);

        if($testimonial)
        {
            return redirect()->back()->with('success', 'Testimonial Deactived.');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function active(Testimonial $testimonial)
    {
        $testimonial->update(['status' => 1]);

        if($testimonial)
        {
            return redirect()->back()->with('success', 'Testimonial Activated.');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    // public function softDelete(Testimonial $testimonial)
    // {
    //     $testimonial->update(['status' => 9]);

    //     if($testimonial)
    //     {
    //         return redirect()->back()->with('delete', 'Testimonial moved to trash.');
    //     }else{
    //         return redirect()->back()->with('error', 'Error, Something Went Wrong!');
    //     }
    // }

    public function permanentDelete(Testimonial $testimonial)
    {
        $testimonial->delete();

        if($testimonial)
        {
            return redirect()->back()->with('delete', 'Testimonial Has Been Deleted Permanently.');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }
}
