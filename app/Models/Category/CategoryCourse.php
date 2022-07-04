<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryCourse extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function course()
    {
        return $this->belongsToMany('App\Models\Course\Course','course_categories','category_id','course_id');
    }

    public function coursecategory()
    {
        return $this->hasMany('App\Models\Course\CourseCategory');
    }

    public function path()
    {
        return route('course.category', $this->slug );
    }
}
