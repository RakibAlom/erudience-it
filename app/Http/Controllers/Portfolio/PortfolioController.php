<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\Category\CategoryPortfolio;
use App\Models\Portfolio\Portfolio;
use App\Models\Portfolio\PortfolioCategory;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::orderBy('id', 'desc')->get();
        $count = 1;
        return view('admin.portfolio.index', compact('portfolios','count'));
    }

    public function show($slug)
    {
        $portfolio = Portfolio::where('slug', $slug)->first();
        return view('admin.portfolio.show', compact('portfolio'));
    }

    public function create()
    {
        $categories = CategoryPortfolio::where('status', 1)->orderBy('name','asc')->get();
        return view('admin.portfolio.create', compact('categories'));
    }

    public function edit(Portfolio $portfolio)
    {
        $categories = CategoryPortfolio::orderBy('name','asc')->get();
        return view('admin.portfolio.edit', compact('portfolio','categories'));
    }

    public function store()
    {
        $this->validateData();

        $check = Portfolio::where('slug', request()->slug)->first();

        if(!$check){
            $portfolio = Portfolio::create([
                'title' => request('title'),
                'slug' => request('slug'),
                'body' => request('body'),
                'demo_link' => request('demo_link'),
                'price' => request('price'),
                'client' => request('client'),
                'version' => request('version'),
                'technology' => request('technology'),
                'r_date' => request('r_date'),
                'lu_date' => request('lu_date'),
                'meta_description' => request('meta_description'),
                'keywords' => request('keywords'),
                'status' => 1,
            ]);
        }else{
            $portfolio = Portfolio::create([
                'title' => request('title'),
                'slug' => request('slug') . '-' . uniqid(),
                'body' => request('body'),
                'demo_link' => request('demo_link'),
                'price' => request('price'),
                'client' => request('client'),
                'version' => request('version'),
                'technology' => request('technology'),
                'r_date' => request('r_date'),
                'lu_date' => request('lu_date'),
                'meta_description' => request('meta_description'),
                'keywords' => request('keywords'),
                'status' => 1,
            ]);
        }

        $this->storeImage($portfolio);
        if(request()->category_id){
            foreach(request()->category_id as $key=>$category_id){
                $category = New PortfolioCategory();
                $category->category_id = $category_id;
                $category->portfolio_id = $portfolio->id;
                $category->save();
            }
        }


        if($portfolio)
        {
            return back()->with('success', 'Portfolio Publish Successfully!');
        }else{
            return back()->with('error', 'Something Went Wrong!');
        }
    }

    public function update(Portfolio $portfolio)
    {
        $this->validateData();

        $portfolio->update([
            'title' => request('title'),
            'slug' => request('slug'),
            'body' => request('body'),
            'demo_link' => request('demo_link'),
            'price' => request('price'),
            'client' => request('client'),
            'version' => request('version'),
            'technology' => request('technology'),
            'r_date' => request('r_date'),
            'lu_date' => request('lu_date'),
            'keywords' => request('keywords'),
        ]);

        $this->storeImage($portfolio);

        if(request()->category_id){
            foreach($portfolio->category as $item){
                $item->delete();
            }

            foreach(request()->category_id as $key=>$category_id){
                $category = New PortfolioCategory();
                $category->category_id = $category_id;
                $category->portfolio_id = $portfolio->id;
                $category->save();
            }
        }


        if($portfolio)
        {
            return back()->with('success', 'Portfolio Updated Successfully!');
        }else{
            return back()->with('error', 'Something Went Wrong!');
        }
    }

    public function deactive(Portfolio $portfolio)
    {
        $portfolio->update(['status' => 0]);

        if($portfolio)
        {
            return back()->with('success', 'Portfolio Deactived!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function active(Portfolio $portfolio)
    {
        $portfolio->update(['status' => 1]);

        if($portfolio)
        {
            return back()->with('success', 'Portfolio Activated!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function permanentDelete(Portfolio $portfolio)
    {
        if($portfolio->image){
            unlink('storage/'.$portfolio->image);
        }
        $portfolio->delete();

        if($portfolio)
        {
            return back()->with('delete', 'Portfolio Deleted Permanently!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }


    // PRIVATE FUNCTION
    private function validateData()
    {
        return request()->validate([
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'demo_link' => '',
            'price' => '',
            'client' => '',
            'image' => 'sometimes|file|image',
            'version' => '',
            'technology' => '',
            'r_date' => '',
            'lu_date' => '',
            'meta_description' => '',
            'keywords' => '',
        ]);
    }

    private function storeImage($portfolio)
    {
        if(request()->has('image'))
        {
            if(request()->oldimage){
                unlink('storage/'.$portfolio->image);
            }
            $portfolio->update([
                'image' => request()->image->store('image/portfolio', 'public'),
            ]);
        }
    }
}
