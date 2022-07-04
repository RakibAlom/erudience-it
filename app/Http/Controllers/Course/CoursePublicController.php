<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Models\Course\Course;
use App\Models\Course\CourseClass;
use App\Models\Course\CourseUser;
use Illuminate\Http\Request;

class CoursePublicController extends Controller
{
    public function index()
    {
        $courses = Course::where('status', 1)->orderBy('id', 'desc')->paginate(12);
        return view('course.index', compact('courses'));
    }

    public function show($slug)
    {
        $course = Course::where('slug', $slug)->first();
        return view('course.course_show', compact('course'));
    }

    public function courseClass($slug, $title)
    {
        $course = Course::where('slug', $slug)->first();
        $class = CourseClass::where('title', $title)->first();
        return view('course.course_class', compact('course','class'));
    }

    public function enroll($id)
    {
        $course = Course::where('id', $id)->first();

        $enroll = CourseUser::create([
            'course_id' => $course->id,
            'user_id' => auth()->user()->id
        ]);

        if($enroll)
        {
            return redirect()->route('course.show', $course->slug)->with('success', 'Course Enroll Successfully!');
        }else{
            return redirect()->route('course.show', $course->slug)->with('error', 'Something went wrong!');
        }
    }
}
