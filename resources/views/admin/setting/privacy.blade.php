@section('title', 'Privacy Policy')

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
      Privacy Policy
  </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
  <div class="intro-y col-span-12">
      <!-- BEGIN: Form Layout -->
    @if ($privacy)

    <form action="{{ route('admin.setting.privacy.update') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="intro-y box p-5">
        <div class="grid grid-cols-12 gap-6">
          <div class="col-span-12">
            <label for="crud-form-1" class="form-label">Privacy Policy</label>
            <textarea id="body" value="" name="privacy" type="text" class="form-control w-full" placeholder="privacy-policy...">{{ $privacy->privacy }}</textarea>
          </div>

        </div>
        
        <div class="text-right mt-5">
            <button type="submit" class="btn btn-primary w-24">Update</button>
        </div>
      </div>
    </form>
      
    @else

    <form action="{{ route('admin.setting.privacy.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="intro-y box p-5">
          <div class="col-span-12">
            <label for="crud-form-1" class="form-label">Privacy Policy</label>
            <textarea id="body" value="" name="privacy" type="text" class="form-control w-full" placeholder="privacy policy..."></textarea>
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
@include('admin.layouts.include.editor')
@endsection
        
        
        