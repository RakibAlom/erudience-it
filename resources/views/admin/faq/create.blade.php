@section('title', 'New FAQ')

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
      New FAQ
  </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
  <div class="intro-y col-span-12">
      <!-- BEGIN: Form Layout -->
      <form action="{{ route('admin.faq.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="intro-y box p-5">
          <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12">
              <label for="crud-form-1" class="form-label">Question</label>
              <input id="question" required name="question" type="text" class="form-control w-full" placeholder="ex: Question">
            </div>
            <div class="col-span-12">
              <label for="crud-form-1" class="form-label">Answer</label>
              <textarea id="body" name="answer" type="text" class="form-control w-full" placeholder="type your answer..."></textarea>
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

@endsection
        
        
        