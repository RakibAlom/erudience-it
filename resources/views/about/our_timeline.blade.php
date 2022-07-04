@section('title', 'Our Timeline - Erudience IT')
@section('meta-title', 'Our Timeline - Erudience IT')
@section('meta-description', $g_info->description)
@section('meta-keywords', $g_info->keywords)
@section('og-title','Our Timeline - Erudience IT')
@section('og-description', $g_info->description)
@section('tw-title', 'Our Timeline - Erudience IT')
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
          <h2 class="inner-hero__title">Our Timeline</h2>
          <p>We started our journey in 2011. We had a hard situation at that time but we have a big dream. Check below how and where we are now.</p>
        </div>
      </div>
    </div>
  </section>
  <div class="pt-100 pb-100">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="timeline-wrapper">
            <span class="timeline-wrapper__label-top">Started in 2021</span>
            <span class="timeline-wrapper__label-bottom">Till Now</span>
          @foreach($timelines as $item)
            <div class="timeline-card">
              <span class="timeline-card__label">{{ $item->date }}</span>
              <div class="timeline-card__thumb">
                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}">
              </div>
              <div class="timeline-card__content text-center">
                <p>
                  {{ $item->details }}
                </p>
              </div>
            </div>
          @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')

@endsection


