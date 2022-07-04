<?php

namespace App\Http\Controllers\Hosting;

use App\Http\Controllers\Controller;
use App\Models\Hosting\BasicShareHosting;
use Illuminate\Http\Request;

class HostingPublicController extends Controller
{
    public function basicShared()
    {
        $hostings = BasicShareHosting::where('status', 1)->get();
        return view('hosting.basic_shared', compact('hostings'));
    }
}
