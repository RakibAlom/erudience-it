@section('title', 'Terms & Conditon - ErudienceIT')
@section('meta-title', 'Terms & Conditon - ErudienceIT')
@section('meta-description', $g_info->description)
@section('meta-keywords', $g_info->keywords)
@section('og-title', 'Terms & Conditon - ErudienceIT')
@section('og-description', $g_info->description)
@section('tw-title', 'Terms & Conditon - ErudienceIT')
@section('tw-description', $g_info->description)
@section('meta-image', asset('storage/'.$g_info->meta_img))
@section('og-image', asset('storage/'.$g_info->meta_img))
@section('tw-image', asset('storage/'.$g_info->meta_img))

@extends('layouts.app')

@section('css')
<style>
  .main-wrapper .container {
    margin-top: 1.75rem !important;
}
.main-wrapper .container h1{
    font-size: 2em !important;
}
.main-wrapper .container ul{
    list-style: unset !important;
    padding-left: 2.2rem;
}
.main-wrapper .container ol{
    list-style: auto !important;
    padding-left: 2.2rem;
}
</style>
@endsection

@section('content')
<div class="main-wrapper">
  <section class="inner-hero bg_img" style="background-image: url('{{ asset('storage/'.$g_bgmedia->default_bg) }}');">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2 class="inner-hero__title">Terms & Conditon</h2>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-100 pb-100">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-10">
          <div class="content-block">
            {!! $terms->terms !!}
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

@section('js')

@endsection