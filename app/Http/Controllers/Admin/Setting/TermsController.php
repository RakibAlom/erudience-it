<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Models\Admin\Terms;
use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function index()
    {
        $terms = Terms::first();
        return view('admin.setting.terms', compact('terms'));
    }

    public function store()
    {
        $data = $this->validateData();
        $terms = Terms::create($data);

        if($terms)
        {
            return redirect()->back()->with('success', 'Terms & Condition Publish!');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function update()
    {

        $data = $this->validateData();
        $terms = Terms::first();
        $terms->update($data);

        if($terms)
        {
            return redirect()->back()->with('success', 'Terms & Condition Information Updated!');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    private function validateData()
    {
        return request()->validate([
            'terms' => 'required'
        ]);
    }
}
