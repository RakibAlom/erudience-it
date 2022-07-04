@section('title', 'Edit Skill Brand Logo')

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
      Edit Brand Logo
  </h2>
</div>

<div class="grid grid-cols-12 gap-6 mt-5">
  <div class="intro-y col-span-12">
      <!-- BEGIN: Form Layout -->

      <form action="{{ route('admin.gallery.update.skill-brand', $logo->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="intro-y box p-5">
          <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12">
              <label for="crud-form-1" class="form-label">Skill Brand Name</label>
              <input id="crud-form-1" name="name" value="{{ $logo->name }}" type="text" required class="form-control w-full" placeholder="brand name">
            </div>
            <div class="col-span-12">
              <label for="crud-form-1" class="form-label">LOGO (Max:200KB/160x60)</label>
              <input type="file" onchange="logoChange(this)" name="logo" class="form-control w-full">
            @if($logo->logo)
                <input type="hidden" name="old_logo" value="{{ $logo->logo }}">
                <img class="img-thumbnail mt-4" src="{{ asset('storage/'. $logo->logo) }}" id="logo" style="height: 120px;">
              @else
                  <img class="mt-4" src="" id="logo" style="height: 120px;">
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
  function logoChange(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#logo')
            .attr('src', e.target.result)
            .attr("class","img-thumbnail mt-4")

        };
        reader.readAsDataURL(input.files[0]);
    }
  }
</script>
@endsection
        
        
        