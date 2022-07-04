@section('title', 'Our Achievement - Erudience IT')
@section('meta-title', 'Our Achievement - Erudience IT')
@section('meta-description', $g_info->description)
@section('meta-keywords', $g_info->keywords)
@section('og-title','Our Achievement - Erudience IT')
@section('og-description', $g_info->description)
@section('tw-title', 'Our Achievement - Erudience IT')
@section('tw-description', $g_info->description)
@section('meta-image', asset('storage/'.$g_info->cover_image))
@section('og-image', asset('storage/'.$g_info->cover_image))
@section('tw-image', asset('storage/'.$g_info->cover_image))

@extends('layouts.app')

@section('content')
<div class="main-wrapper">
  <section class="inner-hero bg_img" style="background-image: url('{{ asset('storage/' . $g_bgmedia->about_bg) }}');">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2 class="inner-hero__title">Our Achievements</h2>
          <p>We try our level best to spread our works and products to all. Try to give something back to the community. We organize events and also join other events around us.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-100 pb-100">
    <div class="container">
      <div class="row">
        <div class="col-12">
        @foreach ($stories as $item)
          <div class="giving-card">
            <div class="giving-card__thumb">
              <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}">
            </div>
            <div class="giving-card__content">
              <div class="giving-card__content-inner">
                <div class="d-flex flex-wrap align-items-center">
                  <h2 class="title">{{ $item->title }}</h2>
                  <span class="caption">( {{ $item->caption }} )</span>
                </div>
                <p class="date">
                  <i class="las la-calendar"></i> {{ $item->created_at->format('F Y') }}
                </p>
                <p class="mt-4">
                  {!! $item->details !!}
                </p>
              </div>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

@section('js')

@endsection


