@section('title', 'Edit Hero Slogan')

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
      Edit Testimonial
  </h2>
</div>

<div class="grid grid-cols-12 gap-6 mt-5">
  <div class="intro-y col-span-12">
      <!-- BEGIN: Form Layout -->

      <form action="{{ route('admin.update.testimonial', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="intro-y box p-5">
          <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12">
              <label for="crud-form-1" class="form-label">Client Name</label>
              <input id="crud-form-1" name="client_name" value="{{ $testimonial->client_name }}" type="text" class="form-control w-full" placeholder="Jon Doe" required>
            </div>
            <div class="col-span-12">
              <label for="crud-form-1" class="form-label">Client Review</label>
              <textarea id="crud-form-1" name="review" type="text" class="form-control w-full" placeholder="client review...">{{ $testimonial->review }}</textarea>
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

@endsection
        
        
        