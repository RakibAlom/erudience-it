@section('title', 'Our Services - Erudience IT')
@section('meta-title', 'Our Services - Erudience IT')
@section('meta-description', $g_info->description)
@section('meta-keywords', $g_info->keywords)
@section('og-title','Our Services - Erudience IT')
@section('og-description', $g_info->description)
@section('tw-title', 'Our Services - Erudience IT')
@section('tw-description', $g_info->description)
@section('meta-image', asset('storage/'.$g_info->cover_image))
@section('og-image', asset('storage/'.$g_info->cover_image))
@section('tw-image', asset('storage/'.$g_info->cover_image))

@section('css')
<style>
    /* .service_content {
      -webkit-box-shadow: 2px 4px 6px #4FD3C4;
      -moz-box-shadow: 2px 4px 6px #4FD3C4;
      box-shadow: 2px 4px 6px #4FD3C4;
      -moz-border-radius: 10px;
      -webkit-border-radius: 10px;
      -khtml-border-radius: 10px;
      border-radius: 10px;
      padding: 30px 25px;
    } */
</style>
@endsection

@extends('layouts.app')

@section('content')
<div class="main-wrapper">
  <section class="inner-hero bg_img" style="background-image: url('{{ asset('storage/' . $g_bgmedia->services_bg) }}');">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2 class="inner-hero__title">Our Services</h2>
          <p>We are a software development firm based in Sylhet, Bangladesh. We are working with Web Applications, Website Audit, Mobile Apps, UI/UX and more...</p>
        </div>
      </div>
    </div>
  </section>
  <section>
  @foreach($services as $item)
    <div class="service-single pt-100 pb-100">
      <div class="container">
        <div class="row gy-4 align-items-center justify-content-between service_content">
          <div class="col-lg-6 service-single__content">
            <h2 class="title">{{ $item->title }}</h2>
            <p class="mt-3">
              {!! strip_tags(Str::words($item->body, 120, '...')) !!}
            </p>
            <a href="{{ $item->path() }}" class="btn btn-outline--base mt-4">Read More</a>
          </div>
          <div class="col-xl-5 col-lg-6 service-single__thumb">
            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}">
          </div>
        </div>
      </div>
    </div>
  @endforeach
  </section>
</div>
@endsection

@section('js')

@endsection


