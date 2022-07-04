@section('title', 'Edit Category - Blog')

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
      Edut Category - Blog
  </h2>
</div>

<div class="grid grid-cols-12 gap-6 mt-5">
  <div class="intro-y col-span-12">
      <!-- BEGIN: Form Layout -->

      <form action="{{ route('admin.blog.update-category', $category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="intro-y box p-5">
          <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12">
              <label for="crud-form-1" class="form-label">Category Name</label>
              <input id="name" name="name" required value="{{ $category->name }}" type="text" class="form-control w-full" placeholder="category name">
            </div>
            <div class="col-span-12">
                <label for="crud-form-1" class="form-label">URL Slug (Unique)</label>
                <input id="slug" name="slug" required value="{{ $category->slug }}" type="text" class="form-control w-full" placeholder="url slug">
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
        
        
        