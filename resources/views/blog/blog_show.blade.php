@section('title', $blog->title . ' - Erudience IT')
@section('meta-title', $blog->title . ' - Erudience IT')
@section('meta-description', $blog->meta_description)
@section('meta-keywords', $blog->keywords)
@section('og-title', $blog->title . ' - Erudience IT')
@section('og-description', $blog->meta_description)
@section('tw-title', $blog->title . ' - Erudience IT')
@section('tw-description', $blog->meta_description)
@section('meta-image', asset('storage/'.$blog->image))
@section('og-image', asset('storage/'.$blog->image))
@section('tw-image', asset('storage/'.$blog->image))

@extends('layouts.app')

@section('css')
<style>
  .product-details-main {
    margin-top: 1.75rem !important;
  }
  .post-meta {
    color: #656565 !important;
  }
  .product-details-content-box ul{
    list-style: unset !important;
    padding-left: 2.2rem;
  }
  .product-details-content-box ol{
    list-style: auto !important;
    padding-left: 2.2rem;
  }
  
    @media only screen and (min-width: 992px) {
      .product-details-more-btn {
        display: none;
      }
    }
</style>
@endsection

@section('content')
<div class="main-wrapper">
  <div class="product-details-top">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-8">
          <h1 class="product-details-title">{{ $blog->title }}</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="product-details-main pb-100">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-8 pe-lg-4">
          <div class="product-details-thumb-area">
            <div class="product-details-thumb">
              <img src="{{ asset('storage/'.$blog->image) }}" alt="{{ $blog->title }}" class="w-100">
            </div>
            <div class="product-details-thumb-bottom d-flex flex-wrap align-items-center justify-content-md-between justify-content-center mt-3">
              <div class="btn--group style--two justify-content-md-start justify-content-center">
                <ul class="post-meta d-flex flex-wrap align-items-center mt-2">
                  <li><i class="las la-calendar"></i> {{ $blog->created_at->format('d F Y') }}</li>
                  <li><i class="las la-eye"></i> {{ $blog->views }} views</li>
                </ul>
              </div>
              <div class="right">
                <ul class="product-share d-flex flex-wrap align-items-center justify-content-md-end justify-content-center">
                  <li class="caption">Share</li>
                @php
                    $shares = App\Models\Share\SocialShare::where('status', 1)->get();
                @endphp
                @foreach($shares as $item)
                  <li data-bs-toggle="tooltip" data-placement="top" title="{{ $item->title }}">
                    <a href="{{ $item->link_code . $blog->path() }}" target="_blank">
                      <i class="{{ $item->icon }}"></i>
                    </a>
                  </li>
                @endforeach
                </ul>
              </div>
            </div>
          </div>
          <div class="product-details-content">
            <div class="product-details-content-box"> 
              {!! $blog->body !!}
            </div>
            <ul class="post-share d-flex flex-wrap align-items-center justify-content-center mt-4">
              <li class="caption">Share : </li>
            @foreach($shares as $item)
              <li data-bs-toggle="tooltip" data-placement="top" title="Facebook">
                <a href="{{ $item->link_code . $blog->path() }}" target="_blank">
                  <i class="{{ $item->icon }}"></i>
                </a>
              </li>
            @endforeach
              
            </ul>
          </div>
          <div class="product-details-more-btn-area text-center">
              <button type="button" class="product-details-more-btn">
                <span class="more-text">Show More</span>
                <span class="less-text">Show Less</span>
              </button>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="product-details-widget position-relative" id="product-buy-widget">
            <div class="sidebar">
              <div class="blog-widget">
                <h4 class="blog-widget__title">Latest Articles</h4>
                @php
                    $blogs = App\Models\Blog\Blog::where('status', 1)->orderBy('id', 'desc')->limit(6)->get();
                @endphp
                @foreach($blogs as $item)
                  <div class="short-post">
                    <div class="thumb">
                      <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}">
                    </div>
                    <div class="content">
                      <h6 class="title">
                        <a href="{{ $item->path() }}">{{ $item->title }}</a>
                      </h6>
                      <span class="date">
                        <i class="las la-clock"></i> Posted : {{ $item->created_at->format('d F Y') }} </span>
                    </div>
                  </div>
                @endforeach
                </div>
              </div>
            </div>
            
            {{-- <div class="product-details-widget">
              <h6 class="title">Category</h6>
                <ul class="product-details-tags d-flex flex-wrap">

                @php
                    $categories = App\Models\Category\CategoryBlog::where('status', 1)->get();
                @endphp

                @foreach ($categories as $item)
                  <li>
                    <a href="" target="_blank">{{ $item->name }}</a>
                  </li>
                @endforeach
             </ul>
            </div> --}}

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
<script>
    'use strict';
    $(document).ready(function () {

      $('.product-details-more-btn').on('click', function(){
        $(this).toggleClass('active');
        $('.product-details-content').toggleClass('show-more');
      });

    });
</script>
@endsection


