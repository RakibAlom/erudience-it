<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('storage/' . $g_info->favicon) }}" type="image/png">

    <title>@yield('title')</title>
    <meta name="title" Content="@yield('meta-title')">
    <meta name="description" content="@yield('meta-description')">
    <meta name="keywords" content="@yield('meta-keywords')">
    <meta name="author" content="{{ strtoupper(str_replace(array('www.','http://','https://'), '', route('home'))) }}" />
    <meta property="image" content="@yield('meta-image')">

    <meta property="og:title" content="@yield('og-title')" />
    <meta property="og:site_name" content="{{ strtoupper(str_replace(array('www.','http://','https://'), '', route('home'))) }}" />
    <meta property="og:description" content="@yield('og-description')" />
    <meta property="og:image" content="@yield('og-image')" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="1180" />
    <meta property="og:image:height" content="600" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ strtoupper(str_replace(array('www.','http://','https://'), '', route('home'))) }}">
    <meta name="twitter:title" content="@yield('tw-title')">
    <meta name="twitter:description" content="@yield('tw-description')">
    <meta name="twitter:image" content="@yield('tw-image')">
    <meta name="twitter:creator" content="{{ strtoupper(str_replace(array('www.','http://','https://','.com'), '', route('home'))) }}">

    <link rel="canonical" href="{{ URL::current() }}" />
    
    <meta name="p:domain_verify" content="1dc7a7401aa8f08622292c8a5e7e2079"/>
    <meta name="google-site-verification" content="2_8y9PZICBs2Z_McdsHuM6Hy2gdcVi_2a5EG6JlEq1w" />

    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "WebSite",
        "name": "{{ $g_info->title }}",
        "url": "{{ strtoupper(str_replace(array('www.','http://','https://'), '', route('home'))) }}"
      }
    </script>

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/line-awesome/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">

    @yield('css')

</head>
<body>

    @include('layouts.include.preloader')

    @include('layouts.include.top-scroll')

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')
    


    <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/lightcase.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/iziToast.min.css') }}">
    <script src="{{ asset('frontend/assets/js/iziToast.min.js') }}"></script>
    <script>
      function notify(status, message) {
        iziToast[status]({
          message: message,
          position: "topRight"
        });
      }
    </script>
    
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/624f4c94c72df874911de78f/1g02s69hv';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

    @yield('js')

</body>
</html>





