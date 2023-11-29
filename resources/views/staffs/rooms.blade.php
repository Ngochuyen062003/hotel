@extends('staffs.layouts.master')

@section('title')
    Gato Cat Hotel - Rooms
@endsection

@section('rooms-active')
    active
@endsection

@section('content')
    <div class="room-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span class="sp-color">ROOMS</span>
                <h2>Our Rooms & Rates</h2>
            </div>
            <div class="row pt-45">
                <div class="col-lg-4 col-md-6">
                    <div class="room-card">
                        <a href="{{ route('room-detail') }}">
                            <img src="{{ asset('staff/assets/img/room/room-img1.jpg') }}"
                                alt="Images">
                        </a>
                        <div class="content">
                            <h3><a href="{{ route('room-detail') }}">Luxury Room</a></h3>
                            <ul>
                                <li class="text-color">320</li>
                                <li class="text-color">Per Night</li>
                            </ul>
                            <div class="rating text-color">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star-half"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-card">
                        <a href="{{ route('room-detail') }}">
                            <img src="{{ asset('staff/assets/img/room/room-img2.jpg') }}"
                                alt="Images">
                        </a>
                        <div class="content">
                            <h3><a href="{{ route('room-detail') }}">Single Room</a></h3>
                            <ul>
                                <li class="text-color">300</li>
                                <li class="text-color">Per Night</li>
                            </ul>
                            <div class="rating text-color">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star-half"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-card">
                        <a href="{{ route('room-detail') }}">
                            <img src="{{ asset('staff/assets/img/room/room-img3.jpg') }}"
                                alt="Images">
                        </a>
                        <div class="content">
                            <h3><a href="{{ route('room-detail') }}">Double Room</a></h3>
                            <ul>
                                <li class="text-color">350</li>
                                <li class="text-color">Per Night</li>
                            </ul>
                            <div class="rating text-color">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star-half"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-card">
                        <a href="{{ route('room-detail') }}">
                            <img src="{{ asset('staff/assets/img/room/room-img4.jpg') }}"
                                alt="Images">
                        </a>
                        <div class="content">
                            <h3><a href="{{ route('room-detail') }}">Family Room</a></h3>
                            <ul>
                                <li class="text-color">370</li>
                                <li class="text-color">Per Night</li>
                            </ul>
                            <div class="rating text-color">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star-half"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-card">
                        <a href="{{ route('room-detail') }}">
                            <img src="{{ asset('staff/assets/img/room/room-img5.jpg') }}"
                                alt="Images">
                        </a>
                        <div class="content">
                            <h3><a href="{{ route('room-detail') }}">Deluxe Room</a></h3>
                            <ul>
                                <li class="text-color">270</li>
                                <li class="text-color">Per Night</li>
                            </ul>
                            <div class="rating text-color">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star-half"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-card">
                        <a href="{{ route('room-detail') }}">
                            <img src="{{ asset('staff/assets/img/room/room-img6.jpg') }}"
                                alt="Images">
                        </a>
                        <div class="content">
                            <h3><a href="{{ route('room-detail') }}">Presidential
                                    Room</a></h3>
                            <ul>
                                <li class="text-color">270</li>
                                <li class="text-color">Per Night</li>
                            </ul>
                            <div class="rating text-color">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star-half"></i>
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
        </div>
    </div>
@endsection