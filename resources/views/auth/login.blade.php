

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{ asset('storage/' . $g_info->favicon) }}" type="image/png">

  <title>Login - Erudienct IT</title>
  <meta name="title" Content="Login - Erudienct IT">
  <meta name="description" content="">
  <meta name="keywords" content="Login - Erudienct IT">
  <meta name="author" content="{{ strtoupper(str_replace(array('www.','http://','https://'), '', route('home'))) }}" />
  <meta property="image" content="{{ asset('storage/' . $g_info->cover_image) }}">

  <meta property="og:title" content="Login - Erudienct IT" />
  <meta property="og:site_name" content="{{ strtoupper(str_replace(array('www.','http://','https://'), '', route('home'))) }}" />
  <meta property="og:description" content="" />
  <meta property="og:image" content="{{ asset('storage/' . $g_info->cover_image) }}" />
  <meta property="og:image:type" content="image/jpeg" />
  <meta property="og:image:width" content="1180" />
  <meta property="og:image:height" content="600" />

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="{{ strtoupper(str_replace(array('www.','http://','https://'), '', route('home'))) }}">
  <meta name="twitter:title" content="Login - Erudienct IT">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="{{ asset('storage/' . $g_info->cover_image) }}">
  <meta name="twitter:creator" content="{{ strtoupper(str_replace(array('www.','http://','https://','.com'), '', route('home'))) }}">

  <link rel="canonical" href="{{ URL::current() }}" />

  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "WebSite",
      "name": "{{ $g_info->title }}",
      "url": "{{ strtoupper(str_replace(array('www.','http://','https://'), '', route('home'))) }}"
    }
  </script>
  
  <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.png" type="image/png') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/line-awesome/css/line-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/lightcase.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">

    
</head>
<body>

  <div class="preloader">
    <div class="preloader__content">
      <h3 class="preloader__text">TSK</h3>
      <div class="preloader__circle"></div>
    </div>
  </div>

  <div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="las la-arrow-up"></i>
    </span> 
  </div>




  

    <section class="account-section">
      <div class="left bg_img" style="background-image: url('{{ asset('storage/' . $g_bgmedia->default_bg) }}');">
        <div class="left-inner text-center">
          <h6 class="text--base">Welcome Back!</h6>
          <h2 class="title text-white">Sign In to your account</h2>
          <p class="mt-3">Don't have an account with us? Then you can create a account and get access to all of our premium features. 
          <br> <a href="{{ route('register') }}" class="text--base">Register Now!</a></p>
          <h4 class="text-white mt-5 mb-3">We are involved with</h4>
        @php
            $brands = App\Models\Gallery\SkillBrand::where('status', 1)->get();
        @endphp

          <div class="involde-logo-slider">
          @foreach ($brands as $item)
            <div class="single-slide">
              <div class="involde-logo">
                <img src="{{ asset('storage/' . $item->logo) }}" alt="{{ $item->name }}">
              </div>
            </div>
          @endforeach
          </div>
        </div>
      </div>

      <div class="right">
        <div class="el">
          {{-- <img src="" alt="image"> --}}
        </div>
        <div class="top w-100 text-center">
          <a href="{{ url('/') }}"><img src="{{ asset('storage/' . $g_info->logo) }}" alt="logo"></a>
        </div>
        <div class="middle w-100">
          <form class="account-form" action="{{ route('login') }}" method="post">
            @csrf
            <div class="form-group">
              <label>Username / Email</label>
              <input id="username" type="text" class="form--control {{ $errors->has('username') || $errors->has('email') ? 'is-invalid' : '' }}" name="login" value="{{ old('username') ?: old('email') }}" name="login" required autocomplete="login" autofocus placeholder="Username/Email Address">
                @if($errors->has('username') || $errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" autocomplete="current-password" class="form--control @error('password') is-invalid @enderror" placeholder="Password..." required>
              @if($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </div>

            <div class="form-group">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" checked>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            
            <div class="form-group">
              <button type="submit" class="btn btn--base w-100">Login Now</button>
            </div>
          </form>

          <div class="text-center mt-5">
            <p>
                Having trouble logging in? Forgot your password? You can reset your password anytime. <br>
              <a class="text--base" href="{{ route('password.request') }}"> Reset Now!</a>
            </p>
          </div>
        </div>
        <div class="bottom w-100 text-center">
          <p>© 2021 - {{ date('Y') }} <a href="{{ url('/') }}" class="text--base">ERUDIENCE</a>. All Rights Reserved.</p>
        </div>
      </div>
    </section>



    <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/lightcase.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/iziToast.min.css') }}">
    <script src="{{ asset('frontend/assets/js/iziToast.min.js') }}"></script>

    
        <script>

        function notify(status,message) {
            iziToast[status]({
                message: message,
                position: "topRight"
            });
        }
    </script>


</body>
</html>
