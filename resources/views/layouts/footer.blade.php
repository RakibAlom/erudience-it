@php
    $clientbrand = DB::table('project_clients')->where('status', 1)->get();
@endphp

<footer class="footer">
    <div class="footer__top">
      <div class="container">
        <div class="brand-slider">
        @foreach ($clientbrand as $item)
          
          <div class="single-slide">
            <div class="brand-item">
              <img src="{{ asset('storage/' . $item->logo) }}" alt="brand image">
            </div>
          </div>

        @endforeach
        </div>
      </div>
    </div>
    <div class="footer__middle">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-sm-8 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s">
            <div class="footer-widget">
              <a href="{{ route('home') }}" class="footer-logo">
                <img src="{{ asset('storage/'.$g_info->footer_logo) }}" alt="{{ $g_info->title }}">
              </a>
              <p class="mt-4">{{ $g_info->description }}</p>
            </div>
          </div>
          <div class="col-lg-2 col-sm-4 col-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
            <div class="footer-widget">
              <h3 class="footer-widget__title">Company</h3>
              <ul class="short-link-list">
                <li>
                  <a href="{{ route('about') }}">About Us</a>
                </li>
                <li>
                  <a href="{{ route('our-story') }}">Our Achievemnet</a>
                </li>
                <li>
                  <a href="{{ route('timeline') }}">Our Timeline</a>
                </li>
                <li>
                  <a href="{{ route('services') }}">Our Services</a>
                </li>
                <li>
                  <a href="#0">Career with us</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-sm-4 col-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <div class="footer-widget">
              <h3 class="footer-widget__title">Our Expertise</h3>
              <ul class="short-link-list">
              @php
                $services = App\Models\About\OurService::where('status', 1)->get();
              @endphp
              @foreach($services as $item)
                <li>
                  <a href="{{ $item->path() }}">{{ Str::words($item->title, 2, '') }}</a>
                </li>
              @endforeach
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-sm-4 col-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s">
            <div class="footer-widget">
              <h3 class="footer-widget__title">Terms</h3>
              <ul class="short-link-list">
                <li>
                  <a href="{{ route('blog') }}">Our Blog</a>
                </li>
                <li>
                  <a href="{{ route('privacy') }}">Privacy Policy</a>
                </li>
                <li>
                  <a href="{{ route('terms') }}">Terms of Service</a>
                </li>
                <li>
                  <a href="{{ route('refund-policy') }}">Refund Policy</a>
                </li>
                <li>
                  <a href="{{ route('licence') }}">Licence Info</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-sm-4 col-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.9s">
            <div class="footer-widget">
              <h3 class="footer-widget__title">Support</h3>
              <ul class="short-link-list">
                <li>
                  <a href="{{ route('faq') }}">F.A.Q</a>
                </li>
                <li>
                  <a href="{{ route('contact') }}">Get Support</a>
                </li>
                <li>
                  <a href="#0">Member Area</a>
                </li>
                <li>
                  <a href="{{ route('contact') }}">Contact Us</a>
                </li>
                <li>
                  <a href="#0">Affiliate Program</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__bottom">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-xl-6 col-md-8 text-md-start text-center">
            <h6 class="copyright-text text-white">
              <strong>{{ $g_info->copyright }}</strong>
            </h6>
            <p class="mt-3">{{ $g_info->short_about }}</p>
          </div>
          <div class="col-xl-4 col-md-4 mt-md-0 mt-4">
            <h6 class="fs--16px text-white text-md-end text-center mb-md-4 mb-3">Stay Connected</h6>
            <ul class="footer-social-links d-flex align-items-center justify-content-md-end justify-content-center">
              <li>
                <a href="{{ $g_info->fb_link }}" target="_blank">
                  <i class="lab la-facebook-f"></i>
                </a>
              </li>
              <li>
                <a href="{{ $g_info->twitter_link }}" target="_blank">
                  <i class="lab la-twitter"></i>
                </a>
              </li>
              <li>
                <a href="{{ $g_info->linkedin_link }}" target="_blank">
                  <i class="lab la-linkedin-in"></i>
                </a>
              </li>
              <li>
                <a href="{{ $g_info->youtube_link }}" target="_blank">
                  <i class="lab la-youtube"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>