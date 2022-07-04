@section('title', $course->title . ' - Course of Erudience IT')
@section('meta-title', $course->title . ' - Course of Erudience IT')
@section('meta-description', $course->meta_description)
@section('meta-keywords', $course->keywords)
@section('og-title', $course->title . ' - Course of Erudience IT')
@section('og-description', $course->meta_description)
@section('tw-title', $course->title . ' - Course of Erudience IT')
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
          <h2 class="product-details-title">{{ $course->title }}</h2>
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
              <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->title }}" class="w-100">
            </div>
            <div class="product-details-thumb-bottom d-flex flex-wrap align-items-center justify-content-md-between justify-content-center mt-3">
              <div class="btn--group style--two justify-content-md-start justify-content-center">
                <ul class="post-meta d-flex flex-wrap align-items-center mt-2">
                  <li><i class="las la-calendar"></i> {{ $course->created_at->format('d F Y') }}</li>
                  <li><i class="las la-users"></i> {{ $course->courseuser->count() }} Students</li>
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
                        <a href="{{ url('course/' . $course->slug . '/class/' . $item->title) }}">{{ $count++ }}. {{ $item->title }}</a>
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
        <div class="col-lg-4">
          <div class="product-details-widget position-relative" id="product-buy-widget">
            
            <div class="d-flex flex-wrap align-items-center justify-content-between">
              <div class="product-price-title text--dark">
                <span class="selected-title"><b>Price</b></span>
              </div>
              <div class="product-price text--dark">
                <span class="curPrice"></span>
                @if ($course->discount)
                  <span class="curPrice">{{ $course->discount }}
                    <span class="curPrice text-danger"><del>{{ $course->cost }}</del></span>
                  </span>
                @else
                  <span class="curPrice">{{ $course->cost }}</span>
                @endif
              </div>
            </div>
            <div class="product-details-widget">
              <ul class="product-details-info-list">
                <li>
                  <div class="product-item-date">
                    <h6 class="title">Teacher</h6>
                    <p>: {{ $course->teacher }}</p>
                  </div>
                  <div class="product-item-date">
                    <h6 class="title">Duration</h6>
                    <p>: {{ $course->duration }}</p>
                  </div>
                  <div class="product-item-date">
                    <h6 class="title">First release</h6>
                    <p>: {{ $course->start_date }}</p>
                  </div>
                  <div class="product-item-date">
                    <h6 class="title">Last update</h6>
                    <p>: {{ $course->end_date }}</p>
                  </div>
                  <div class="product-item-date">
                    <h6 class="title">Category</h6>
                    <p>: 
                      @foreach($course->categorycourse as $item)
                        {{ $item->name }},
                      @endforeach
                    </p>
                  </div>
                </li>
              </ul>
            </div>

          @auth
            <a href="{{ route('course.enroll', $course->id) }}" class="btn btn--base w-100 mt-2" >Enroll Now </a>
          @else
            <a href="{{ route('login') }}" class="btn btn--base w-100 mt-2" >Enroll Now </a>
          @endauth

          </div>
        </div>
        @endif

      @else

        <div class="col-lg-4">
          <div class="product-details-widget position-relative" id="product-buy-widget">
            
            <div class="d-flex flex-wrap align-items-center justify-content-between">
              <div class="product-price-title text--dark">
                <span class="selected-title"><b>Price</b></span>
              </div>
              <div class="product-price text--dark">
                <span class="curPrice"></span>
                @if ($course->discount)
                  <span class="curPrice">{{ $course->discount }}
                    <span class="curPrice text-danger"><del>{{ $course->cost }}</del></span>
                  </span>
                @else
                  <span class="curPrice">{{ $course->cost }}</span>
                @endif
              </div>
            </div>
            <div class="product-details-widget">
              <ul class="product-details-info-list">
                <li>
                  <div class="product-item-date">
                    <h6 class="title">Teacher</h6>
                    <p>: {{ $course->teacher }}</p>
                  </div>
                  <div class="product-item-date">
                    <h6 class="title">Duration</h6>
                    <p>: {{ $course->duration }}</p>
                  </div>
                  <div class="product-item-date">
                    <h6 class="title">First release</h6>
                    <p>: {{ $course->start_date }}</p>
                  </div>
                  <div class="product-item-date">
                    <h6 class="title">Last update</h6>
                    <p>: {{ $course->end_date }}</p>
                  </div>
                  <div class="product-item-date">
                    <h6 class="title">Category</h6>
                    <p>: 
                      @foreach($course->categorycourse as $item)
                        {{ $item->name }},
                      @endforeach
                    </p>
                  </div>
                </li>
              </ul>
            </div>

          @auth
            <a href="{{ route('course.enroll', $course->id) }}" class="btn btn--base w-100 mt-2" >Enroll Now </a>
          @else
            <a href="{{ route('login') }}" class="btn btn--base w-100 mt-2" >Enroll Now </a>
          @endauth

          </div>
        </div>
      @endauth

      </div>
    </div>
  </div>
</div>
@endsection

@section('js')

@endsection


