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
              @if ($user->userdetails)
                <span class="fs--14px">{{ $user->userdetails->bio_title }}</span>
              @endif
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
                    <div class="profilePicPreview" style="background-image: url('@if($user->image){{ asset('storage/'.$user->image) }}@else{{ asset('frontend/assets/img/user.png') }}@endif')">
                    <form action="{{ route('user.change-picture', $user->username) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                        <input type="file" class="form-control form-control-sm" name="image" aria-label="" aria-describedby="basic-addon2">
                        <input type="hidden" name="oldimage" value="{{ $user->image }}">
                        <br><br>
                          <button class="btn btn-success btn-sm">Change</button>
                    </form>
                    </div>
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
          @if(session('success'))   
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>{{ session('success') }}</strong>
            </div>
          @elseif(session('error')) 
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>{{ session('error') }}</strong>
            </div>
          @endif

            <h5 class="fw-normal mb-2">Personal Information</h5>
        <form action="{{ route('user.update.settings', $user->username) }}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="row">
              <div class="col-md-6 form-group">
                <label>Name</label>
                <input type="text" name="name" class="form--control" value="{{ $user->name }}">
              </div>
              <div class="col-md-6 form-group">
                <label>Gender</label>
                <input type="text" name="gender"class="form--control" value="{{ $user->gender }}">
              </div>
              <div class="col-md-6 form-group">
                <label>Phone</label>
                <input type="text" name="phone" class="form--control" value="{{ $user->phone }}">
              </div>
              <div class="col-md-6 form-group">
                <label>Country</label>
                <input type="text" name="country" class="form--control" value="{{ $user->country }}">
              </div>
              <div class="col-md-6 form-group">
                <label>Date of Birth</label>
                <input type="date" name="birthdate" class="form--control" value="{{ $user->birthdate }}">
              </div>
              <div class="col-md-6 form-group">
                <label>Bio-Title</label>
                <input type="text" name="bio_title" class="form--control" value="@if($user->userdetails){{ $user->userdetails->bio_title }}@endif">
              </div>
              <div class="col-md-6 form-group">
                <label>Address</label>
                <input type="text" name="address" class="form--control" value="@if($user->userdetails){{ $user->userdetails->address }}@endif">
              </div>
              <div class="col-md-6 form-group">
                <label>Profession</label>
                <input type="text" name="profession" class="form--control"  value="@if($user->userdetails){{ $user->userdetails->profession }}@endif">
              </div>
              <div class="col-md-6 form-group">
                <label>Education</label>
                <input type="text" name="education" class="form--control" value="@if($user->userdetails){{ $user->userdetails->education }}@endif">
              </div>
              <div class="col-md-6 form-group">
                <label>Language</label>
                <input type="text" name="language" class="form--control" value="@if($user->userdetails){{ $user->userdetails->language }}@endif">
              </div>
              <div class="col-md-6 form-group">
                <label>Religion</label>
                <input type="text" name="religion" class="form--control" value="@if($user->userdetails){{ $user->userdetails->religion }}@endif">
              </div>
              <div class="col-md-6 form-group">
                <label>Facebook</label>
                <input type="text" name="fb_link" class="form--control" value="@if($user->userdetails){{ $user->userdetails->fb_link }}@endif">
              </div>
              <div class="col-md-6 form-group">
                <label>Instagram</label>
                <input type="text" name="instagram_link" class="form--control" value="@if($user->userdetails){{ $user->userdetails->instagram_link }}@endif">
              </div>
              <div class="col-md-6 form-group">
                <label>Twitter</label>
                <input type="text" name="twitter_link" class="form--control" value="@if($user->userdetails){{ $user->userdetails->twitter_link }}@endif">
              </div>
              <div class="col-md-6 form-group">
                <label>Linkedin</label>
                <input type="text" name="linkedin_link" class="form--control" value="@if($user->userdetails){{ $user->userdetails->linkedin_link }}@endif">
              </div>
              <div class="col-md-6 form-group">
                <label>Github</label>
                <input type="text" name="github_link" class="form--control" value="@if($user->userdetails){{ $user->userdetails->github_link }}@endif">
              </div>
              <div class="col-md-12 form-group">
                <label>About</label>
                <textarea type="text" name="about" class="form--control">@if($user->userdetails){{ $user->userdetails->about }}@endif</textarea>
              </div>
              
              <div class="col-12 text-end">
                <button type="submit" class="btn btn-md btn--base px-5 mt-2 w-100">Update</button>
              </div>
            </div>
        </form>

            <h5 class="fw-normal mt-4 mb-2">Password Change <span class="small text-muted">(keep blank if you do not want to change)</span>
            </h5>
        <form action="{{ route('user.change-password', $user->username) }}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="row">
              <div class="col-lg-12 form-group">
                <label>Current Password</label>
                <div class="custom-icon-field">
                  <i class="las la-key"></i>
                  <input type="password" name="current_password" class="form--control" placeholder="Current Password">
                </div>
              </div>
              <div class="col-md-6 form-group">
                <label>New Password</label>
                <div class="custom-icon-field">
                  <i class="las la-lock"></i>
                  <input type="password" name="password" class="form--control" placeholder="New Password">
                </div>
              </div>
              <div class="col-md-6 form-group">
                <label>Confirm Password</label>
                <div class="custom-icon-field">
                  <i class="las la-lock"></i>
                  <input type="password" name="password_confirmation" class="form--control" placeholder="Confirm Password">
                </div>
              </div>
              <div class="col-12 text-end">
                <button type="submit" class="btn btn-md btn--base px-5 mt-2 w-100">Change Password</button>
              </div>
            </div>
        </form>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection

@section('js')
<script>
  $(".alert").alert('close');
</script>
@endsection


