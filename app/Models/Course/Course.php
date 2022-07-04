<?php

namespace App\Models\Course;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function categorycourse()
    {
        return $this->belongsToMany('App\Models\Category\CategoryCourse','course_categories','course_id','category_id');
    }

    public function category()
    {
        return $this->hasMany('App\Models\Course\CourseCategory');
    }

    public function courseuser()
    {
        return $this->belongsToMany('App\Models\User','course_users','user_id','id');
    }

    public function courseclass()
    {
        return $this->hasMany(CourseClass::class);
    }

    public function path()
    {
        return route('course.show', $this->slug);
    }

}
