@section('title', $portfolio->title . ' - Portfolio of Erudience IT')
@section('meta-title', $portfolio->title . ' - Portfolio of Erudience IT')
@section('meta-description', $portfolio->meta_description)
@section('meta-keywords', $portfolio->keywords)
@section('og-title', $portfolio->title . ' - Portfolio of Erudience IT')
@section('og-description', $portfolio->meta_description)
@section('tw-title', $portfolio->title . ' - Portfolio of Erudience IT')
@section('tw-description', $portfolio->meta_description)
@section('meta-image', asset('storage/'.$portfolio->image))
@section('og-image', asset('storage/'.$portfolio->image))
@section('tw-image', asset('storage/'.$portfolio->image))

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
  <div class="scroll-menu">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8 col-md-6 d-md-block d-none">
          <ul class="product-details-menu">
            <li class="active open">
              <a href="javscript:(0)">Overview</a>
            </li>
            <li class="">
              <a href="javscript:(0)">Support</a>
            </li>
            <li class="">
              <a href="javscript:(0)">Addons</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="btn--group justify-content-md-end justify-content-center">
          @if($portfolio->demo_link)
            <a href="{{ $portfolio->demo_link }}" target="_blank" class="btn btn-sm btn--base py-2 px-3">
              <i class="las la-desktop"></i> Live Preview </a>
          @endif
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="product-details-top">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-8">
          <h1 class="product-details-title">{{ $portfolio->title }}</h1>
        </div>
        <div class="col-lg-4 mt-lg-0 mt-2">
          <ul class="product-details-meta text-lg-end">
            <li>
              <ul class="ratings d-inline-flex align-items-center">
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
              <span>5.00</span>
            </li>
          </ul>
        </div>
      </div>
      <ul class="product-details-menu mt-lg-0 mt-3">
        <li class="active open">
          <a href="javscript:(0)">Overview</a>
        </li>
        <li class="">
          <a href="javscript:(0)">Reviews</a>
        </li>
        <li class="">
          <a href="javscript:(0)">Support</a>
        </li>
        <li class="">
          <a href="javscript:(0)">Addons</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="product-details-main pb-100">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-8 pe-lg-4">
          <div class="product-details-thumb-area">
            <div class="product-details-thumb">
              <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}" class="w-100">
            </div>
            <div class="product-details-thumb-bottom d-flex flex-wrap align-items-center justify-content-md-between justify-content-center mt-3">
              <div class="btn--group style--two justify-content-md-start justify-content-center">
                <a href="{{ $portfolio->demo_link }}" target="_blank" class="btn btn-sm btn--base py-2 px-3">
                  <i class="las la-desktop"></i> Live Preview </a>
              </div>
              <div class="right">
                <ul class="product-share d-flex flex-wrap align-items-center justify-content-md-end justify-content-center">
                  <li class="caption">Share</li>
                @php
                    $shares = App\Models\Share\SocialShare::where('status', 1)->get();
                @endphp
                @foreach($shares as $item)
                  <li data-bs-toggle="tooltip" data-placement="top" title="{{ $item->title }}">
                    <a href="{{ $item->link_code . $portfolio->path() }}" target="_blank">
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
              {!! $portfolio->body !!}
            </div>
             <ul class="post-share d-flex flex-wrap align-items-center justify-content-center mt-4">
              <li class="caption">Share : </li>
            @foreach($shares as $item)
              <li data-bs-toggle="tooltip" data-placement="top" title="Facebook">
                <a href="{{ $item->link_code . $portfolio->path() }}" target="_blank">
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
            <div class="d-flex flex-wrap align-items-center justify-content-between">
              <div class="product-price-title text--dark">
                <span class="selected-title">{{ $portfolio->client }}</span>
              </div>
              <div class="product-price text--dark"> {{ $portfolio->price }}
              </div>
            </div>
          </div>
          <div class="product-details-widget">
            <ul class="product-details-info-list">
              <li>
                <div class="product-item-date">
                  <h6 class="title">First release</h6>
                  <p>{{ $portfolio->r_date }}</p>
                </div>
                <div class="product-item-date">
                  <h6 class="title">Last update</h6>
                  <p>{{ $portfolio->lu_date }}</p>
                </div>
              </li>
              <li>
                <h6 class="title">Software Version</h6>
                <p>{{ $portfolio->version }}</p>
              </li>
              <li>
                <h6 class="title">Software Technology</h6>
                <p>{{ $portfolio->technology }}</p>
              </li>
            </ul>
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


