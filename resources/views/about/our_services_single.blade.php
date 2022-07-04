@section('title', $service->title)
@section('meta-title', $service->title)
@section('meta-description', $service->description)
@section('meta-keywords', $service->keywords)
@section('og-title',$service->title)
@section('og-description', $service->description)
@section('tw-title', $service->title)
@section('tw-description', $service->description)
@section('meta-image', asset('storage/'.$service->image))
@section('og-image', asset('storage/'.$service->image))
@section('tw-image', asset('storage/'.$service->image))

@extends('layouts.app')

@section('css')
  <style>
    .main-wrapper .content ul{
      list-style: inside !important;
      padding: 15px 20px;
    }
  </style>
@endsection

@section('content')
<div class="main-wrapper">
  <section class="inner-hero bg_img" style="background-image: url('{{ asset('storage/' . $g_bgmedia->services_bg) }}');">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2 class="inner-hero__title">{{ $service->title }}</h2>
          <p>{{ $service->slogan }} </p>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-100 pb-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 content">
          {!! $service->body !!}
        </div>
      </div>
    </div>
  </section>

  <section class="pt-100 pb-100 section--bg2">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xxl-7 col-lg-8 col-md-11">
          <div class="section-header text-center">
            <h2 class="section-title">Our Expertise</h2>
            <p>We are Team of Creative Designers & Developers. We Develop Digital Strategies, Products and Services. Our expertise are listed below.</p>
          </div>
        </div>
      </div>
      <div class="row gy-4">
      @foreach ($skills as $item)
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="skill-card">
            <div class="skill-card__icon">
              <i class="{{ $item->la_icon }}"></i>
            </div>
            <div class="skill-card__content">
              <h5 class="skill-card__title text--base">{{ $item->name }}</h5>
              <p class="mt-1 fs--14px">{{ $item->caption }}</p>
            </div>
          </div>
        </div>
      @endforeach
      </div>
    </div>
  </section>

  <section class="pt-100 pb-100">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-xxl-7 col-lg-8 col-md-11">
             <div class="section-header text-center">
                <h2 class="section-title wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">Latest Articles</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">Our offers, innovations, and the latest updates of our team are posted here. Read our latest announcements to know what we are doing. We also post some technology related article as well.</p>
             </div>
          </div>
       </div>

       <div class="row justify-content-center gy-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s">
        @foreach ($blogs as $item)
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
                   <p class="blog-post__description mt-3">{!! Str::words($item->body, 25, '...') !!}</p>
                   <a href="{{ $item->path() }}" class="btn btn-sm btn--base mt-3">Read More</a>
                </div>
             </div>
          </div>
        @endforeach

       </div>
    </div>
 </section>
</div>
@endsection

@section('js')

@endsection


