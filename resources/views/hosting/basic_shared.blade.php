@section('title', 'Blog - Erudience IT')
@section('meta-title', 'Blog - Erudience IT')
@section('meta-description', $g_info->description)
@section('meta-keywords', $g_info->keywords)
@section('og-title','Blog - Erudience IT')
@section('og-description', $g_info->description)
@section('tw-title', 'Blog - Erudience IT')
@section('tw-description', $g_info->description)
@section('meta-image', asset('storage/'.$g_info->cover_image))
@section('og-image', asset('storage/'.$g_info->cover_image))
@section('tw-image', asset('storage/'.$g_info->cover_image))

@extends('layouts.app')

@section('content')
<div class="main-wrapper">
  <section class="inner-hero bg_img" style="background-image: url('{{ asset('storage/' . $g_bgmedia->hosting_bg) }}');">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2 class="inner-hero__title">Basic Shared Hosting </h2>
          <p>Feel the speed of our ultra modern servers built with premium hardware with premium networking and driven by NVMe SSD for the best performance.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-100 pb-100 section--bg">
    <div class="container">
      <div class="row justify-content-center gy-4">
        <div class="col-lg-3 col-md-4 col-sm-6 hosting-feature-item">
          <div class="hosting-feature-card">
            <div class="hosting-feature-card__icon">
              <i class="lab la-creative-commons-sampling"></i>
            </div>
            <div class="hosting-feature-card__content">
              <h4 class="hosting-feature-card__title">99.9% Uptime</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 hosting-feature-item">
          <div class="hosting-feature-card">
            <div class="hosting-feature-card__icon">
              <i class="la la-headset"></i>
            </div>
            <div class="hosting-feature-card__content">
              <h4 class="hosting-feature-card__title">Fully Managed</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 hosting-feature-item">
          <div class="hosting-feature-card">
            <div class="hosting-feature-card__icon">
              <i class="lar la-clock"></i>
            </div>
            <div class="hosting-feature-card__content">
              <h4 class="hosting-feature-card__title">Instant Setup </h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 hosting-feature-item">
          <div class="hosting-feature-card">
            <div class="hosting-feature-card__icon">
              <i class="la la-sync-alt"></i>
            </div>
            <div class="hosting-feature-card__content">
              <h4 class="hosting-feature-card__title">Free Backups</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 hosting-feature-item">
          <div class="hosting-feature-card">
            <div class="hosting-feature-card__icon">
              <i class="lab la-cpanel"></i>
            </div>
            <div class="hosting-feature-card__content">
              <h4 class="hosting-feature-card__title">cPanel Included</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 hosting-feature-item">
          <div class="hosting-feature-card">
            <div class="hosting-feature-card__icon">
              <i class="la la-cogs"></i>
            </div>
            <div class="hosting-feature-card__content">
              <h4 class="hosting-feature-card__title">1 Click Installer</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 hosting-feature-item">
          <div class="hosting-feature-card">
            <div class="hosting-feature-card__icon">
              <i class="la la-shield-alt"></i>
            </div>
            <div class="hosting-feature-card__content">
              <h4 class="hosting-feature-card__title">Highly Secured</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 hosting-feature-item">
          <div class="hosting-feature-card">
            <div class="hosting-feature-card__icon">
              <i class="la la-server"></i>
            </div>
            <div class="hosting-feature-card__content">
              <h4 class="hosting-feature-card__title">SSD Only</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-100 pb-100 dark--overlay bg_img" style="background-image: url('{{ asset('storage/' . $g_bgmedia->hosting_bg) }}');">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xxl-7 col-lg-8 col-md-11">
          <div class="section-header text-center">
            <h2 class="section-title">Basic Shared Hosting Plans</h2>
            <p>Shared Hosting includes tons of premium features with no added costs.</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center gy-4">
      @foreach($hostings as $item)
        <div class="col-lg-4 col-md-6">
          <div class="package-card">
            <div class="package-card__header">
              <div class="left">
                <h4 class="package-card__title">{{ $item->plan_name }}</h4>
                <span class="text-warning">{{ $item->plan_bonus }}</span>
              </div>
              <div class="right">
                <div class="package-card__price">{{ $item->plan_cost }}</div>
                <span class="fs--14px">{{ $item->plan_duration }}</span>
              </div>
            </div>
            <div class="package-card__body text-center">
              <ul class="package-card__list">
              @foreach($item->list as $list)
                <li @if($list->sp_status) style="color: #2fcb71;" @endif>{{ $list->list }}</li>
              @endforeach
              </ul>
              <a href="#0" class="btn btn-md btn--base w-100 mt-4">Order Now!</a>
            </div>
          </div>
        </div>
      @endforeach
      </div>
    </div>
  </section>
  <section class="pt-100 pb-100 section--bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xxl-7 col-lg-8 col-md-11">
          <div class="section-header text-center">
            <h2 class="section-title">Shared Hosting Features</h2>
            <p>All of our servers comes with premium hardware with premium networking and driven by solid state drives. It's time to stop worrying about the status of your website.</p>
          </div>
        </div>
      </div>
      <div class="row gy-4">
        <div class="col-lg-4 col-sm-6">
          <div class="hosting-feature-card-two">
            <div class="icon">
              <i class="lab la-creative-commons-sampling"></i>
            </div>
            <div class="content">
              <h4 class="text-title">High Performance</h4>
              <p class="mt-2">All Shared Hosting plans are built with speed, security and features in mind. We include cPanel, Multiple PHP versions, Softaculous & Automated Backups.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="hosting-feature-card-two">
            <div class="icon">
              <i class="la la-shield-alt"></i>
            </div>
            <div class="content">
              <h4 class="text-title">Enhanced Security</h4>
              <p class="mt-2">To ensure security of websites we use the best softwares on the Planet. We try our level best and we've 24/7 monitoring system on servers to protect you.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="hosting-feature-card-two">
            <div class="icon">
              <i class="la la-sync-alt"></i>
            </div>
            <div class="content">
              <h4 class="text-title">Data Backups</h4>
              <p class="mt-2">Your hosting account is backed daily. We keep 7 sets of backup as standard. We use dedicated backup servers, providing fast & easy file rollback abilities.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="hosting-feature-card-two">
            <div class="icon">
              <i class="lar la-clock"></i>
            </div>
            <div class="content">
              <h4 class="text-title">Instant Setup</h4>
              <p class="mt-2">We offer instant account setup. As soon as you make successful payment, your web hosting will be activated instantly without waste your time.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="hosting-feature-card-two">
            <div class="icon">
              <i class="la la-cogs"></i>
            </div>
            <div class="content">
              <h4 class="text-title">Auto Installer</h4>
              <p class="mt-2">Softaculous is included, for FREE, you can install any one of hundreds of packages with just a single click, including blogs, ecommerce, and more.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="hosting-feature-card-two">
            <div class="icon">
              <i class="lab la-cpanel"></i>
            </div>
            <div class="content">
              <h4 class="text-title">cPanel Included</h4>
              <p class="mt-2">Having some no-name control panel is a mistake, making migrations and support painfully difficult. That's why we base our servers on cPanel.</p>
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


