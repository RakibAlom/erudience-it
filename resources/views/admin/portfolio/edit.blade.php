@section('title', 'New Portfolio')

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
      Edit Portfolio
  </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
  <div class="intro-y col-span-12">
      <!-- BEGIN: Form Layout -->
      <form action="{{ route('admin.portfolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="intro-y box p-5">
          <div class="grid grid-cols-12 gap-6">
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Title</label>
              <input id="title" required name="title" value="{{ $portfolio->title }}" type="text" class="form-control w-full" placeholder="portfolio title">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">URL Slug (Unique)</label>
              <input id="slug" required value="{{ $portfolio->slug }}" name="slug" type="text" class="form-control w-full" placeholder="url-slug">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Image (max:100KB)</label>
              <input type="file" onchange="imageChange(this)" name="image" class="form-control w-full">
              <input type="hidden" name="oldimage" value="{{ $portfolio->image }}">
          </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Category</label>
              <select data-placeholder="Select Category" class="tom-select w-full" required name="category_id[]" multiple>
                <option disabled>Select Category</option>
                @foreach ($categories as $item)
                  <option value="{{ $item->id }}" @foreach($portfolio->category as $category) @if($item->id == $category->category_id) selected @endif @endforeach>{{ $item->name }}</option>
                @endforeach
            </select>
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Demo Link</label>
              <input id="demo_link" value="{{ $portfolio->demo_link }}" name="demo_link" type="text" class="form-control w-full" placeholder="http://yourportfolio.com">
            </div>
            <div class="col-span-2">
              <label for="crud-form-1" class="form-label">Client Name</label>
              <input id="client" value="{{ $portfolio->client }}" name="client" type="text" class="form-control w-full" placeholder="Jon Doe">
            </div>
            <div class="col-span-2">
              <label for="crud-form-1" class="form-label">Price</label>
              <input id="price" value="{{ $portfolio->price }}" name="price" type="text" class="form-control w-full" placeholder="sell price">
            </div>
            <div class="col-span-2">
              <label for="crud-form-1" class="form-label">Project Version</label>
              <input id="version" value="{{ $portfolio->version }}" name="version" type="text" class="form-control w-full" placeholder="1.0">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Technology</label>
              <input id="technology" value="{{ $portfolio->technology }}" name="technology" type="text" class="form-control w-full" placeholder="ex: php,laravel,mysql">
            </div>
            <div class="col-span-3">
              <label for="crud-form-1" class="form-label">Release Date</label>
              <input id="r_date" name="r_date" type="text" value="{{ $portfolio->r_date }}" placeholder="2nd January 2000" class="form-control w-full">
            </div>
            <div class="col-span-3">
              <label for="crud-form-1" class="form-label">Last Update</label>
              <input id="lu_date" name="lu_date" value="{{ $portfolio->lu_date }}" placeholder="30th January 2000" type="text" class="form-control w-full">
            </div>
            <div class="col-span-12">
              <label for="crud-form-1" class="form-label">Body</label>
              <textarea id="body" name="body" type="text" class="form-control w-full" placeholder="write your details...">{!! $portfolio->body !!}</textarea>
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Meta Description (String Limit: 250)</label>
              <textarea id="meta_description" name="meta_description" rows="4" type="text" class="form-control w-full" placeholder="meta description...">{{ $portfolio->meta_description }}</textarea>
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Keywords</label>
              <textarea id="crud-form-1" name="keywords" type="text" rows="4" class="form-control w-full" placeholder="meta keywords...">{{ $portfolio->keywords }}</textarea>
            </div>
            <div class="col-span-12">
              <img src="{{ asset('storage/' . $portfolio->image) }}" class="rounded-lg" id="image">
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
        
        
        