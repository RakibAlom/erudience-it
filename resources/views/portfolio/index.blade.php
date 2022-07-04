@section('title', 'Portfolio - Erudience IT')
@section('meta-title', 'Portfolio - Erudience IT')
@section('meta-description', $g_info->description)
@section('meta-keywords', $g_info->keywords)
@section('og-title','Portfolio - Erudience IT')
@section('og-description', $g_info->description)
@section('tw-title', 'Portfolio - Erudience IT')
@section('tw-description', $g_info->description)
@section('meta-image', asset('storage/'.$g_info->cover_image))
@section('og-image', asset('storage/'.$g_info->cover_image))
@section('tw-image', asset('storage/'.$g_info->cover_image))

@extends('layouts.app')

@section('content')
<div class="main-wrapper">
  <section class="inner-hero bg_img" style="background-image: url('{{ asset('storage/' . $g_bgmedia->marketplace_bg) }}');">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2 class="inner-hero__title">Our Portfolio</h2>
          <p>Buy Premium PHP Scripts, Laravel Scripts, HTML Templates, Graphics Elements and more. Find your desired scripts and start your website today.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-100 pb-100">
    <div class="container">
      <div class="row justify-content-center g-4">
      @if($portfolios->count() > 0)
      @foreach($portfolios as $item)
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
                  <li data-bs-toggle="tooltip" data-bs-position="top" title="Live Preview">
                    <a href="{{ $item->demo_link }}" target="_blank">
                      <i class="las la-desktop"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="product-card-two__footer d-flex align-items-center justify-content-between">
              @php
                $category = $item->categoryportfolio->first() 
              @endphp
              <a href="#0" class="category-label d-flex flex-wrap align-items-center">{{ $category->name }}</a>
              <span class="product-card-two__price">{{ $item->price }}</span>
            </div>
          </div>
      </div>
    @endforeach
    @else
      <h2 class="text-center">No items are here</h2>
    @endif

      {{ $portfolios->links('vendor.pagination.default') }}

    </div>
  </section>
</div>
@endsection

@section('js')

@endsection


