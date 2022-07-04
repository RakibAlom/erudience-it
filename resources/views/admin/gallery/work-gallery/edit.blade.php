@section('title', 'Edit Gallery Photo')

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
      Edit Gallery image
  </h2>
</div>

<div class="grid grid-cols-12 gap-6 mt-5">
  <div class="intro-y col-span-12">
      <!-- BEGIN: Form Layout -->

      <form action="{{ route('admin.gallery.update.work-gallery', $gallery->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="intro-y box p-5">
          <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12">
              <label for="crud-form-1" class="form-label">Gallery Title</label>
              <input id="crud-form-1" name="title" value="{{ $gallery->title }}" type="text" required class="form-control w-full" placeholder="gallery title...">
            </div>
            <div class="col-span-12">
              <label for="crud-form-1" class="form-label">Image</label>
              <input type="file" onchange="imageChange(this)" name="image" class="form-control w-full">
            @if($gallery->image)
                <input type="hidden" name="old_image" value="{{ $gallery->image }}">
                <img class="object-fill mt-4" src="{{ asset('storage/'.$gallery->image) }}" id="image">
              @else
                  <img class="mt-4" src="" id="image" style="height: 120px;">
              @endif
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
            .attr("class","object-fill mt-4")

        };
        reader.readAsDataURL(input.files[0]);
    }
  }
</script>
@endsection
        
        
        