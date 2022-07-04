@section('title', 'New Blog')

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
      New Blog
  </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
  <div class="intro-y col-span-12">
      <!-- BEGIN: Form Layout -->
      <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="intro-y box p-5">
          <div class="grid grid-cols-12 gap-6">
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Title</label>
              <input id="title" required name="title" type="text" class="form-control w-full" placeholder="blog title">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">URL Slug (Unique)</label>
              <input id="slug" required name="slug" type="text" class="form-control w-full" placeholder="url-slug">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Image (max:100KB)</label>
              <input type="file" onchange="imageChange(this)" name="image" class="form-control w-full">
          </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Category</label>
              <select data-placeholder="Select Category" class="tom-select w-full" required name="category_id[]" multiple>
                <option disabled>Select Category</option>
                @foreach ($categories as $item)
                  <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
            </div>
            <div class="col-span-12">
              <label for="crud-form-1" class="form-label">Body</label>
              <textarea id="body" name="body" type="text" class="form-control w-full" placeholder="write your blog..."></textarea>
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Meta Description (String Limit: 250)</label>
              <textarea id="meta_description" rows="4" name="meta_description" type="text" class="form-control w-full" placeholder="meta description..."></textarea>
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Keywords</label>
              <textarea id="crud-form-1" rows="4" name="keywords" type="text" class="form-control w-full" placeholder="meta keywords..."></textarea>
            </div>
            <div class="col-span-12">
              <img src="" class="rounded-lg" id="image">
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

<script>
  function delay(callback, ms) {
      var timer = 0;
      return function() {
          var context = this, args = arguments;
          clearTimeout(timer);
          timer = setTimeout(function () {
          callback.apply(context, args);
          }, ms || 0);
      };
  }

  $('#title').keyup(delay(function(e) {
      $.get('{{ route('title.slug') }}',
          { 'title': $(this).val() },
          function(data) {
              $('#slug').val(data.slug);
          }
      );
  }, 200));

</script>

@endsection
        
        
        