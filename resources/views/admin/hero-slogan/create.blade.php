@section('title', 'Create Hero Slogan')

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
      Create Hero Slogan
  </h2>
</div>

<div class="grid grid-cols-12 gap-6 mt-5">
  <div class="intro-y col-span-12">
      <!-- BEGIN: Form Layout -->

      <form action="{{ route('admin.store.hero-slogan') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="intro-y box p-5">
          <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12">
              <label for="crud-form-1" class="form-label">Slogan Title</label>
              <input id="crud-form-1" name="slogan_title" type="text" class="form-control w-full" placeholder="slogan title">
            </div>
            <div class="col-span-12">
              <label for="crud-form-1" class="form-label">Slogan Description</label>
              <textarea id="crud-form-1" name="slogan_description" type="text" class="form-control w-full" placeholder="slogan details..."></textarea>
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
        
        
        