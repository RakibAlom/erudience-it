@section('title', 'Information Setup - Erudience IT')

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
      Website Information
  </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
  <div class="intro-y col-span-12">
      <!-- BEGIN: Form Layout -->
    @if ($intro)

    <form action="{{ route('admin.about.company-intro.update') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="intro-y box p-5">
        <div class="grid grid-cols-12 gap-6">
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Page Hero Title</label>
            <input id="crud-form-1" value="{{ $intro->hero_title }}" name="hero_title" type="text" class="form-control w-full" placeholder="hero title">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Page Hero Sub-Title</label>
            <input id="crud-form-1" value="{{ $intro->hero_sub_title }}" name="hero_sub_title" type="text" class="form-control w-full" placeholder="hero sub title">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Intro Title</label>
            <input id="crud-form-1" value="{{ $intro->intro_title }}" name="intro_title" type="text" class="form-control w-full" placeholder="intro title">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Intro Sub-Title</label>
            <input id="crud-form-1" value="{{ $intro->intro_sub_title }}" name="intro_sub_title" type="text" class="form-control w-full" placeholder="intro sub title">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Video Embeded Link</label>
            <input id="crud-form-1" value="{{ $intro->video_link }}" type="text" class="form-control w-full" name="video_link" placeholder="yt video embeded link">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Choose Title 1st</label>
            <input id="crud-form-1" value="{{ $intro->vlist_1 }}" name="vlist_1" type="text" class="form-control w-full" placeholder="why you choose title 1st">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Choose Title 2nd</label>
            <input id="crud-form-1" value="{{ $intro->vlist_2 }}" name="vlist_2" type="text" class="form-control w-full" placeholder="why you choose title 2nd">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Choose Title 3rd</label>
            <input id="crud-form-1" value="{{ $intro->vlist_3 }}" name="vlist_3" type="text" class="form-control w-full" placeholder="why you choose title 3rd">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Choose Title 4th</label>
            <input id="crud-form-1" value="{{ $intro->vlist_4 }}" name="vlist_4" type="text" class="form-control w-full" placeholder="why you choose title 4th">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Choose Title 5th</label>
            <input id="crud-form-1" value="{{ $intro->vlist_5 }}" name="vlist_5" type="text" class="form-control w-full" placeholder="why you choose title 5th">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Choose Title 6th</label>
            <input id="crud-form-1" value="{{ $intro->vlist_6 }}" name="vlist_6" type="text" class="form-control w-full" placeholder="why you choose title 6th">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Meta Title</label>
            <input id="crud-form-1" value="{{ $intro->meta_title }}" name="meta_title" type="text" class="form-control w-full" placeholder="page meta title">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Meta Details</label>
            <textarea id="crud-form-1" name="meta_des" type="text" class="form-control w-full" placeholder="type about you...">{{ $intro->meta_des }}</textarea>
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Keywords</label>
            <textarea id="crud-form-1" value="" name="meta_keys" type="text" class="form-control w-full" placeholder="meta keywords...">{{ $intro->meta_keys }}</textarea>
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Video Thumbnail</label>
            <input type="file" onchange="videoThumb(this)" name="video_thumbnail" class="form-control w-full">
          @if($intro->video_thumbnail)
              <input type="hidden" name="old_video_thumbnail" value="{{ $intro->video_thumbnail }}">
              <img class="rounded-lg mt-4" src="{{ asset('storage/'.$intro->video_thumbnail) }}" id="video_thumbnail" style="height: 120px;">
          @else
              <img class="mt-4" src="" id="video_thumbnail" style="height: 120px;">
          @endif
        </div>
          <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Meta Image</label>
              <input type="file" onchange="metaImg(this)" name="meta_img" class="form-control w-full">
            @if($intro->meta_img)
                <input type="hidden" name="old_meta_img" value="{{ $intro->meta_img }}">
                <img class="rounded-lg mt-4" src="{{ asset('storage/'.$intro->meta_img) }}" id="meta_img" style="height: 120px;">
            @else
                <img class="mt-4" src="" id="meta_img" style="height: 120px;">
            @endif
          </div>

        </div>
        
        <div class="text-right mt-5">
            <button type="submit" class="btn btn-primary w-24">Save</button>
        </div>
      </div>
    </form>
      
    @else

    <form action="{{ route('admin.about.company-intro.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="intro-y box p-5">
        <div class="grid grid-cols-12 gap-6">
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Page Hero Title</label>
            <input id="crud-form-1" name="hero_title" type="text" class="form-control w-full" placeholder="hero title">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Page Hero Sub-Title</label>
            <input id="crud-form-1" name="hero_sub_title" type="text" class="form-control w-full" placeholder="hero sub title">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Intro Title</label>
            <input id="crud-form-1" name="intro_title" type="text" class="form-control w-full" placeholder="intro title">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Intro Sub-Title</label>
            <input id="crud-form-1" name="intro_sub_title" type="text" class="form-control w-full" placeholder="intro sub title">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Video Embeded Link</label>
            <input id="crud-form-1" type="text" class="form-control w-full" name="video_link" placeholder="yt video embeded link">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Choose Title 1st</label>
            <input id="crud-form-1" name="vlist_1" type="text" class="form-control w-full" placeholder="why you choose title 1st">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Choose Title 2nd</label>
            <input id="crud-form-1" name="vlist_2" type="text" class="form-control w-full" placeholder="why you choose title 2nd">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Choose Title 3rd</label>
            <input id="crud-form-1" name="vlist_3" type="text" class="form-control w-full" placeholder="why you choose title 3rd">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Choose Title 4th</label>
            <input id="crud-form-1" name="vlist_4" type="text" class="form-control w-full" placeholder="why you choose title 4th">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Choose Title 5th</label>
            <input id="crud-form-1" name="vlist_5" type="text" class="form-control w-full" placeholder="why you choose title 5th">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Choose Title 6th</label>
            <input id="crud-form-1" name="vlist_6" type="text" class="form-control w-full" placeholder="why you choose title 6th">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Meta Title</label>
            <input id="crud-form-1" name="meta_title" type="text" class="form-control w-full" placeholder="page meta title">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Meta Details</label>
            <textarea id="crud-form-1" name="meta_des" type="text" class="form-control w-full" placeholder="type about you..."></textarea>
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Keywords</label>
            <textarea id="crud-form-1" value="" name="meta_keys" type="text" class="form-control w-full" placeholder="meta keywords..."></textarea>
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Video Thumbnail</label>
            <input type="file" onchange="videoThumb(this)" name="video_thumbnail" class="form-control w-full">
              <img class="mt-4" src="" id="video_thumbnail" style="height: 120px;">
        </div>
          <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Meta Image</label>
              <input type="file" onchange="metaImg(this)" name="meta_img" class="form-control w-full">
              <img class="mt-4" src="" id="meta_img" style="height: 120px;">
          </div>

        </div>
        
        <div class="text-right mt-5">
            <button type="submit" class="btn btn-primary w-24">Save</button>
        </div>
      </div>
    </form>

    @endif
      <!-- END: Form Layout -->
  </div>
</div>

@endsection

@section('js')

<script>
    function videoThumb(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#video_thumbnail')
              .attr('src', e.target.result)
              .attr("class","rounded-lg mt-4")

          };
          reader.readAsDataURL(input.files[0]);
     	}
    }
    function metaImg(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#meta_img')
            .attr('src', e.target.result)
            .attr("class","rounded-lg mt-4")
        };
        reader.readAsDataURL(input.files[0]);
     	}
    }

</script>

@endsection
        
        
        