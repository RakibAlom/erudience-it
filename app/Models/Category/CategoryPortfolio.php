<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryPortfolio extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function portfolio()
    {
        return $this->belongsToMany('App\Models\Portfolio\Portfolio','portfolio_categories','category_id','portfolio_id');
    }

    public function portfoliocategory()
    {
        return $this->hasMany('App\Models\Portfolio\PortfolioCategory');
    }

    public function path()
    {
        return route('portfolio.category', $this->slug );
    }
}
