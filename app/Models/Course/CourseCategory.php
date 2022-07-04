<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function categorycourse()
    {
        return $this->belongsTo('App\Models\Category\CategoryCourse', 'category_id');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\Course\Course', 'course_id');
    }
}
