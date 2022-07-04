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
    @if ($bgmedia)

    <form action="{{ route('admin.update.background-media') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="intro-y box p-5">
        <div class="grid grid-cols-12 gap-6">
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Hero BG (Video)</label>
            <input type="file" name="hero_bg_video" class="form-control w-full">
            <input type="hidden" name="old_hero_bg_video" value="{{ $bgmedia->hero_bg_video }}">
          </div>
          <div class="col-span-3">
            <label for="crud-form-1" class="form-label">Admin Background</label>
            <select id="crud-form-1" name="bg_mood"  class="form-control w-full">
              <option disabled selected>select mood</option>
              <option value="0">Light</option>
              <option value="1">Dark</option>
            </select>
          </div>
          <div class="col-span-3">
            <label for="crud-form-1" class="form-label">Editor</label>
            <select id="crud-form-1" name="editor"  class="form-control w-full">
              <option disabled selected>select editor</option>
              <option value="tinymce">TinyMCE</option>
              <option value="ckeditor4">CKEDITOR-4</option>
            </select>
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Hero BG</label>
            <input type="file" name="hero_bg_image" class="form-control w-full">
                <input type="hidden" name="old_hero_bg_image" value="{{ $bgmedia->hero_bg_image }}">
                <img class="img-thumbnail mt-4" src="{{ asset('storage/'.$bgmedia->hero_bg_image) }}" style="height: 120px;">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Achievement BG</label>
            <input type="file" name="achievement_bg" class="form-control w-full">
                <input type="hidden" name="old_achievement_bg" value="{{ $bgmedia->achievement_bg }}">
                <img class="img-thumbnail mt-4" src="{{ asset('storage/'.$bgmedia->achievement_bg) }}" style="height: 120px;">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Testimonial BG</label>
            <input type="file" name="testimonial_bg" class="form-control w-full">
                <input type="hidden" name="old_testimonial_bg" value="{{ $bgmedia->testimonial_bg }}">
                <img class="img-thumbnail mt-4" src="{{ asset('storage/'.$bgmedia->testimonial_bg) }}" style="height: 120px;">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Marketplace BG</label>
            <input type="file" name="marketplace_bg" class="form-control w-full">
                <input type="hidden" name="old_marketplace_bg" value="{{ $bgmedia->marketplace_bg }}">
                <img class="img-thumbnail mt-4" src="{{ asset('storage/'.$bgmedia->marketplace_bg) }}" style="height: 120px;">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Product BG</label>
            <input type="file" name="products_bg" class="form-control w-full">
                <input type="hidden" name="old_products_bg" value="{{ $bgmedia->products_bg }}">
                <img class="img-thumbnail mt-4" src="{{ asset('storage/'.$bgmedia->products_bg) }}" style="height: 120px;">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">About BG</label>
            <input type="file" name="about_bg" class="form-control w-full">
                <input type="hidden" name="old_about_bg" value="{{ $bgmedia->about_bg }}">
                <img class="img-thumbnail mt-4" src="{{ asset('storage/'.$bgmedia->about_bg) }}" style="height: 120px;">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Blog BG</label>
            <input type="file" name="blog_bg" class="form-control w-full">
                <input type="hidden" name="old_blog_bg" value="{{ $bgmedia->blog_bg }}">
                <img class="img-thumbnail mt-4" src="{{ asset('storage/'.$bgmedia->blog_bg) }}" style="height: 120px;">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Hosting BG</label>
            <input type="file" name="hosting_bg" class="form-control w-full">
                <input type="hidden" name="old_hosting_bg" value="{{ $bgmedia->hosting_bg }}">
                <img class="img-thumbnail mt-4" src="{{ asset('storage/'.$bgmedia->hosting_bg) }}" style="height: 120px;">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Service BG</label>
            <input type="file" name="services_bg" class="form-control w-full">
                <input type="hidden" name="old_services_bg" value="{{ $bgmedia->services_bg }}">
                <img class="img-thumbnail mt-4" src="{{ asset('storage/'.$bgmedia->services_bg) }}" style="height: 120px;">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Contact BG</label>
            <input type="file" name="contact_bg" class="form-control w-full">
                <input type="hidden" name="old_contact_bg" value="{{ $bgmedia->contact_bg }}">
                <img class="img-thumbnail mt-4" src="{{ asset('storage/'.$bgmedia->contact_bg) }}" style="height: 120px;">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">User BG</label>
            <input type="file" name="user_bg" class="form-control w-full">
                <input type="hidden" name="old_user_bg" value="{{ $bgmedia->user_bg }}">
                <img class="img-thumbnail mt-4" src="{{ asset('storage/'.$bgmedia->user_bg) }}" style="height: 120px;">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Default BG</label>
            <input type="file" name="default_bg" class="form-control w-full">
                <input type="hidden" name="old_default_bg" value="{{ $bgmedia->default_bg }}">
                <img class="img-thumbnail mt-4" src="{{ asset('storage/'.$bgmedia->default_bg) }}" style="height: 120px;">
          </div>

        </div>
        
        <div class="text-right mt-5">
            <button type="submit" class="btn btn-primary w-24">Save</button>
        </div>
      </div>
    </form>
      
    @else

      <form action="{{ route('admin.store.background-media') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="intro-y box p-5">
          <div class="grid grid-cols-12 gap-6">
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Hero BG (Video)</label>
              <input type="file" name="hero_bg_video" class="form-control w-full">
              <input type="hidden" name="old_hero_bg_video" value="{{ $bgmedia->hero_bg_video }}">
            </div>
            <div class="col-span-3">
              <label for="crud-form-1" class="form-label">Admin Background Mood</label>
              <select id="crud-form-1" name="bg_mood"  class="form-control w-full">
                <option value="">select mood</option>
                <option value="0">Light</option>
                <option value="1">Dark</option>
              </select>
            </div>
            
            <div class="col-span-3">
              <label for="crud-form-1" class="form-label">Editor</label>
              <select id="crud-form-1" name="editor"  class="form-control w-full">
                <option disabled selected>select editor</option>
                <option value="tinymce">TinyMCE</option>
                <option value="ckeditor4">CKEDITOR-4</option>
              </select>
            </div>
            <div class="col-span-6">
                <label for="crud-form-1" class="form-label">Hero BG</label>
                <input type="file" name="hero_bg_image" class="form-control w-full">
            </div>
                <div class="col-span-6">
                  <label for="crud-form-1" class="form-label"></label>
                  <input type="file" name="achievement_bg" class="form-control w-full">
                </div>
                <div class="col-span-6">
                  <label for="crud-form-1" class="form-label"></label>
                  <input type="file" name="testimonial_bg" class="form-control w-full">
                </div>
                <div class="col-span-6">
                  <label for="crud-form-1" class="form-label"></label>
                  <input type="file" name="marketplace_bg" class="form-control w-full">
                </div>
                <div class="col-span-6">
                  <label for="crud-form-1" class="form-label"></label>
                  <input type="file" name="products_bg" class="form-control w-full">
              </div>
              <div class="col-span-6">
                  <label for="crud-form-1" class="form-label"></label>
                  <input type="file" name="about_bg" class="form-control w-full">
              </div>
              <div class="col-span-6">
                <label for="crud-form-1" class="form-label"></label>
                <input type="file" name="blog_bg" class="form-control w-full">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label"></label>
              <input type="file" name="hosting_bg" class="form-control w-full">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label"></label>
              <input type="file" name="services_bg" class="form-control w-full">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label"></label>
              <input type="file" name="contact_bg" class="form-control w-full">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label"></label>
              <input type="file" name="user_bg" class="form-control w-full">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label"></label>
              <input type="file" name="default_bg" class="form-control w-full">
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

@endsection
        
        
        