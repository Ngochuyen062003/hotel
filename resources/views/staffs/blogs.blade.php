@extends('staffs.layouts.master')

@section('title')
    Gato Cat Hotel - Blogs
@endsection

@section('blogs-active')
    active
@endsection

@section('content')
    <div class="blog-style-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="col-lg-12">
                        <div class="blog-card">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-4 p-0">
                                    <div class="blog-img">
                                        <a href="{{ route('blog-detail') }}">
                                            <img
                                                src="{{ asset('staff/assets/img/blog/blog-img1.jpg') }}"
                                                alt="Images">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-8 p-0">
                                    <div class="blog-content">
                                        <span>October 08, 2020</span>
                                        <h3>
                                            <a href="{{ route('blog-detail') }}">Hotel
                                                Management is the Best
                                                Policy</a>
                                        </h3>
                                        <p>This is one of the best & quality
                                            full hotels in the world that
                                            will help you to make a good
                                            market.</p>
                                        <a href="{{ route('blog-detail') }}"
                                            class="read-btn">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="blog-card">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-4 p-0">
                                    <div class="blog-img">
                                        <a href="{{ route('blog-detail') }}">
                                            <img
                                                src="{{ asset('staff/assets/img/blog/blog-img2.jpg') }}"
                                                alt="Images">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-8 p-0">
                                    <div class="blog-content">
                                        <span>October 11, 2020</span>
                                        <h3>
                                            <a href="{{ route('blog-detail') }}">3d
                                                Hotel Models Have a Royal
                                                Model</a>
                                        </h3>
                                        <p>Hotel has made a revolutionary
                                            into the global market by making
                                            a 3D model on the hotel.</p>
                                        <a href="{{ route('blog-detail') }}"
                                            class="read-btn">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="blog-card">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-4 p-0">
                                    <div class="blog-img">
                                        <a href="{{ route('blog-detail') }}">
                                            <img
                                                src="{{ asset('staff/assets/img/blog/blog-img3.jpg') }}"
                                                alt="Images">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-8 p-0">
                                    <div class="blog-content">
                                        <span>October 14, 2020</span>
                                        <h3>
                                            <a href="{{ route('blog-detail') }}">We
                                                Can Easily Make an Ideal
                                                Management</a>
                                        </h3>
                                        <p>Hotel has made a revolutionary
                                            into the global market by making
                                            a 3D model on the hotel.</p>
                                        <a href="{{ route('blog-detail') }}"
                                            class="read-btn">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="blog-card">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-4 p-0">
                                    <div class="blog-img">
                                        <a href="{{ route('blog-detail') }}">
                                            <img
                                                src="{{ asset('staff/assets/img/blog/blog-img4.jpg') }}"
                                                alt="Images">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-8 p-0">
                                    <div class="blog-content">
                                        <span>October 19, 2020</span>
                                        <h3>
                                            <a href="{{ route('blog-detail') }}">Hotel
                                                Management Has Made a New
                                                Goal</a>
                                        </h3>
                                        <p>Hotel has made a revolutionary
                                            into the global market by making
                                            a 3D model on the hotel.</p>
                                        <a href="{{ route('blog-detail') }}"
                                            class="read-btn">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area">
                            <a href="#" class="prev page-numbers">
                                <i class="bx bx-chevrons-left"></i>
                            </a>
                            <span class="page-numbers current"
                                aria-current="page">1</span>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers">3</a>
                            <a href="#" class="next page-numbers">
                                <i class="bx bx-chevrons-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="side-bar-wrap">
                        <div class="search-widget">
                            <form class="search-form">
                                <input type="search" class="form-control"
                                    placeholder="Search...">
                                <button type="submit">
                                    <i class="bx bx-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="side-bar-widget">
                            <h3 class="title">Recent Posts</h3>
                            <div class="widget-popular-post">
                                <article class="item">
                                    <a href="{{ route('blog-detail') }}"
                                        class="thumb">
                                        <span class="full-image cover bg1"
                                            role="img"></span>
                                    </a>
                                    <div class="info">
                                        <h4 class="title-text">
                                            <a href="{{ route('blog-detail') }}">
                                                Hotel Room Reservation is a
                                                Common Fact Now
                                            </a>
                                        </h4>
                                        <ul>
                                            <li>
                                                <i class="bx bx-user"></i>
                                                29K
                                            </li>
                                            <li>
                                                <i
                                                    class="bx bx-message-square-detail"></i>
                                                15K
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                                <article class="item">
                                    <a href="{{ route('blog-detail') }}"
                                        class="thumb">
                                        <span class="full-image cover bg2"
                                            role="img"></span>
                                    </a>
                                    <div class="info">
                                        <h4 class="title-text">
                                            <a href="{{ route('blog-detail') }}">
                                                We Can Easily Make a Good
                                                Hotel Management
                                            </a>
                                        </h4>
                                        <ul>
                                            <li>
                                                <i class="bx bx-user"></i>
                                                49K
                                            </li>
                                            <li>
                                                <i
                                                    class="bx bx-message-square-detail"></i>
                                                17K
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                                <article class="item">
                                    <a href="news-details.html"
                                        class="thumb">
                                        <span class="full-image cover bg3"
                                            role="img"></span>
                                    </a>
                                    <div class="info">
                                        <h4 class="title-text">
                                            <a href="news-details.html">
                                                Hotel Management Has Made a
                                                New Goal
                                            </a>
                                        </h4>
                                        <ul>
                                            <li>
                                                <i class="bx bx-user"></i>
                                                69K
                                            </li>
                                            <li>
                                                <i
                                                    class="bx bx-message-square-detail"></i>
                                                52K
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="side-bar-widget">
                            <h3 class="title">Tags</h3>
                            <ul class="side-bar-widget-tag">
                                <li><a href="#">Hotel</a></li>
                                <li><a href="#">Booking</a></li>
                                <li><a href="#">Luxury</a></li>
                                <li><a href="#">Beach</a></li>
                                <li><a href="#">Resorts</a></li>
                                <li><a href="#">Room</a></li>
                                <li><a href="#">Single</a></li>
                                <li><a href="#">Family</a></li>
                                <li><a href="#">Sea View</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection