<header class="header @if(URL::current() == url('/')) @else position-static @endif">
  <div class="header__top">
    <div class="container-xl">
      <div class="row">
        <div class="col-sm-7">
          <ul class="header__info-list d-flex flex-wrap align-items-center justify-content-sm-start justify-content-center">
            <li>
              <a href="mailto:{{ $g_info->email }}">
                <i class="las la-envelope"></i>
                <span class="__cf_email__">{{ $g_info->email }}</span>
              </a>
            </li>
            <li>
              <a href="tel:{{ $g_info->phone_1 }}">
                <i class="las la-mobile"></i>
                <span class="__cf_email__">{{ $g_info->phone_1 }}</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-sm-5 mt-sm-0 mt-2">
          <ul class="header__info-list d-flex flex-wrap align-items-center justify-content-sm-end justify-content-center">
            <li class="cart-view d-none " data-bs-toggle="tooltip" title="Product Cart">
              <a href="" class="header-cart-btn">
                <i class="las la-shopping-cart"></i>
                <span class="cart-count">0</span>
              </a>
            </li>
          @auth
          @if(auth()->user()->utype === 99)
            <li>
              <a href="{{ route('admin.dashboard') }}" target="_blank">
                <i class="las la-tachometer-alt"></i> Dashboard </a>
            </li>
          @endif
            <li>
              <a href="{{ route('user.profile', auth()->user()->username) }}">
                <i class="las la-user-circle"></i> Profile </a>
            </li>
            <li>
              <a href="{{ route('logout') }}">
                <i class="las la-sign-in-alt"></i> logout </a>
            </li>
          @else
            <li>
              <a href="{{ route('login') }}">
                <i class="las la-sign-in-alt"></i> Login </a>
            </li>
            <li>
              <a href="{{ route('register') }}">
                <i class="las la-user-plus"></i> Register </a>
            </li>
          @endauth
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="header__bottom">
    <div class="container-xl">
      <nav class="navbar navbar-expand-lg p-0 align-items-center">
        <a class="site-logo site-title" href="{{ url('/') }}">
          <img src="{{ asset('storage/' . $g_info->logo) }}" alt="{{ $g_info->title }}">
        </a>
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="menu-toggle"></span>
        </button>
        <div class="collapse navbar-collapse mt-lg-0 mt-3" id="navbarSupportedContent">
          <button type="button" class="menu-sidebar-close">
            <i class="las la-times"></i>
          </button>
          <ul class="navbar-nav main-menu m-auto">
            <li>
              <a href="{{ url('/') }}">Home</a>
            </li>
            {{-- <li>
              <a href="">Marketplace</a>
            </li> --}}
            <li class="menu_has_children">
              <a href="#0">About</a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ route('about') }}">Company Intro</a>
                </li>
                <li>
                  <a href="{{ route('our-story') }}">Our Achievement</a>
                </li>
                <li>
                  <a href="{{ route('timeline') }}">Our Timeline</a>
                </li>
                <li>
                  <a href="{{ route('blog') }}">Our Blog/Notice</a>
                </li>
              </ul>
            </li>
            <li class="menu_has_children">
              <a href="#0">Hosting</a>
              <ul class="sub-menu hosting">
                <li>
                  <a href="{{ route('hosting.basic-shared') }}">Basic Shared Hosting</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="{{ route('portfolio') }}">Portfolio</a>
            </li>
            <li>
              <a href="{{ route('course') }}">Course</a>
            </li>
            <li>
              <a href="{{ route('services') }}">Services</a>
            </li>
            <li>
              <a href="{{ route('contact') }}">Contact</a>
            </li>
          </ul>

          <div class="nav-right">
            <button type="button" class="header__search-btn">
              <i class="las la-search"></i>
            </button>
            <div action="#;" method="get" class="header-search-form">
              <input type="text" name="search" class="form--control" placeholder="Search here...">
              <button type="submit" class="header-search-form__btn">
                <i class="las la-search"></i>
              </button>
            </div>
            <a href="{{ route('hire-us') }}" class="btn btn-md btn--base d-flex align-items-center justify-content-center">Hire Us</a>
          </div>
        </div>
      </nav>
    </div>
  </div>
</header>