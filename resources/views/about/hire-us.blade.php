@section('title', 'Hire Us - ' . $g_info->title)
@section('meta-title', 'Hire Us - ' . $g_info->title)
@section('meta-description', $g_info->meta_description)
@section('meta-keywords', $g_info->keywords)
@section('og-title', 'Hire Us - ' . $g_info->title)
@section('og-description', $g_info->meta_description)
@section('tw-title', 'Hire Us - ' . $g_info->title)
@section('tw-description', $g_info->meta_description)
@section('meta-image', asset('storage/'.$g_info->image))
@section('og-image', asset('storage/'.$g_info->image))
@section('tw-image', asset('storage/'.$g_info->image))

@auth
  @php
      $user = App\Models\User::where('id', auth()->user()->id)->first();
  @endphp
@endauth

@extends('layouts.app')

@section('css')

@endsection

@section('content')
<div class="main-wrapper">
  <section class="pt-100 pb-100 bg_img dark--overlay" style="background-image: url('{{ asset('storage/'. $g_bgmedia->contact_bg) }}');">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xxl-7 col-lg-8 col-md-11">
          <div class="section-header text-center">
            <h2 class="section-title">Working Process</h2>
            <p>We care about your dream which you want us to turn into reality. We always develop secure and efficient applications and systems by writing standard and efficient codes.</p>
          </div>
        </div>
      </div>
      <div class="work-proccess-area">
        <div class="wave-line">
          <img src="{{ asset('backend/assets/img/wave-line.png') }}" alt="image">
        </div>
        <div class="row gy-4 justify-content-center">
          <div class="col-md-4">
            <div class="work-proccess-card">
              <div class="work-proccess-card__icon">
                <i class="las la-lightbulb"></i>
              </div>
              <div class="work-proccess-card__content">
                <h3 class="work-proccess-card__title">Have an Idea?</h3>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-proccess-card">
              <div class="work-proccess-card__icon">
                <i class="las la-handshake"></i>
              </div>
              <div class="work-proccess-card__content">
                <h3 class="work-proccess-card__title">Let's Deal</h3>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-proccess-card">
              <div class="work-proccess-card__icon">
                <i class="las la-smile"></i>
              </div>
              <div class="work-proccess-card__content">
                <h3 class="work-proccess-card__title">Get Dream Ready</h3>
              </div>
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
            <h2 class="section-title">How We Work</h2>
            <p>We are always concerned about your needs. We always maintain the below steps to complete a project and we try our level best to deliver the best.</p>
          </div>
        </div>
      </div>
      <div class="row gy-4 justify-content-center">
        <div class="col-lg-4 col-md-6">
          <div class="how-work-card text-center">
            <div class="how-work-card__icon">
              <img src="{{ asset('backend/assets/img/web-application.png') }}" alt="image">
            </div>
            <h5 class="how-work-card__title">Web Application</h5>
            <p class="fs--14px">We can do almost anything you need. We maintain below steps to deliver the best.</p>
            <ul class="number-list text-start d-inline-block fs--14px mt-4">
              <li>Have a meetting & discuss your needs.</li>
              <li>You give us your valuable feedback.</li>
              <li>We will study and do paper work.</li>
              <li>Start developing your project.</li>
              <li>Show you when we done with it.</li>
              <li>You check complete system and test it.</li>
              <li>We will resolve any issue found.</li>
              <li>Deliver the final project to you.</li>
            </ul>
            <a href="{{ route('contact') }}" class="btn btn-sm btn--base w-100 py-2 mt-4">GET A QUOTE</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="how-work-card text-center">
            <div class="how-work-card__icon">
              <img src="{{ asset('backend/assets/img/mobile-apps.png') }}" alt="image">
            </div>
            <h5 class="how-work-card__title">Mobile Apps</h5>
            <p class="fs--14px">We can develop mobile apps with our web application as per your needs.</p>
            <ul class="number-list text-start d-inline-block fs--14px mt-4">
              <li>Have a meetting & discuss your needs.</li>
              <li>You give us your valuable feedback.</li>
              <li>We will study and do paper work.</li>
              <li>Start developing your project.</li>
              <li>Show you when we done with it.</li>
              <li>You check complete system and test it.</li>
              <li>We will resolve any issue found.</li>
              <li>Deliver the final project to you.</li>
            </ul>
            <a href="{{ route('contact') }}" class="btn btn-sm btn--base w-100 py-2 mt-4">GET A QUOTE</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="how-work-card text-center">
            <div class="how-work-card__icon">
              <img src="{{ asset('backend/assets/img/plugin-extension.png') }}" alt="image">
            </div>
            <h5 class="how-work-card__title">Plugin & Extension</h5>
            <p class="fs--14px">We can do almost anything you need. We maintain below steps to deliver the best.</p>
            <ul class="number-list text-start d-inline-block fs--14px mt-4">
              <li>Have a meetting & discuss your needs.</li>
              <li>You give us your valuable feedback.</li>
              <li>We will study and do paper work.</li>
              <li>Start developing your project.</li>
              <li>Show you when we done with it.</li>
              <li>You check complete system and test it.</li>
              <li>We will resolve any issue found.</li>
              <li>Deliver the final project to you.</li>
            </ul>
            <a href="{{ route('contact') }}" class="btn btn-sm btn--base w-100 py-2 mt-4">GET A QUOTE</a>
          </div>
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
</div>
@endsection

@section('js')

@endsection


