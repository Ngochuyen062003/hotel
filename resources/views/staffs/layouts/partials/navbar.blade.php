    <div class="navbar-area">

        <div class="mobile-nav">
            <a href="index.html" class="logo">
                <img src="{{ asset('staff/assets/img/logos/logo-2.png')}}" class="logo-one"
                    alt="Logo">
                <img src="{{ asset('staff/assets/img/logos/footer-logo2.png')}}"
                    class="logo-two" alt="Logo">
            </a>
        </div>

        <div class="main-nav nav-two">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light ">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('staff/assets/img/logos/logo-2.png')}}"
                            class="logo-one" alt="Logo">
                        <img src="{{ asset('staff/assets/img/logos/footer-logo2.png')}}"
                            class="logo-two" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu"
                        id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link @yield('home-active')">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('about') }}" class="nav-link @yield('about-active')">
                                    About
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('booking') }}" class="nav-link @yield('booking-active')">
                                    Booking
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('services') }}" class="nav-link @yield('services-active')">
                                    Services
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('blogs') }}" class="nav-link @yield('blogs-active')">
                                    Blogs
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('rooms') }}" class="nav-link @yield('rooms-active')">
                                    Rooms
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('contact') }}" class="nav-link @yield('contact-active')">
                                    Contact
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('sign-up') }}" class="nav-link @yield('sign-up-active')">
                                    Sign Up
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('sign-in') }}" class="nav-link @yield('sign-in-active')">
                                    Sign In
                                </a>
                            </li>
                        </ul>
                        <div class="other-option">
                            <div class="option-item d-line">
                                <div class="language-nav-list">
                                    <select class="language-list-item">
                                        <option>English</option>
                                        <option>Vietnamese</option>
                                        <option>Korea</option>
                                        <option>Japan</option>
                                        <option>Chine</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option-item d-in-line">
                                <div class="menu-icon">
                                    <a href="#"
                                        class="burger-menu menu-icon-one d-in-line">
                                        <i class="bx bx-menu"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="side-nav-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="circle-inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="side-nav-inner">
                        <div
                            class="side-nav justify-content-center align-items-center">
                            <div class="side-item">
                                <div class="option-item">
                                    <div class="language-option-list">
                                        <select class="language-list-item">
                                            <option>English</option>
                                            <option>Vietnamese</option>
                                            <option>Korea</option>
                                            <option>Japan</option>
                                            <option>Chine</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="side-item">
                                <div class="option-item">
                                    <div class="menu-icon">
                                        <a href="#"
                                            class="burger-menu menu-icon-one">
                                            <i class="bx bx-menu"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sidebar-modal">
        <div class="sidebar-modal-inner">
            <div class="sidebar-header">
                <div class="sidebar-logo">
                    <img src="{{ asset('staff/assets/img/logos/logo-2.png')}}"
                        class="sidebar-logo-one" alt="Image">
                    <img src="{{ asset('staff/assets/img/logos/footer-logo2.png')}}"
                        class="sidebar-logo-two" alt="Image">
                </div>
                <span class="close-btn sidebar-modal-close-btn">
                    <i class="bx bx-x"></i>
                </span>
            </div>
            <div class="sidebar-about">
                <div class="title">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor
                        incididunt ut tur incidunt ut labore et
                    </p>
                </div>
            </div>
            <div class="sidebar-room-feed">
                <h2>Room Gallery</h2>
                <ul class="sidebar-room-content">
                    <li>
                        <img src="{{ asset('staff/assets/img/room/room-img1.jpg')}}"
                            alt="Images">
                        <div class="content">
                            <h3><a href="{{ route('room-detail') }}">Single Room</a></h3>
                            <span>320 / Per Night </span>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('staff/assets/img/room/room-img2.jpg')}}"
                            alt="Images">
                        <div class="content">
                            <h3><a href="{{ route('room-detail') }}">Luxury Room</a></h3>
                            <span>360 / Per Night </span>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('staff/assets/img/room/room-img3.jpg')}}"
                            alt="Images">
                        <div class="content">
                            <h3><a href="{{ route('room-detail') }}">Double Room</a></h3>
                            <span>370 / Per Night </span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="contact-us">
                <h2>Contact Us</h2>
                <ul>
                    <li>
                        <i class="bx bx-current-location"></i>
                        Address: 123 Stanton, <br> Virginia, USA
                    </li>
                    <li>
                        <i class="bx bx-mail-send"></i>
                        <a
                            href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#3a525f5656557a5b4e55565314595557"><span
                                class="__cf_email__"
                                data-cfemail="2b434e4747446b4a5f44474205484446">[email&#160;protected]</span></a>
                        <a href="#">Skype: example</a>
                    </li>
                    <li>
                        <i class="bx bx-phone-call"></i>
                        <a href="tel:+1(123)-456-7890"> +1 (123) 456 7890</a>
                        <a href="tel:+1(123)-456-6790"> +1 (123) 456 6790</a>
                    </li>
                </ul>
            </div>
            <div class="sidebar-follow-us">
                <h2>Follow Us</h2>
                <ul class="social-wrap">
                    <li>
                        <a href="#" target="_blank">
                            <i class="bx bxl-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="bx bxl-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="bx bxl-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="bx bxl-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="banner-area-two">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-another">
                        <h1>Atoli Resort, That is the Latest Dimension on
                            Luxury</h1>
                        <p>
                            The hotel and resort business is one of the best
                            and loyal business in the global market.
                            We are the agency that helps to book you a good
                            room in a suitable palace at a reasonable price.
                        </p>
                        <div class="banner-btn">
                            <a href="{{ route('booking') }}"
                                class="default-btn btn-bg-two border-radius-50">Book
                                a Room</a>
                        </div>
                        <div class="banner-shape">
                            <img src="{{ asset('staff/assets/img/home-two/shape.png')}}"
                                alt="Images">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-img">
                        <img src="{{ asset('staff/assets/img/home-two/home-two-img.jpg')}}"
                            alt="Images">
                    </div>
                </div>
            </div>
        </div>
    </div>
