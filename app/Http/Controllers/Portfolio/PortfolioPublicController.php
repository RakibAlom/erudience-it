<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\Portfolio\Portfolio;
use Illuminate\Http\Request;

class PortfolioPublicController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::where('status', 1)->orderBy('id', 'desc')->paginate(12);
        return view('portfolio.index', compact('portfolios'));
    }

    public function show($slug)
    {
        $portfolio = Portfolio::where('slug', $slug)->first();
        return view('portfolio.portfolio_show', compact('portfolio'));
    }
}
