<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\GetQuote;
use App\Models\Admin\GetQuoteList;
use Illuminate\Http\Request;

class GetQuoteController extends Controller
{
    public function index()
    {
        $quotes = GetQuote::latest()->get();
        $count = 1;
        return view('admin.quote.index', compact('quotes','count'));
    }

    public function show($id)
    {
        $quote = GetQuote::where('id', $id)->first();
        return view('admin.quote.show', compact('quote'));
    }

    public function create()
    {
        return view('admin.quote.create');
    }

    public function edit(GetQuote $quote)
    {
        return view('admin.quote.edit', compact('quote'));
    }

    public function store()
    {
        $this->validateData();

        $quote = GetQuote::create([
            'title' => request('title'),
            'slogan' => request('slogan'),
            's_status' => GetQuote::max('s_status') + 1,
            'status' => 1,
        ]);

        $this->storeImage($quote);

        if(request()->list){
            foreach(request()->list as $key=>$list){
                $quotelist = New GetQuoteList();
                $quotelist->list = $list;
                $quotelist->get_quote_id = $quote->id;
                $quotelist->save();
            }
        }

        if($quote)
        {
            return back()->with('success', 'Quote Publish Successfully!');
        }else{
            return back()->with('error', 'Something Went Wrong!');
        }
    }

    public function update(GetQuote $quote)
    {
        $this->validateData();

        $quote->update([
            'title' => request('title'),
            'slogan' => request('slogan'),
        ]);
        
        $this->storeImage($quote);

        if(request()->list){
            foreach($quote->list as $item){
                $item->delete();
            }

            foreach(request()->list as $key=>$list){
                $quotelist = New GetQuoteList();
                $quotelist->list = $list;
                $quotelist->get_quote_id = $quote->id;
                $quotelist->save();
            }
        }


        if($quote)
        {
            return back()->with('success', 'Quote Updated Successfully!');
        }else{
            return back()->with('error', 'Something Went Wrong!');
        }
    }

    public function deactive(GetQuote $quote)
    {
        $quote->update(['status' => 0]);

        if($quote)
        {
            return back()->with('success', 'Quote Deactived!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function active(GetQuote $quote)
    {
        $quote->update(['status' => 1]);

        if($quote)
        {
            return back()->with('success', 'Quote Activated!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function permanentDelete(GetQuote $quote)
    {
        if($quote->image){
            unlink('storage/'.$quote->image);
        }
        $quote->delete();

        if($quote)
        {
            return back()->with('delete', 'Quote Deleted Permanently!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }


    // PRIVATE FUNCTION
    private function validateData()
    {
        return request()->validate([
            'title' => 'required',
            'slogan' => 'required',
            'image' => 'sometimes|file|image',
        ]);
    }

    private function storeImage($quote)
    {
        request()->validate([
            'image' => 'sometimes|file|image|max:50',
        ]);

        if(request()->has('image'))
        {
            if(request()->old_image){
                unlink('storage/'.request()->old_image);
            }
            $quote->update([
                'image' => request()->image->store('image/quote', 'public'),
            ]);
        }
    }
}
