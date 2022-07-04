@section('title', $g_info->title)
@section('meta-title', $g_info->title)
@section('meta-description', $g_info->description)
@section('meta-keywords', $g_info->keywords)
@section('og-title', $g_info->title)
@section('og-description', $g_info->description)
@section('tw-title', $g_info->title)
@section('tw-description', $g_info->title)
@section('meta-image', asset('storage/'.$g_info->cover_image))
@section('og-image', asset('storage/'.$g_info->cover_image))
@section('tw-image', asset('storage/'.$g_info->cover_image))

@extends('layouts.app')
@section('content')
<div class="main-wrapper">
   <section class="hero bg_img">
      <video playsinline autoplay muted loop poster="{{ asset('storage/' . $g_bgmedia->hero_bg_image) }}">
         <source src="{{ asset('storage/' . $g_bgmedia->hero_bg_video) }}" type="video/webm">
      </video>
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
               <h1 class="hero__title text-white wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">{{ $g_info->hero_title }}</h1>
            </div>
         </div>
      </div>
    
    @if ($slogans)
      <div class="hero__bottom">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-12">
                  <div class="hero__content-area hero__content-slider">
                     @foreach ($slogans as $item)
                     <div class="single-slide">
                        <div class="row align-items-center justify-content-between">
                           <div class="col-lg-5">
                              <h2 class="title text-white text-lg-end text-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.3s">{{ $item->slogan_title }}</h2>
                           </div>
                           <div class="col-lg-6 mt-lg-0 mt-4">
                              <p class="text-white description text-lg-start text-center wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.7s">{!! $item->slogan_description !!}</p>
                           </div>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
      </div>
    @endif

   </section>

  @if($intro)
   <section class="pt-100 pb-100">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-xxl-7 col-lg-8 col-md-11">
               <div class="section-header text-center">
                  <h2 class="section-title wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">{{ $intro->intro_title }}</h2>
                  <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">{!! $intro->intro_sub_title !!}</p>
               </div>
            </div>
         </div>
         <div class="row align-items-center wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s">
            <div class="col-lg-3">
               <ul class="choose-us-list">
                  <li>{{ $intro->vlist_1 }}</li>
                  <li>{{ $intro->vlist_2 }}</li>
                  <li>{{ $intro->vlist_3 }}</li>
               </ul>
            </div>
            <div class="col-lg-6">
               <div class="choose-thumb position-relative z-index-2">
                  <img src="{{ asset('storage/' . $intro->video_thumbnail) }}" alt="{{ $intro->intro_title }}" class="obj-fit w-100">
                  <a href="{{ $intro->video_link }}" data-rel="lightcase:myCollection" class="video-button d-flex flex-wrap justify-content-center align-items-center">
                  <i class="las la-play"></i>
                  </a>
               </div>
            </div>
            <div class="col-lg-3">
               <ul class="choose-us-list style--two text-lg-end">
                  <li>{{ $intro->vlist_4 }}</li>
                  <li>{{ $intro->vlist_5 }}</li>
                  <li>{{ $intro->vlist_6 }}</li>
               </ul>
            </div>
         </div>
      </div>
   </section>
  @endif

   {{-- <section class="pt-100 pb-100 section--bg2">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-xxl-7 col-lg-8 col-md-11">
               <div class="section-header text-center">
                  <h2 class="section-title wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">Featured Items</h2>
                  <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">Items with the current trends, special features, and something unique are here. In one word our best items are listed here.</p>
               </div>
            </div>
         </div>
         <div class="featured-items">
            <div class="single-slide">
               <div class="row justify-content-center gy-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s">
                  <div class="col-xl-12 col-lg-10">
                     <div class="featured-product">
                        <div class="featured-product__thumb">
                           <img src="https://thesoftking.com/assets/product/upload/cover/6210bdc51c4bf1645264325.png" class="w-100" alt="image">
                        </div>
                        <div class="featured-product__content">
                           <h3 class="title">
                              <a href="https://thesoftking.com/item/rockhyip-complete-hyip-investment-system/482">RockHYIP - Complete HYIP Investment System</a>
                           </h3>
                           <p class=" featured-product__details">Are you looking for Complete, Secure, Responsive, Unique and Inovative HYIP Investment Script? RockHYIP is here to fullfill all your requirements. HYIP script which meets all your hyip and investment business needs. All-in-one Solution For Start your own investment program ! Our scripts are developed by our in-house Developers. We always produce secure, reliable, efficient and scalable script. We...</p>
                           <div class="row align-items-center mt-4">
                              <div class="col-sm-8 order-sm-1 order-2">
                                 <div class="btn--group">
                                    <a href="https://demo.thesoftking.com/rockhyip/" target="_blank" class="btn btn-md btn--base">Live Demo</a>
                                    <a href="https://thesoftking.com/item/rockhyip-complete-hyip-investment-system/482" class="btn btn-md btn-outline--base">View Details</a>
                                 </div>
                              </div>
                              <div class="col-sm-4 order-sm-2 order-1 text-sm-end mb-md-0 mb-3">
                                 <h4 class="featured-product__price text--base">$199.00</h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="single-slide">
               <div class="row justify-content-center gy-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s">
                  <div class="col-xl-12 col-lg-10">
                     <div class="featured-product">
                        <div class="featured-product__thumb">
                           <img src="https://thesoftking.com/assets/product/upload/cover/6210bdc51c4bf1645264325.png" class="w-100" alt="image">
                        </div>
                        <div class="featured-product__content">
                           <h3 class="title">
                              <a href="https://thesoftking.com/item/rockhyip-complete-hyip-investment-system/482">RockHYIP - Complete HYIP Investment System</a>
                           </h3>
                           <p class=" featured-product__details">Are you looking for Complete, Secure, Responsive, Unique and Inovative HYIP Investment Script? RockHYIP is here to fullfill all your requirements. HYIP script which meets all your hyip and investment business needs. All-in-one Solution For Start your own investment program ! Our scripts are developed by our in-house Developers. We always produce secure, reliable, efficient and scalable script. We...</p>
                           <div class="row align-items-center mt-4">
                              <div class="col-sm-8 order-sm-1 order-2">
                                 <div class="btn--group">
                                    <a href="https://demo.thesoftking.com/rockhyip/" target="_blank" class="btn btn-md btn--base">Live Demo</a>
                                    <a href="https://thesoftking.com/item/rockhyip-complete-hyip-investment-system/482" class="btn btn-md btn-outline--base">View Details</a>
                                 </div>
                              </div>
                              <div class="col-sm-4 order-sm-2 order-1 text-sm-end mb-md-0 mb-3">
                                 <h4 class="featured-product__price text--base">$199.00</h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="pt-100 pb-100 overflow-hidden">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-xxl-7 col-lg-8 col-md-11">
               <div class="section-header text-center">
                  <h2 class="section-title wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">Latest Products</h2>
                  <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">We are working on a daily basis to bring new, unique, standard, and trendy products. Check out the newest products from our awesome team.</p>
               </div>
            </div>
         </div>
         <div class="row justify-content-center gy-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s">
            <div class="col-lg-3 col-sm-6">
               <div class="product-card">
                  <div class="product-card__thumb">
                     <img src="https://thesoftking.com/assets/product/upload/cover/6209fc55404561644821589.png" alt="product image" class="w-100">
                  </div>
                  <div class="product-card__content">
                     <h4 class="product-card__title">
                        <a href="https://thesoftking.com/item/mineking-cloud-mining-platform/557"> MineKing - Cloud Mining Platform</a>
                     </h4>
                     <div class="d-flex flex-wrap justify-content-between align-items-center mt-3">
                        <ul class="product-card__rating d-flex align-items-center">
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
                        <div class="product-card__price text--base">$99.00</div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="product-card">
                  <div class="product-card__thumb">
                     <img src="https://thesoftking.com/assets/product/upload/cover/61fbf366e70d11643901798.png" alt="product image" class="w-100">
                  </div>
                  <div class="product-card__content">
                     <h4 class="product-card__title">
                        <a href="https://thesoftking.com/item/icoking-initial-coin-offering-platform/556"> ICOKing - Initial Coin Offering Platform</a>
                     </h4>
                     <div class="d-flex flex-wrap justify-content-between align-items-center mt-3">
                        <ul class="product-card__rating d-flex align-items-center">
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
                        <div class="product-card__price text--base">$99.00</div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="product-card">
                  <div class="product-card__thumb">
                     <img src="https://thesoftking.com/assets/product/upload/cover/61fbafd3e7b141643884499.png" alt="product image" class="w-100">
                  </div>
                  <div class="product-card__content">
                     <h4 class="product-card__title">
                        <a href="https://thesoftking.com/item/adsking-advertisement-network-platform/555"> AdsKing - Advertisement Network Platform</a>
                     </h4>
                     <div class="d-flex flex-wrap justify-content-between align-items-center mt-3">
                        <ul class="product-card__rating d-flex align-items-center">
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
                        <div class="product-card__price text--base">$99.00</div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="product-card">
                  <div class="product-card__thumb">
                     <img src="https://thesoftking.com/assets/product/upload/cover/61fa540fc4e3b1643795471.png" alt="product image" class="w-100">
                  </div>
                  <div class="product-card__content">
                     <h4 class="product-card__title">
                        <a href="https://thesoftking.com/item/ptcking-pay-per-click-platform/554"> PTCKing - Pay Per Click Platform</a>
                     </h4>
                     <div class="d-flex flex-wrap justify-content-between align-items-center mt-3">
                        <ul class="product-card__rating d-flex align-items-center">
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
                        <div class="product-card__price text--base">$99.00</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row mt-5">
            <div class="col-lg-12 text-center">
               <a href="https://thesoftking.com/products" class="btn btn--base">Explore Our Products</a>
            </div>
         </div>
      </div>
   </section> --}}

   <section class="pt-100 pb-100 dark--overlay bg_img" style="background-image: url('{{ asset('storage/'. $g_bgmedia->achievement_bg) }}')">
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
                  <h2 class="section-title wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">Supported By Humans</h2>
                  <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">We put special emphasis on customer support. Our dedicated support team is waiting to assist you. We always try our level best to do so.</p>
               </div>
            </div>
         </div>
         <div class="row gy-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
               <div class="human-support-card text-center">
                  <div class="human-support-card__amount">{{ $g_info->supported_staff }}</div>
                  <h4 class="human-support-card__title">Dedicated Support Staff</h4>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
               <div class="human-support-card text-center">
                  <div class="human-support-card__amount">{{ $g_info->service_time }}</div>
                  <h4 class="human-support-card__title">Working Pattern</h4>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s">
               <div class="human-support-card text-center">
                  <div class="human-support-card__amount">{{ $g_info->certificate }}</div>
                  <h4 class="human-support-card__title">Certificate</h4>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.9s">
               <div class="human-support-card text-center">
                  <div class="human-support-card__amount">{{ $g_info->daily_solution }}</div>
                  <h4 class="human-support-card__title">Avg. Daily Solution</h4>
               </div>
            </div>
         </div>
         <div class="row mt-3 gy-4">
            <div class="col-md-6 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.3s">
               <div class="cta-card">
                  <div class="cta-card__icon">
                     <i class="far fa-lightbulb"></i>
                  </div>
                  <div class="cta-card__content">
                     <h3 class="cta-card__title">Any Custom Idea?</h3>
                     <p>Any awesome idea needs to turn into reality? or any customization needed?</p>
                     <a href="{{ route('contact') }}" class="btn btn-outline--base">See A Meeting</a>
                  </div>
               </div>
            </div>
            <div class="col-md-6 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.5s">
               <div class="cta-card">
                  <div class="cta-card__icon">
                     <i class="far fa-life-ring"></i>
                  </div>
                  <div class="cta-card__content">
                     <h3 class="cta-card__title">Facing Technical Issue?</h3>
                     <p>Facing any technical dificulties with our products? Relax! We are here to assist you.</p>
                     <a href="{{ route('contact') }}" class="btn btn-outline--base">Get Support</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>


   <section class="pt-100 pb-100 bg_img dark--overlay" style="background-image: url('{{ asset('storage/' . $g_bgmedia->testimonial_bg) }}')">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-xxl-7 col-lg-8 col-md-11">
               <div class="section-header text-center">
                  <h2 class="section-title wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">What People Say</h2>
                  <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">We care about our clients and they do the same for us. Have a look below and see what our awesome clients say about their experience with us!</p>
               </div>
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-lg-8">
               <div class="testimonial-slider">
                @foreach($testimonials as $item)
                  <div class="single-slide">
                     <div class="testimonial-content">
                        <p class="text-white">{{ $item->review }}</p>
                        <h6 class="mt-3">{{ $item->client_name }}</h6>
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