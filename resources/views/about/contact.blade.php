@section('title', 'Contact - ' . $g_info->title)
@section('meta-title', 'Contact - ' . $g_info->title)
@section('meta-description', $g_info->meta_description)
@section('meta-keywords', $g_info->keywords)
@section('og-title', 'Contact - ' . $g_info->title)
@section('og-description', $g_info->meta_description)
@section('tw-title', 'Contact - ' . $g_info->title)
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
  <section class="inner-hero bg_img" style="background-image: url('{{ asset('storage/' . $g_bgmedia->contact_bg) }}');">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2 class="inner-hero__title">Contact US</h2>
          <p>We put special emphasis on customer support. Our dedicated support team is waiting to assist you. We always try our level best to do so.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-100 pb-100">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xxl-7 col-lg-8 col-md-11">
          <div class="section-header text-center">
            <h2 class="section-title">Get in Touch With us</h2>
            <p>We’d love to hear from you and answer any questions you may have. Please feel free to contact us, we will get back to you as soon as possible.</p>
          </div>
        </div>
      </div>
      @if(session('success'))   
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{ session('success') }}</strong>
        </div>
      @elseif(session('error')) 
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>{{ session('error') }}</strong>
        </div>
      @endif
      <form class="contact-form" action="{{ route('send.contact') }}" method="post">
        @csrf
        <div class="row">
          <div class="col-md-6 form-group">
            <label>What can we help you with?</label>
            <select name="department" class="select form--control" required>
              <option disabled selected>Select One</option>
              <option value="Sales Question">Sales Question</option>
              <option value="Web Application">Web Application</option>
              <option value="Website Audit">Website Audit</option>
              <option value="SEO">Search Engine Optimization</option>
              <option value="Others">Others</option>
            </select>
          </div>
          <div class="col-md-6 form-group">
            <label>Your Name</label>
            <input type="text" name="name" autocomplete="off" class="form--control" placeholder="Enter your name" required>
          </div>
          <div class="col-md-6 form-group">
            <label>Your Email Address</label>
            <input type="email" name="email" autocomplete="off" class="form--control" placeholder="name@example.com" required>
          </div>
          <div class="col-md-6 form-group">
            <label>Your Phone Number</label>
            <input type="tel" name="phone" autocomplete="off" class="form--control" placeholder="+1234567890" required>
          </div>
          <div class="col-md-12 form-group">
            <label>In a few words, tell us what your enquiry is about</label>
            <input type="text" name="subject" autocomplete="off" class="form--control" placeholder="Your subject" required>
          </div>
          <div class="col-md-12 form-group">
            <label>Message</label>
            <textarea name="message" class="form--control" placeholder="Enter your message" required></textarea>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn--base w-100">Submit Now</button>
          </div>
        </div>
      </form>
    </div>
  </section>
</div>
@endsection

@section('js')

@endsection


