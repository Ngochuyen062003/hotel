<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr"
    data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

        <title>@yield('title')</title>


        <meta name="description"
            content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
        <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
        <!-- Canonical SEO -->
        <link rel="canonical" href="https://themeselection.com/item/sneat-bootstrap-html-admin-template/">

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon"
            href="{{ asset('admin/assets/img/logos/logo4.png') }}" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
            rel="stylesheet">

        <!-- Icons -->
        <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/boxicons.css') }}" />
        <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/fontawesome.css') }}" />
        <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/flag-icons.css') }}" />

        <!-- Core CSS -->
        <link rel="stylesheet" href="{{ asset('admin/assets/vendor/css/rtl/core.css') }}" />
        <link rel="stylesheet" href="{{ asset('admin/assets/vendor/css/rtl/theme-default.css') }}" />
        <link rel="stylesheet" href="{{ asset('admin/assets/css/demo.css') }}" />

        <!-- Vendors CSS -->
        <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
        <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/typeahead-js/typeahead.css') }}" />


        <!-- Page CSS -->
        @yield('link-CSS')

        <!-- Helpers -->
        <script src="{{ asset('admin/assets/vendor/js/helpers.js') }}"></script>
        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
        <script src="{{ asset('admin/assets/vendor/js/template-customizer.js') }}"></script>
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="{{ asset('admin/assets/js/config.js') }}"></script>
    </head>

    <body>
        <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0"
                style="display: none; visibility: hidden">
            </iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->

        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar  ">
            <div class="layout-container">

                <!-- Menu -->

                @include('admin.layouts.partials.menu')

                <!-- / Menu -->

                <div class="layout-page">

                    <!-- Navbar -->

                    @include('admin.layouts.partials.navbar')

                    <!-- / Navbar -->

                    <!-- Content wrapper -->

                    <div class="content-wrapper">

                        <!-- Content -->

                        @yield('content')

                        <!-- /Content -->

                        <!-- Footer -->

                        @include('admin.layouts.partials.footer')

                        <!-- / Footer -->

                        <div class="content-backdrop fade"></div>
                    </div>
                    <!-- Content wrapper -->
                </div>
            </div>

            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>

            <!-- Drag Target Area To SlideIn Menu On Small Screens -->
            <div class="drag-target"></div>
        </div>
        <!-- / Layout wrapper -->

        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->

        <script src="{{ asset('admin/assets/vendor/libs/jquery/jquery.js') }}"></script>
        <script src="{{ asset('admin/assets/vendor/libs/popper/popper.js') }}"></script>
        <script src="{{ asset('admin/assets/vendor/js/bootstrap.js') }}"></script>
        <script src="{{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('admin/assets/vendor/libs/hammer/hammer.js') }}"></script>
        <script src="{{ asset('admin/assets/vendor/libs/i18n/i18n.js') }}"></script>
        <script src="{{ asset('admin/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
        <script src="{{ asset('admin/assets/vendor/js/menu.js') }}"></script>

        <!-- endbuild -->

        <!-- Vendors JS -->
        @yield('vendors-js')

        <!-- Main JS -->
        <script src="{{ asset('admin/assets/js/main.js') }}"></script>


        <!-- Page JS -->
        @yield('page-js')
    </body>

</html>


