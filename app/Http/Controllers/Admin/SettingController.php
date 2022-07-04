<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    public function getName(Request $request)
    {
        $slug = strtolower(str_replace(array(' ',';','!','=','@','#','--','–','(',')','%','^','~','*','/','.',',','ред','+',' - ',' | ', '{','}','[',']','"','<','>',':',':-','---','&',' & '), '-', request()->name));
        // $slug = strtolower(preg_replace('/[^a-zA-Z0-9\s]/', '-', request()->name));

        return response()->json(['slug' => $slug]);
    }

    public function getTitle(Request $request)
    {
        $slug = strtolower(str_replace(array(' ',';','!','=','@','#','--','(',')','%','^','~','*','/','.',',','?','+',' - ',' | ', '{','}','[',']','"','<','>',':',':-','---','&',' & '), '-', request()->title));

        return response()->json(['slug' => $slug]);
    }

    public function metaDescription(Request $request)
    {
        $meta_description = Str::limit(request()->body, 250);

        return response()->json(['meta_description' => $meta_description]);
    }
    
    public function getUnique(Request $request)
    {
        $slug = strtoupper(uniqid());

        return response()->json(['slug' => $slug]);
    }

    // GET TUTORIAL CATEGORY FUNCTION
    // public function getTutorialCategory($id)
    // {
    //     $tags = TagTutorial::where('category_id', $id)->where('status', 1)->get();
    //     return response()->json($tags);
    // }

    // // GET TUTORIAL CATEGORY FUNCTION
    // public function getTemplateCategory($id)
    // {
    //     $tags = TagTemplate::where('category_id', $id)->where('status', 1)->get();
    //     return response()->json($tags);
    // }
}
