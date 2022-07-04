@section('title', 'Edit Story')

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
    Edit Story
  </h2>
</div>

<div class="grid grid-cols-12 gap-6 mt-5">
  <div class="intro-y col-span-12">
      <!-- BEGIN: Form Layout -->

      <form action="{{ route('admin.about.update.our-story', $story->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="intro-y box p-5">
          <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12">
              <label for="crud-form-1" class="form-label">Story Title</label>
              <input id="crud-form-1" name="title" value="{{ $story->title }}" type="text" class="form-control w-full" required placeholder="story title...">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Caption</label>
              <input id="crud-form-1" name="caption" value="{{ $story->caption }}" type="text" class="form-control w-full" placeholder="ex: Sponsor or Organizer">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Image</label>
              <input type="file" onchange="imageChange(this)" name="image" class="form-control w-full">
              <input type="hidden" name="old_image" value="{{ $story->image }}">
            </div>
            <div class="col-span-12">
              <label for="crud-form-1" class="form-label">Details</label>
              <textarea id="body" name="details" type="text" class="form-control w-full" placeholder="type your details...">{{ $story->details }}</textarea>
            </div>
            <div class="col-span-12">
              <img src="{{ asset('storage/' . $story->image) }}" id="image">
            </div>
            
          </div>
          
          <div class="text-right mt-5">
              <button type="submit" class="btn btn-primary w-24">Save</button>
          </div>
        </div>
      </form>
      <!-- END: Form Layout -->
  </div>
</div>

@endsection

@section('js')
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

@include('admin.layouts.include.editor')

@endsection
        
        
        