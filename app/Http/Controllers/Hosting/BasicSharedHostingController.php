<?php

namespace App\Http\Controllers\Hosting;

use App\Http\Controllers\Controller;
use App\Models\Hosting\BasicSharedHostingList;
use App\Models\Hosting\BasicShareHosting;
use Illuminate\Http\Request;

class BasicSharedHostingController extends Controller
{
    public function index()
    {
        $hostings = BasicShareHosting::latest()->get();
        $count = 1;
        return view('admin.hosting.basic-shared.index', compact('hostings','count'));
    }

    public function show($id)
    {
        $hosting = BasicShareHosting::where('id', $id)->first();
        return view('admin.hosting.basic-shared.show', compact('hosting'));
    }

    public function create()
    {
        return view('admin.hosting.basic-shared.create');
    }

    public function edit(BasicShareHosting $hosting)
    {
        return view('admin.hosting.basic-shared.edit', compact('hosting'));
    }

    public function store()
    {
        $this->validateData();

        $hosting = BasicShareHosting::create([
            'plan_name' => request('plan_name'),
            'plan_duration' => request('plan_duration'),
            'plan_cost' => request('plan_cost'),
            'plan_bonus' => request('plan_bonus'),
            's_status' => BasicShareHosting::max('s_status') + 1,
            'f_status' => request('f_status'),
            'status' => 1,
        ]);

        if(request()->list){
            foreach(request()->list as $key=>$list){
                $flist = New BasicSharedHostingList();
                $flist->list = $list;
                $flist->basic_id = $hosting->id;
                $flist->sp_status = request()->sp_status[$key];
                $flist->save();
            }
        }

        if($hosting)
        {
            return back()->with('success', 'Hosting Publish Successfully!');
        }else{
            return back()->with('error', 'Something Went Wrong!');
        }
    }

    public function update(BasicShareHosting $hosting)
    {
        $this->validateData();

        $hosting->update([
            'plan_name' => request('plan_name'),
            'plan_duration' => request('plan_duration'),
            'plan_cost' => request('plan_cost'),
            'plan_bonus' => request('plan_bonus'),
            'f_status' => request('f_status'),
        ]);

        if(request()->list){
            foreach($hosting->list as $item){
                $item->delete();
            }

            foreach(request()->list as $key=>$list){
                $flist = New BasicSharedHostingList();
                $flist->list = $list;
                $flist->basic_id = $hosting->id;
                $flist->sp_status = request()->sp_status[$key];
                $flist->save();
            }
        }


        if($hosting)
        {
            return back()->with('success', 'Hosting Updated Successfully!');
        }else{
            return back()->with('error', 'Something Went Wrong!');
        }
    }

    public function deactive(BasicShareHosting $hosting)
    {
        $hosting->update(['status' => 0]);

        if($hosting)
        {
            return back()->with('success', 'Hosting Deactived!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function active(BasicShareHosting $hosting)
    {
        $hosting->update(['status' => 1]);

        if($hosting)
        {
            return back()->with('success', 'Hosting Activated!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function permanentDelete(BasicShareHosting $hosting)
    {
        $hosting->delete();

        if($hosting)
        {
            return back()->with('delete', 'Hosting Deleted Permanently!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }


    // PRIVATE FUNCTION
    private function validateData()
    {
        return request()->validate([
            'plan_name' => 'required',
            'plan_duration' => 'required',
            'plan_cost' => 'required',
            'plan_bonus' => '',
        ]);
    }
}
