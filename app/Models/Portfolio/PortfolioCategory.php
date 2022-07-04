<?php

namespace App\Models\Portfolio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function categoryportfolio()
    {
        return $this->belongsTo('App\Models\Category\CategoryPortfolio', 'category_id');
    }

    public function portfolio()
    {
        return $this->belongsTo('App\Models\Portfolio\Portfolio', 'portfolio_id');
    }
}
