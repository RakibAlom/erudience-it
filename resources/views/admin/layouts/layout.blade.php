<!DOCTYPE html>
<html lang="en" class="@if($g_bgmedia->bg_mood == 0) light @else dark @endif">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('storage/' . $g_info->favicon) }}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('backend/assets/dist/css/app.css') }}" />
        <!-- END: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('backend/assets/vendor/sweetalert2.min.css') }}">

        @yield('css')

    </head>
    <!-- END: Head -->
    <body class="py-5">

        @include('admin.layouts.mobile-nav')

        <div class="flex">

            @include('admin.layouts.side-nav')

            <!-- BEGIN: Content -->
            <div class="content">

                @include('admin.layouts.top-bar')
                
                @yield('content')

            </div>
            <!-- END: Content -->
        </div>

        <!-- BEGIN: Dark Mode Switcher-->
        {{-- <div data-url="{{ route('admin.dark-mode') }}" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
            <div class="mr-4 text-slate-600 dark:text-slate-200">Dark Mode</div>
            <div class="dark-mode-switcher__toggle border"></div>
        </div> --}}
        <!-- END: Dark Mode Switcher-->

        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="{{ asset('backend/assets/dist/js/app.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!-- END: JS Assets-->

        @yield('js')

    </body>
</html>