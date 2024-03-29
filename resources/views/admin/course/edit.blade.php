@section('title', 'Edit Course')

@extends('admin.layouts.layout')

@section('content')

@include('admin.layouts.alert')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="intro-y flex items-center mt-8">
  <h2 class="text-lg font-medium mr-auto">
      Edit Course
  </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
  <div class="intro-y col-span-12">
      <!-- BEGIN: Form Layout -->
      <form action="{{ route('admin.course.update', $course->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="intro-y box p-5">
          <div class="grid grid-cols-12 gap-6">
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Title</label>
              <input id="title" required name="title" value="{{ $course->title }}" type="text" class="form-control w-full" placeholder="course title">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">URL Slug (Unique)</label>
              <input id="slug" required name="slug" type="text"  value="{{ $course->slug }}" class="form-control w-full" placeholder="url-slug">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Image (max:100KB)</label>
              <input type="file" onchange="imageChange(this)" name="image" class="form-control w-full">
              <input type="hidden" name="oldimage" value="{{ $course->image }}">
          </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Category</label>
              <select data-placeholder="Select Category" class="tom-select w-full" required name="category_id[]" multiple>
                <option disabled>Select Category</option>
                @foreach ($categories as $item)
                  <option value="{{ $item->id }}" @foreach($course->category as $category) @if($item->id == $category->category_id) selected @endif @endforeach>{{ $item->name }}</option>
                @endforeach
            </select>
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Teacher</label>
              <input id="teacher" name="teacher" type="text"  value="{{ $course->teacher }}" class="form-control w-full" placeholder="ex: Rakib Alom">
            </div>
            <div class="col-span-2">
              <label for="crud-form-1" class="form-label">Cost</label>
              <input id="cost" name="cost" type="text"  value="{{ $course->cost }}" class="form-control w-full" placeholder="$99">
            </div>
            <div class="col-span-2">
              <label for="crud-form-1" class="form-label">Discount</label>
              <input id="discount" name="discount" type="text"  value="{{ $course->discount }}" class="form-control w-full" placeholder="$59">
            </div>
            <div class="col-span-2">
              <label for="crud-form-1" class="form-label">Duration</label>
              <input id="duration" name="duration" type="text"  value="{{ $course->duration }}" class="form-control w-full" placeholder="1.0">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Start Date</label>
              <input id="r_date" name="start_date" type="text"  value="{{ $course->start_date }}" placeholder="1st April 2022" class="form-control w-full">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">End Date</label>
              <input id="end_date" name="end_date" type="text"  value="{{ $course->end_date }}" placeholder="30th June 2022" class="form-control w-full">
            </div>
            <div class="col-span-12">
              <label for="crud-form-1" class="form-label">Details</label>
              <textarea id="body" name="details" type="text" class="form-control w-full" placeholder="write course details...">{{ $course->details }}</textarea>
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Meta Description (String Limit: 250)</label>
              <textarea id="meta_description" name="meta_description" rows="4" type="text" class="form-control w-full" placeholder="meta description...">{!! $course->meta_description !!}</textarea>
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Keywords</label>
              <textarea id="crud-form-1" name="keywords" type="text" rows="4" class="form-control w-full" placeholder="meta keywords...">{{ $course->keywords }}</textarea>
            </div>
            <div class="col-span-12">
              <img src="{{ asset('storage/' . $course->image) }}" class="rounded-lg" id="image">
            </div>
          </div>
          
          <div class="text-right mt-5">
              <button class="btn btn-primary w-24">Save</button>
          </div>
        </div>
      </form>

      <!-- END: Form Layout -->
  </div>
</div>

@endsection

@section('js')

@include('admin.layouts.include.editor')

<script>
    function imageChange(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#image')
              .attr('src', e.target.result)
              .attr("class","rounded-lg mt-4")

          };
          reader.readAsDataURL(input.files[0]);
     	}
    }
</script>

@endsection
        
        
        