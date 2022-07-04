@section('title', 'Blog - Erudience IT')
@section('meta-title', 'Blog - Erudience IT')
@section('meta-description', $g_info->description)
@section('meta-keywords', $g_info->keywords)
@section('og-title','Blog - Erudience IT')
@section('og-description', $g_info->description)
@section('tw-title', 'Blog - Erudience IT')
@section('tw-description', $g_info->description)
@section('meta-image', asset('storage/'.$g_info->cover_image))
@section('og-image', asset('storage/'.$g_info->cover_image))
@section('tw-image', asset('storage/'.$g_info->cover_image))

@extends('layouts.app')

@section('content')
<div class="main-wrapper">
  <section class="inner-hero bg_img" style="background-image: url('{{ asset('storage/' . $g_bgmedia->blog_bg) }}');">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2 class="inner-hero__title">Our Blogs</h2>
          <p>Our offers, innovations, and the latest updates of our team are posted here. Read our latest announcements to know what we are doing. We also post some technology related article as well.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-100 pb-100">
    <div class="container">
      <div class="row justify-content-center gy-4">
      @foreach($blogs as $item)
        <div class="col-lg-4 col-md-6">
          <div class="blog-post h-100">
            <div class="blog-post__thumb">
              <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-100">
            </div>
            <div class="blog-post__content">
              <p class="mb-2">
                <i class="las la-calendar text--base"></i> {{ $item->created_at->format('d F Y') }}
              </p>
              <h3 class="blog-post__title">
                <a href="{{ $item->path() }}">{{ $item->title }}</a>
              </h3>
              <p class="blog-post__description mt-3">
                {!! Str::words($item->body, 25, '...') !!}
              </p>
              <a href="{{ $item->path() }}" class="btn btn-sm btn--base mt-3">Read More</a>
            </div>
          </div>
        </div>
      @endforeach
      </div>

      {{ $blogs->links('vendor.pagination.default') }}

    </div>
  </section>
</div>
@endsection

@section('js')

@endsection


