@extends('staffs.layouts.master')

@section('title')
    Gato Cat Hotel - Booking Done
@endsection

@section('booking-active')
    active
@endsection

@section('content')
    <div class="book-area pt-100 pb-70">
        <div class="container justify-content-center">
            <div class="row align-items-center">
                <div class="col-12 text-center justify-content-center">
                      <div class="card mb-3" style="width: 100%;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="{{asset('staff/assets/img/room/room-details-img1.jpg')}}" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Booking successfully.</h5>
                              <p class="card-text">Thanks for your booking. Wishing you a happy holiday with your family and loved ones. <br> Love you ❤️❤️</p>
                              <p class="card-text"><small class="text-body-secondary">Gato Cat Hotel</small></p>
                              <a href="{{route('home')}}">Back to Home</a>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
@endsection
