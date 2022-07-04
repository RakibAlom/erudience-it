<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::where('status', 0)->orWhere('status', 1)->get();
        $count = 1;
        return view('admin.faq.index', compact('faqs','count'));
        
    }

    public function create()
    {
        return view('admin.faq.create');
    }

    public function store()
    {
        $data = request()->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        $faq = Faq::create($data);

        if($faq)
        {
            return back()->with('success', 'New FAQ Publish!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function edit(Faq $faq)
    {
        return view('admin.faq.edit', compact('faq'));

    }

    public function update(Faq $faq)
    {
        $data = request()->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        $faq->update($data);

        if($faq)
        {
            return back()->with('success', 'FAQ Updated!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function deactive(Faq $faq)
    {
        $faq->update(['status' => 0]);

        if($faq)
        {
            return back()->with('success', 'FAQ Deactived.');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function active(Faq $faq)
    {
        $faq->update(['status' => 1]);

        if($faq)
        {
            return back()->with('success', 'FAQ Activated.');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function permanentDelete(Faq $faq)
    {
        $faq->delete();

        if($faq)
        {
            return back()->with('delete', 'FAQ Has Been Deleted Permanently.');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }
}
