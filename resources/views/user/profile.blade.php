@section('title', $user->name . ' - Erudience IT')
@section('meta-title', $user->name . ' - Erudience IT')
@section('og-title', $user->name . ' - Erudience IT')
@section('tw-title', $user->name . ' - Erudience IT')
@section('meta-image', asset('storage/'.$user->image))
@section('og-image', asset('storage/'.$user->image))
@section('tw-image', asset('storage/'.$user->image))

@extends('layouts.app')

@section('css')

@endsection

@section('content')
<div class="main-wrapper">
  <div class="dashboard-top bg_img dark--overlay" style="background-image: url('{{ asset('storage/'.$g_bgmedia->user_bg) }}');">
    <div class="container">
      <div class="user-area">
        <div class="row">
          <div class="col-sm-12">
            <div class="user-card justify-content-center">
              <div class="user-card__thumb">
                <a href="{{ route('user.profile', $user->username) }}">
                  @if($user->image)
                    <img src="{{ asset('storage/'.$user->image) }}" alt="{{ $user->name }}">
                  @else
                    <img src="{{ asset('frontend/assets/img/user.png') }}" alt="User - ErudienceIT">
                  @endif
                </a>
              </div>
              <div class="user-card__content">
                <h5 class="user-card__name">{{ $user->username }}</h5>
                <span class="fs--14px">Member Since {{ $user->created_at->format('F Y') }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="user-menu-area">
        <div class="row">
          <div class="col-lg-12">
            <button type="button" class="user-menu-open">
              <span class="left d-flex align-items-center">Profile</span>
              <span class="right">
                <i class="las la-bars"></i>
              </span>
            </button>
            <div class="user-menu-wrapper">
              <button type="button" class="user-menu-close">
                <i class="las la-times"></i>
              </button>
              <ul class="user-menu justify-content-center">
                <li class="">
                  <a href="#0">Dashboard</a>
                </li>
                <li class="{{ request()->routeIs('user.profile', $user->username) ? 'active open' : '' }}">
                  <a href="{{ route('user.profile', $user->username) }}">Profile</a>
                </li>
                <li class="{{ request()->routeIs('user.settings', $user->username) ? 'active open' : '' }}">
                  <a href="{{ route('user.settings', $user->username) }}">Settings</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pt-50 pb-50">
    <div class="container">
        <div class="row gy-4">
          <div class="col-xl-4 col-lg-5">
            <div class="user-profile">
              <div class="profile-thumb-wrapper text-center">
                <div class="profile-thumb">
                  <div class="avatar-preview">
                    <div class="profilePicPreview" style="background-image: url('@if($user->image){{ asset('storage/'.$user->image) }}@else{{ asset('frontend/assets/img/user.png') }}@endif')"></div>
                  </div>
                </div>
              </div>
              <div class="text-center mt-3 text-muted small">Image will be resized to 1:1 square ratio</div>
              <ul class="profile-info-list mt-4">
                <li>
                  <span class="caption">
                    <i class="lar la-user"></i> Username </span>
                  <span class="details">{{ $user->username }}</span>
                </li>
                <li>
                  <span class="caption">
                    <i class="las la-envelope"></i> E-mail </span>
                  <span class="details">
                    <a href="mailto:{{ $user->email }}" class="__cf_email__">{{ $user->email }}</a>
                  </span>
                </li>
                <li>
                  <span class="caption">
                    <i class="las la-phone"></i> Phone </span>
                  <span class="details">{{ $user->phone }}</span>
                </li>
                <li>
                  <span class="caption">
                    <i class="las la-flag"></i> Country </span>
                  <span class="details">{{ $user->country }}</span>
                </li>
                <li>
                  <span class="caption">
                    <i class="las la-flag"></i> Member Since </span>
                  <span class="details">{{ $user->created_at->format('F Y') }}</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xl-8 col-lg-7 ps-xl-5">
            <h5 class="fw-normal mb-2">Personal Information</h5>
            <div class="row">
              <div class="col-md-6 form-group">
                <label>Name</label>
                <input type="text" class="form--control" placeholder="Name" value="{{ $user->name }}" readonly>
              </div>
              <div class="col-md-6 form-group">
                <label>Gender</label>
                <input type="text"class="form--control" placeholder="Gender" value="{{ $user->gender }}" readonly>
              </div>
              <div class="col-md-6 form-group">
                <label>Phone</label>
                <input type="text" class="form--control" placeholder="phone" value="{{ $user->phone }}" readonly>
              </div>
              <div class="col-md-6 form-group">
                <label>Country</label>
                <input type="text" class="form--control" value="{{ $user->country }}" readonly>
              </div>
              <div class="col-md-6 form-group">
                <label>Date of Birth</label>
                <input type="text" class="form--control" placeholder="Birthdate" value="{{ $user->birthdate }}" readonly>
              </div>
            
            @if($user->userdetails)
              <div class="col-md-6 form-group">
                <label>Bio-Title</label>
                <input type="text" class="form--control" placeholder="Name" value="{{ $user->userdetails->bio_title }}" readonly>
              </div>
              <div class="col-md-6 form-group">
                <label>Address</label>
                <input type="text" class="form--control" placeholder="Address" value="{{ $user->userdetails->address }}" readonly>
              </div>
              <div class="col-md-6 form-group">
                <label>Profession</label>
                <input type="text" class="form--control" placeholder="City" value="{{ $user->userdetails->profession }}" readonly>
              </div>
              <div class="col-md-6 form-group">
                <label>Education</label>
                <input type="text" class="form--control" value="{{ $user->userdetails->education }}" readonly>
              </div>
              <div class="col-md-6 form-group">
                <label>Language</label>
                <input type="text" class="form--control" value="{{ $user->userdetails->language }}" readonly>
              </div>
              <div class="col-md-6 form-group">
                <label>Religion</label>
                <input type="text" class="form--control" value="{{ $user->userdetails->religion }}" readonly>
              </div>
              <div class="col-md-6 form-group">
                <label>Facebook</label>
                <input type="text" class="form--control" value="{{ $user->userdetails->fb_link }}" readonly>
              </div>
              <div class="col-md-6 form-group">
                <label>Instagram</label>
                <input type="text" class="form--control" value="{{ $user->userdetails->instagram_link }}" readonly>
              </div>
              <div class="col-md-6 form-group">
                <label>Twitter</label>
                <input type="text" class="form--control" value="{{ $user->userdetails->twitter_link }}" readonly>
              </div>
              <div class="col-md-6 form-group">
                <label>Linkedin</label>
                <input type="text" class="form--control" value="{{ $user->userdetails->linkedin_link }}" readonly>
              </div>
              <div class="col-md-6 form-group">
                <label>Github</label>
                <input type="text" class="form--control" value="{{ $user->userdetails->github_link }}" readonly>
              </div>
              <div class="col-md-12 form-group">
                <label>About</label>
                <textarea type="text" class="form--control"readonly>{{ $user->userdetails->about }}</textarea>
              </div>
            @endif
            </div>

          </div>
        </div>
    </div>
  </div>
</div>
@endsection

@section('js')

@endsection


