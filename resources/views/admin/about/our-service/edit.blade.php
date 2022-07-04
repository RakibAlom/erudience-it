@section('title', 'Edit Service Details')

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
      Edit Service Details
  </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
  <div class="intro-y col-span-12">
      <!-- BEGIN: Form Layout -->
      <form action="{{ route('admin.about.our-service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="intro-y box p-5">
          <div class="grid grid-cols-12 gap-6">
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Title</label>
              <input id="title" required name="title" type="text" value="{{ $service->title }}" class="form-control w-full" placeholder="service title">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">URL Slug (Unique)</label>
              <input id="slug" required name="slug" value="{{ $service->slug }}" type="text" class="form-control w-full" placeholder="url-slug">
            </div>
            
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Slogan</label>
              <textarea id="slogan" name="slogan" type="text" class="form-control w-full" placeholder="type a short details...">{{ $service->slogan }}</textarea>
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Image</label>
              <input type="file" class="form-control mb-4" onchange="imageChange(this)" name="image" >
              <input type="hidden" name="old_image" value="{{ $service->image }}">
          </div>
            <div class="col-span-12">
              <label for="crud-form-1" class="form-label">Body</label>
              <textarea id="body" name="body" type="text" class="form-control w-full" placeholder="write your blog...">{!! $service->body !!}</textarea>
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Meta Description (String Limit: 250)</label>
              <textarea id="meta_description" name="meta_description" type="text" class="form-control w-full" placeholder="meta description...">{{ $service->meta_description }}</textarea>
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Keywords</label>
              <textarea id="crud-form-1" name="keywords" type="text" class="form-control w-full" placeholder="meta keywords...">{{ $service->keywords }}</textarea>
            </div>
            <div class="col-span-12">
              <img src="{{ asset('storage/' . $service->image) }}" class="rounded-lg" id="image">
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
        
        
        