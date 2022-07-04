@section('title', 'New Share')

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
      New Share
  </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
  <div class="intro-y col-span-12">
      <!-- BEGIN: Form Layout -->
      <form action="{{ route('admin.share.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="intro-y box p-5">
          <div class="grid grid-cols-12 gap-6">
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Title</label>
              <input id="title" required name="title" type="text" class="form-control w-full" placeholder="ex: facebook">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Share Code</label>
              <input required name="link_code" type="text" class="form-control w-full" placeholder="ex: https://www.facebook.com/sharer.php?u=">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Icon (<a class="text-green-600" href="https://icons8.com/line-awesome" target="_blank">line awesome</a>)</label>
              <input required name="icon" type="text" class="form-control w-full" placeholder="ex: lab la-facebook-f">
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
        
        
        