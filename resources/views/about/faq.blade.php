@section('title', 'Frequently Asked Question - ErudienceIT')
@section('meta-title', 'Frequently Asked Question - ErudienceIT')
@section('meta-description', $g_info->description)
@section('meta-keywords', $g_info->keywords)
@section('og-title', 'Frequently Asked Question - ErudienceIT')
@section('og-description', $g_info->description)
@section('tw-title', 'Frequently Asked Question - ErudienceIT')
@section('tw-description', $g_info->description)
@section('meta-image', asset('storage/'.$g_info->cover_image))
@section('og-image', asset('storage/'.$g_info->cover_image))
@section('tw-image', asset('storage/'.$g_info->cover_image))

@extends('layouts.app')

@section('content')
<div class="main-wrapper">
  <section class="inner-hero bg_img" style="background-image: url('{{ asset('storage/' . $g_bgmedia->default_bg) }}');">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2 class="inner-hero__title">Frequently Asked Questions</h2>
          <p>Here we added a few answers to frequently asked questions by our clients. if you want to know something is not listed here, just contact us.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-100 pb-100 section--bg">
    <div class="container">
      <div class="accordion custom--accordion faq-area" id="faqAccordion">
      @foreach($faqs as $item)
        <div class="accordion-item">
          <h2 class="accordion-header" id="faq_{{ $item->id }}">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $item->id }}" aria-expanded="false" aria-controls="collapse{{ $item->id }}">{{ $item->question }}</button>
          </h2>
          <div id="collapse{{ $item->id }}" class="accordion-collapse collapse" aria-labelledby="faq_{{ $item->id }}" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              <p> 
                {!! $item->answer !!}  
              </p>
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