<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Models\Admin\RefundPolicy;
use Illuminate\Http\Request;

class RefundPolicyController extends Controller
{
    public function index()
    {
        $policy = RefundPolicy::first();
        return view('admin.setting.refund_policy', compact('policy'));
    }

    public function store()
    {
        $data = $this->validateData();
        $policy = RefundPolicy::create($data);

        if($policy)
        {
            return back()->with('success', 'Refund Policy Publish.');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function update()
    {

        $data = $this->validateData();
        $policy = RefundPolicy::first();
        $policy->update($data);

        if($policy)
        {
            return back()->with('success', 'Refund Policy Updated.');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    private function validateData()
    {
        return request()->validate([
            'refund_policy' => 'required'
        ]);
    }
}
