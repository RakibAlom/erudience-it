<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Gallery\ProjectClient;
use Illuminate\Http\Request;

class ProjectClientController extends Controller
{
    public function index()
    {
        $logos = ProjectClient::orderBy('id', 'desc')->get();
        $count = 1;
        return view('admin.gallery.project-client.index', compact('logos','count'));
    }

    public function create()
    {
        return view('admin.gallery.project-client.create');
    }

    public function edit(ProjectClient $logo)
    {
        return view('admin.gallery.project-client.edit', compact('logo'));

    }

    public function store()
    {
        $logo = ProjectClient::create($this->validateData());
        $this->storeFile($logo);

        if($logo)
        {
            return redirect()->back()->with('success', 'Project Client Logo Publish!');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function update()
    {

        $logo = ProjectClient::first();
        $logo->update($this->validateData());
        $this->storeFile($logo);

        if($logo)
        {
            return redirect()->back()->with('success', 'Project Client logo Updated!');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function deactive(ProjectClient $logo)
    {
        $logo->update(['status' => 0]);

        if($logo)
        {
            return redirect()->back()->with('success', 'logo Deactived.');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function active(ProjectClient $logo)
    {
        $logo->update(['status' => 1]);

        if($logo)
        {
            return redirect()->back()->with('success', 'logo Activated.');
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
                'logo' => request()->logo->store('image/gallery/client-logo/', 'public'),
            ]);
        }
    }

    public function permanentDelete(ProjectClient $logo)
    {
        if($logo->logo){
            unlink('storage/'.$logo->logo);
        }
        $logo->delete();

        if($logo)
        {
            return redirect()->back()->with('delete', 'Client Brand Logo Deleted Permanently!');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }
}
