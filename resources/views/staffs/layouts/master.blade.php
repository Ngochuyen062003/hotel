<!doctype html>
<html lang="zxx">

    <!-- Mirrored from templates.hibootstrap.com/atoli/default/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 08:14:38 GMT -->
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{ asset('staff/assets/css/bootstrap.min.css')}}">

        <link rel="stylesheet" href="{{ asset('staff/assets/css/animate.min.css')}}">

        <link rel="stylesheet" href="{{ asset('staff/assets/fonts/flaticon.css')}}">

        <link rel="stylesheet" href="{{ asset('staff/assets/css/boxicons.min.css')}}">

        <link rel="stylesheet" href="{{ asset('staff/assets/css/magnific-popup.css')}}">

        <link rel="stylesheet" href="{{ asset('staff/assets/css/owl.carousel.min.css')}}">

        <link rel="stylesheet" href="{{ asset('staff/assets/css/owl.theme.default.min.css')}}">

        <link rel="stylesheet" href="{{ asset('staff/assets/css/nice-select.min.css')}}">

        <link rel="stylesheet" href="{{ asset('staff/assets/css/meanmenu.css')}}">

        <link rel="stylesheet" href="{{ asset('staff/assets/css/jquery-ui.css')}}">

        <link rel="stylesheet" href="{{ asset('staff/assets/css/style.css')}}">

        <link rel="stylesheet" href="{{ asset('staff/assets/css/responsive.css')}}">

        <link rel="stylesheet" href="{{ asset('staff/assets/css/theme-dark.css')}}">

        <link rel="icon" type="image/png" href="{{ asset('staff/assets/img/favicon.png')}}">

        <title>@yield('title')</title>
    </head>
    <body>

        <div class="preloader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="sk-cube-area">
                        <div class="sk-cube1 sk-cube"></div>
                        <div class="sk-cube2 sk-cube"></div>
                        <div class="sk-cube4 sk-cube"></div>
                        <div class="sk-cube3 sk-cube"></div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Navbar --}}

        @include('staffs.layouts.partials.navbar')

        {{-- End navbar --}}

        {{-- Content --}}

        @yield('content')

        {{-- End content --}}

        {{-- Footer --}}

        @include('staffs.layouts.partials.footer')

        {{-- End footer --}}

        <script src="{{ asset('staff/assets/js/jquery.min.js')}}"></script>

        <script src="{{ asset('staff/assets/js/bootstrap.bundle.min.js')}}"></script>

        <script src="{{ asset('staff/assets/js/jquery.magnific-popup.min.js')}}"></script>

        <script src="{{ asset('staff/assets/js/owl.carousel.min.js')}}"></script>

        <script src="{{ asset('staff/assets/js/jquery.nice-select.min.js')}}"></script>

        <script src="{{ asset('staff/assets/js/wow.min.js')}}"></script>

        <script src="{{ asset('staff/assets/js/jquery-ui.js')}}"></script>

        <script src="{{ asset('staff/assets/js/meanmenu.js')}}"></script>

        <script src="{{ asset('staff/assets/js/jquery.ajaxchimp.min.js')}}"></script>

        <script src="{{ asset('staff/assets/js/mixitup.min.js')}}"></script>

        <script src="{{ asset('staff/assets/js/form-validator.min.js')}}"></script>

        <script src="{{ asset('staff/assets/js/contact-form-script.js')}}"></script>

        <script src="{{ asset('staff/assets/js/custom.js')}}"></script>
    </body>

    <!-- Mirrored from templates.hibootstrap.com/atoli/default/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 08:15:29 GMT -->
</html>
