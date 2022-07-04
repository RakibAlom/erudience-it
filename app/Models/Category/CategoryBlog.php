<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryBlog extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function blog()
    {
        return $this->belongsToMany('App\Models\Blog\Blog','blog_categories','category_id','blog_id');
    }

    public function blogcategory()
    {
        return $this->hasMany('App\Models\Blog\BlogCategory');
    }

    public function path()
    {
        return route('blog.category', $this->slug );
    }
}
