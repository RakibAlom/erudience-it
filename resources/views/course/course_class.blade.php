@section('title', $class->title . ' - ' . $course->title . ' - Course of Erudience IT')
@section('meta-title', $class->title . ' - ' . $course->title . ' - Course of Erudience IT')
@section('meta-description', $course->meta_description)
@section('meta-keywords', $course->keywords)
@section('og-title', $class->title . ' - ' . $course->title . ' - Course of Erudience IT')
@section('og-description', $course->meta_description)
@section('tw-title', $class->title . ' - ' . $course->title . ' - Course of Erudience IT')
@section('tw-description', $course->meta_description)
@section('meta-image', asset('storage/'.$course->image))
@section('og-image', asset('storage/'.$course->image))
@section('tw-image', asset('storage/'.$course->image))

@auth
  @php
      $user = App\Models\User::where('id', auth()->user()->id)->first();
  @endphp
@endauth

@extends('layouts.app')

@section('css')
<style>
  .product-details-main {
    margin-top: 1.75rem !important;
  }
  .post-meta {
    color: #656565 !important;
  }
  .product-details-main h1{
    font-size: 2em !important;
  }
  .product-details-content-box ul{
    list-style: unset !important;
  } 
  .product-details-content-box ol{
    list-style: auto !important;
  }
</style>
@endsection

@section('content')
<div class="main-wrapper">
  <div class="product-details-top">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-8">
          <h2 class="product-details-title">{{ $class->title }}</h2>
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
      </ul>
    </div>
  </div>
  <div class="product-details-main pb-100">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-8 pe-lg-4">
          <div class="product-details-thumb-area">
            <div class="product-details-thumb">
              <iframe class="w-100" height="480px" src="{{ $class->video_link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="product-details-thumb-bottom d-flex flex-wrap align-items-center justify-content-md-between justify-content-center mt-3">
              <div class="btn--group style--two justify-content-md-start justify-content-center">
                <ul class="post-meta d-flex flex-wrap align-items-center mt-2">
                  <li><i class="las la-calendar"></i> {{ $class->created_at->format('d F Y') }}</li>
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
                    <a href="{{ $item->link_code . $course->path() }}" target="_blank">
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
              {!! $course->details !!}
            </div>
          </div>
        </div>
        
      @auth
        @if($user->course)
        <div class="col-lg-4">
          <div class="product-details-widget position-relative" id="product-buy-widget">
            <div class="sidebar">
              <div class="blog-widget">
                <h4 class="blog-widget__title">{{ $course->title }} Class</h4>
                @php
                    $classes = App\Models\Course\CourseClass::where('course_id', $course->id)->get();
                    $count = 1;
                @endphp
                @foreach($classes as $item)
                  <div class="short-post">
                    <div class="content">
                      <h6 class="title">
                        <a href="{{ url('course/' . $course->slug . '/class/' . $item->title) }}" class="{{ (request()->segment(4) == $item->title) ? 'text-success' : '' }}">{{ $count++ }}. {{ $item->title }}</a>
                      </h6>
                      <span class="date">
                        <i class="las la-clock"></i> Duration: {{ $item->duration }} </span>
                    </div>
                  </div>
                @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>

        @else

        @endif

      @endauth

      </div>
    </div>
  </div>
</div>
@endsection

@section('js')

@endsection


