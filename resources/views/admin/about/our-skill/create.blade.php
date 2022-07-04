@section('title', 'New Skill')

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
      New Skill
  </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
  <div class="intro-y col-span-12">
      <!-- BEGIN: Form Layout -->
      <form action="{{ route('admin.about.our-skill.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="intro-y box p-5">
          <div class="grid grid-cols-12 gap-6">
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Name</label>
              <input id="name" required name="name" type="text" class="form-control w-full" placeholder="ex: laravel">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Caption</label>
              <input required name="caption" type="text" class="form-control w-full" placeholder="Best PHP framework in World">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Icon (<a class="text-green-600" href="https://icons8.com/line-awesome" target="_blank">line awesome</a>)</label>
              <input required name="la_icon" type="text" class="form-control w-full" placeholder="ex: lab la-laravel">
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

@endsection
        
        
        