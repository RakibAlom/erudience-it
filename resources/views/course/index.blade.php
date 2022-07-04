@section('title', 'Course - Erudience IT')
@section('meta-title', 'Course - Erudience IT')
@section('meta-description', $g_info->description)
@section('meta-keywords', $g_info->keywords)
@section('og-title','Course - Erudience IT')
@section('og-description', $g_info->description)
@section('tw-title', 'Course - Erudience IT')
@section('tw-description', $g_info->description)
@section('meta-image', asset('storage/'.$g_info->cover_image))
@section('og-image', asset('storage/'.$g_info->cover_image))
@section('tw-image', asset('storage/'.$g_info->cover_image))

@extends('layouts.app')

@section('content')
<div class="main-wrapper">
  <section class="inner-hero bg_img" style="background-image: url('{{ asset('storage/' . $g_bgmedia->services_bg) }}');">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2 class="inner-hero__title">Our Course</h2>
          <p>Enroll our course about web application, graphic design, digital marketing and more. Find your desired course and start your skill gain from today.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-100 pb-100">
    <div class="container">
      <div class="row justify-content-center g-4">
      @if($courses->count() > 0)
      @foreach($courses as $item)
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="product-card-two">
            <div class="product-card-two__thumb">
              <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-100">
            </div>
            <div class="product-card-two__content">
              <h4 class="product-card-two__title">
                <a href="{{ $item->path() }}">{{ $item->title }}</a>
              </h4>
              <div class="d-flex align-items-center justify-content-between mt-3">
                <ul class="product-card-two__rating d-flex align-items-center">
                  <li>
                    <i class="las la-star"></i>
                  </li>
                  <li>
                    <i class="las la-star"></i>
                  </li>
                  <li>
                    <i class="las la-star"></i>
                  </li>
                  <li>
                    <i class="las la-star"></i>
                  </li>
                  <li>
                    <i class="las la-star"></i>
                  </li>
                </ul>
                <ul class="icon-list d-flex flex-wrap align-items-center justify-content-end">
                  <li data-bs-toggle="tooltip" data-bs-position="top" title="View Course">
                    <a href="{{ $item->path() }}" target="_blank">
                      <i class="las la-desktop"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="product-card-two__footer d-flex align-items-center justify-content-between">
              @php
                $category = $item->categorycourse->first() 
              @endphp
              <a href="#0" class="category-label d-flex flex-wrap align-items-center">{{ $category->name }}</a>
              @if ($item->discount)
                <span class="product-card-two__price">{{ $item->discount }}
                  <span class="product-card-two__price text-danger"><del>{{ $item->cost }}</del></span>
                </span>
              @else
                <span class="product-card-two__price">{{ $item->cost }}</span>
              @endif
            </div>
          </div>
      </div>
    @endforeach
    @else
      <h2 class="text-center">No items are here</h2>
    @endif

      {{ $courses->links('vendor.pagination.default') }}

    </div>
  </section>
</div>
@endsection

@section('js')

@endsection


