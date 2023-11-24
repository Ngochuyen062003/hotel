<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{ asset('client/assets/image/logos/logo2.png') }}" type="image/png">
        <title>@yield('title')</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('client/assets/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('client/assets/vendors/linericon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('client/assets/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('client/assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css') }}">
        <link rel="stylesheet" href="{{ asset('client/assets/vendors/nice-select/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('client/assets/vendors/owl-carousel/owl.carousel.min.css') }}">
        <!-- end bootstrap css -->

        <!-- main css -->
        <link rel="stylesheet" href="{{ asset('client/assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('client/assets/css/responsive.css') }}">
        <!-- end main css -->
    </head>
    <body>
        <!--================Header Area =================-->
        @include('client.layouts.partials.menu')
        <!--================Header Area =================-->

        <!--================Banner Area =================-->
        @yield('banner')
        <!--================Banner Area =================-->

        {{-- Content Area --}}
        @yield('content')
        {{-- End Content --}}

        <!--================ start footer Area  =================-->
        @include('client.layouts.partials.footer')
		<!--================ End footer Area  =================-->


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('client/assets/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('client/assets/js/popper.js') }}"></script>
        <script src="{{ asset('client/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('client/assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('client/assets/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('client/assets/js/mail-script.js') }}"></script>
        <script src="{{ asset('client/assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js') }}"></script>
        <script src="{{ asset('client/assets/vendors/nice-select/js/jquery.nice-select.js') }}"></script>
        <script src="{{ asset('client/assets/js/stellar.js') }}"></script>
        <script src="{{ asset('client/assets/vendors/lightbox/simpleLightbox.min.js') }}"></script>
        <script src="{{ asset('client/assets/js/custom.js') }}"></script>
    </body>
</html>
