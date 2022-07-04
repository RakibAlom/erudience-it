<?php

namespace App\Models\Portfolio;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function categoryportfolio()
    {
        return $this->belongsToMany('App\Models\Category\CategoryPortfolio','portfolio_categories','portfolio_id','category_id');
    }

    public function category()
    {
        return $this->hasMany('App\Models\Portfolio\PortfolioCategory');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function path()
    {
        return route('portfolio.show', $this->slug);
    }

    public function fb()
    {
        return url("https://www.facebook.com/sharer.php?u=" . route('portfolio.show', $this->slug));
    }

    public function twitter()
    {
        return url("https://twitter.com/intent/tweet?url=" . route('portfolio.show', $this->slug));
    }

    public function pin()
    {
        return url("https://www.pinterest.com/pin/create/button/?url=" . route('portfolio.show', $this->slug));
    }
}
