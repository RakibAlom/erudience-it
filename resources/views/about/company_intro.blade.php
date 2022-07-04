@section('title', $about->meta_title)
@section('meta-title', $about->meta_title)
@section('meta-description', $about->meta_des)
@section('meta-keywords', $about->meta_keys)
@section('og-title', $about->meta_title)
@section('og-description', $about->meta_des)
@section('tw-title', $about->meta_title)
@section('tw-description', $about->meta_des)
@section('meta-image', asset('storage/'.$about->meta_img))
@section('og-image', asset('storage/'.$about->meta_img))
@section('tw-image', asset('storage/'.$about->meta_img))

@extends('layouts.app')
@section('content')
<div class="main-wrapper">
  <section class="inner-hero bg_img" style="background-image: url('{{ asset('storage/' . $g_bgmedia->about_bg) }}');">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2 class="inner-hero__title">{{ $about->hero_title }}</h2>
          <p>{{ $about->hero_sub_title }}</p>
          {{-- <a href="" class="btn btn-outline--base mt-xl-5 mt-4">Join Our Team</a> --}}
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-lg-12">
          <h5 class="text-white text-center mb-4">We're Involved with</h5>
          <div class="involved-slider">
          @foreach($brands as $item)
            <div class="single-slide">
              <div class="involved-item">
                <img src="{{ asset('storage/' . $item->logo) }}" alt="{{ $item->name }}">
              </div>
            </div>
          @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-100 pb-100">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xxl-7 col-lg-8 col-md-11">
          <div class="section-header text-center">
            <h2 class="section-title wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">{{ $about->intro_title }}</h2>
            <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">{!! $about->intro_sub_title !!}</p>
          </div>
        </div>
      </div>
      <div class="row align-items-center wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s">
        <div class="col-lg-3">
          <ul class="choose-us-list">
            <li>{{ $about->vlist_1 }}</li>
            <li>{{ $about->vlist_2 }}</li>
            <li>{{ $about->vlist_3 }}</li>
          </ul>
        </div>
        <div class="col-lg-6">
          <div class="choose-thumb position-relative z-index-2">
            <img src="{{ asset('storage/' . $about->video_thumbnail) }}" alt="{{ $about->intro_title }}" class="obj-fit w-100">
            <a href="{{ $about->video_link }}" data-rel="lightcase:myCollection" class="video-button d-flex flex-wrap justify-content-center align-items-center">
              <i class="las la-play"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-3">
          <ul class="choose-us-list style--two text-lg-end">
            <li>{{ $about->vlist_4 }}</li>
            <li>{{ $about->vlist_5 }}</li>
            <li>{{ $about->vlist_6 }}</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="pt-100 pb-100 dark--overlay bg_img" style="background-image: url('{{ asset('storage/' . $g_bgmedia->achievement_bg) }}')">
    <div class="container">
      <div class="row gy-4">
         <div class="col-lg-3 col-6">
            <div class="overview-item">
               <div class="overview-item__icon wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.3s">
                  <i class="fas fa-calendar-alt"></i>
                  <div class="overview-item__amount">{{ $g_info->year_experience }}</div>
               </div>
               <div class="overview-item__content wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                  <h4 class="overview-item__title text-white">Years Online</h4>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-6">
            <div class="overview-item">
               <div class="overview-item__icon wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.3s">
                  <i class="fas fa-code"></i>
                  <div class="overview-item__amount">{{ $g_info->unique_project }}</div>
               </div>
               <div class="overview-item__content wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                  <h4 class="overview-item__title text-white">Unique Items</h4>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-6">
            <div class="overview-item">
               <div class="overview-item__icon wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.3s">
                  <i class="fas fa-cart-plus"></i>
                  <div class="overview-item__amount">{{ $g_info->total_project }}</div>
               </div>
               <div class="overview-item__content wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                  <h4 class="overview-item__title text-white">Item Sold</h4>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-6">
            <div class="overview-item">
               <div class="overview-item__icon wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.3s">
                  <i class="fas fa-users"></i>
                  <div class="overview-item__amount">{{ $g_info->happy_clients }}</div>
               </div>
               <div class="overview-item__content wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                  <h4 class="overview-item__title text-white">Happy Clients</h4>
               </div>
            </div>
         </div>
      </div>
   </div>
  </section>

  <section class="pt-100 pb-100">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xxl-7 col-lg-8 col-md-11">
          <div class="section-header text-center">
            <h2 class="section-title">Our Working Environment</h2>
            <p>At Erudience, supporting our teammates is a core part of how we do business. You’ll have the opportunity to work with great people. A great working and learning environment.</p>
          </div>
        </div>
      </div>
      <div class="row gy-4">
      @foreach($galleries as $item)
        <div class="col-md-4">
          <div class="gallery-thumb">
            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}">
          </div>
        </div>
      @endforeach
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
<script>
  $('.involved-slider').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    autoplay: true,
    cssEase: 'cubic-bezier(0.645, 0.045, 0.355, 1.000)',
    speed: 1000,
    autoplaySpeed: 1000,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 5
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 4
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 2
        }
      }
    ]
  });
</script>

@endsection