<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Models\Admin\LicenceInfo;
use Illuminate\Http\Request;

class LicenceInfoController extends Controller
{
    public function index()
    {
        $licence = LicenceInfo::first();
        return view('admin.setting.licence_info', compact('licence'));
    }

    public function store()
    {
        $data = $this->validateData();
        $licence = LicenceInfo::create($data);

        if($licence)
        {
            return redirect()->back()->with('success', 'Licence Information Publish!');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function update()
    {

        $data = $this->validateData();
        $licence = LicenceInfo::first();
        $licence->update($data);

        if($licence)
        {
            return redirect()->back()->with('success', 'Licence Information Updated!');
        }else{
            return redirect()->back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    private function validateData()
    {
        return request()->validate([
            'licence_info' => 'required'
        ]);
    }
}
