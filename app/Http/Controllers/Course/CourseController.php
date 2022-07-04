<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Models\Category\CategoryCourse;
use App\Models\Course\Course;
use App\Models\Course\CourseCategory;
use App\Models\Course\CourseClass;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::orderBy('id', 'desc')->get();
        $count = 1;
        return view('admin.course.index', compact('courses','count'));
    }

    public function show($slug)
    {
        $course = Course::where('slug', $slug)->first();
        $count = 1;
        return view('admin.course.show', compact('course','count'));
    }

    public function create()
    {
        $categories = CategoryCourse::where('status', 1)->orderBy('name','asc')->get();
        return view('admin.course.create', compact('categories'));
    }

    public function edit(Course $course)
    {
        $categories = CategoryCourse::where('status', 1)->orderBy('name','asc')->get();
        return view('admin.course.edit', compact('course','categories'));
    }

    public function store()
    {
        $this->validateData();

        $course = Course::create([
            'title' => request('title'),
            'slug' => request('slug'),
            'details' => request('details'),
            'cost' => request('cost'),
            'discount' => request('discount'),
            'teacher' => request('teacher'),
            'duration' => request('duration'),
            'start_date' => request('start_date'),
            'end_date' => request('end_date'),
            'keywords' => request('keywords'),
            'meta_description' => request('meta_description')
        ]);

        $this->storeImage($course);

        if(request()->category_id){
            foreach(request()->category_id as $key=>$category_id){
                $category = New CourseCategory();
                $category->category_id = $category_id;
                $category->course_id = $course->id;
                $category->save();
            }
        }

        if($course)
        {
            return back()->with('success', 'Course Publish Successfully!');
        }else{
            return back()->with('error', 'Something Went Wrong!');
        }
    }

    public function update(Course $course)
    {
        $this->updateValidateData();

        $course->update([
            'title' => request('title'),
            'slug' => request('slug'),
            'details' => request('details'),
            'cost' => request('cost'),
            'discount' => request('discount'),
            'teacher' => request('teacher'),
            'duration' => request('duration'),
            'start_date' => request('start_date'),
            'end_date' => request('end_date'),
            'keywords' => request('keywords'),
            'meta_description' => request('meta_description')
        ]);

        if(request()->category_id){
            foreach($course->category as $item){
                $item->delete();
            }

            foreach(request()->category_id as $key=>$category_id){
                $category = New CourseCategory();
                $category->category_id = $category_id;
                $category->course_id = $course->id;
                $category->save();
            }
        }

        $this->storeImage($course);

        if($course)
        {
            return back()->with('success', 'Course Updated Successfully!');
        }else{
            return back()->with('error', 'Something Went Wrong!');
        }
    }

    public function addClass($id)
    {
        $course = Course::findOrFail($id);
        return view('admin.course.add-class', compact('course'));
    }

    public function storeClass($id)
    {
        $course = Course::findOrFail($id);

        if($course->courseClass) {
            foreach($course->courseClass as $item){
                $item->delete();
            }
        }

        foreach(request()->video_link as $key=>$video_link){
            $classes = New CourseClass();
            $classes->course_id = $course->id;
            $classes->title = request()->title[$key];
            $classes->video_link = $video_link;
            $classes->duration = request()->duration[$key];
            $classes->date = request()->date[$key];
            $classes->save();
        }

        if($classes)
        {
            return back()->with('success', 'Course Class Added!');
        }else{
            return back()->with('error', 'Something Went Wrong!');
        }
        
    }

    public function deactive(Course $course)
    {
        $course->update(['status' => 0]);

        if($course)
        {
            return back()->with('success', 'Course Deactived!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function active(Course $course)
    {
        $course->update(['status' => 1]);

        if($course)
        {
            return back()->with('success', 'Course Activated!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function permanentDelete(Course $course)
    {
        $course->delete();

        if($course)
        {
            return back()->with('delete', 'Course Deleted Permanently!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }


    // PRIVATE FUNCTION
    private function validateData()
    {
        return request()->validate([
            'title' => 'required',
            'slug' => 'required|unique:courses',
        ]);
    }

    // PRIVATE FUNCTION
    private function updateValidateData()
    {
        return request()->validate([
            
            'title' => 'required',
            'slug' => 'required',
        ]);
    }

    private function storeImage($course)
    {
        if(request()->has('image'))
        {
            if(request()->oldimage){
                unlink('storage/'.$course->image);
            }
            $course->update([
                'image' => request()->image->store('image/course', 'public'),
            ]);
        }
    }

    public function deactiveClass(CourseClass $class)
    {
        $class->update(['status' => 0]);

        if($class)
        {
            return back()->with('success', 'Class Deactived!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function activeClass(CourseClass $class)
    {
        $class->update(['status' => 1]);

        if($class)
        {
            return back()->with('success', 'Class Activated!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

}
