<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use App\Models\About\OurSkill;
use Illuminate\Http\Request;

class OurSkillController extends Controller
{
    public function index()
    {
        $skills = OurSkill::orderBy('id', 'desc')->get();
        $count = 1;
        return view('admin.about.our-skill.index', compact('skills','count'));
    }

    public function create()
    {
        return view('admin.about.our-skill.create');
    }

    public function edit(OurSkill $skill)
    {
        return view('admin.about.our-skill.edit', compact('skill'));

    }

    public function store()
    {
        $skill = OurSkill::create($this->validateData());
        $this->validateData();

        if($skill)
        {
            return back()->with('success', 'New Skill Publish!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function update(OurSkill $skill)
    {
        $skill->update($this->validateData());

        if($skill)
        {
            return back()->with('success', 'Skill Updated!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function deactive(OurSkill $skill)
    {
        $skill->update(['status' => 0]);

        if($skill)
        {
            return back()->with('success', 'Skill Deactived.');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function active(OurSkill $skill)
    {
        $skill->update(['status' => 1]);

        if($skill)
        {
            return back()->with('success', 'Skill Activated.');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    private function validateData()
    {
        return request()->validate([
            'name' => 'required',
            'caption' => 'required',
            'la_icon' => 'required',
        ]);
    }

    public function permanentDelete(OurSkill $skill)
    {
        $skill->delete();

        if($skill)
        {
            return back()->with('delete', 'Skill Deleted Permanently!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }
}
