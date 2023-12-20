@extends('staffs.layouts.master')

@section('title')
    Gato Cat Hotel - Booking
@endsection

@section('booking-active')
    active
@endsection

@section('content')
    <div class="book-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="booking-form">
                        <h3 class="text-center">Booking Our Rooms Now! </h3>
                        <form action="{{ route('postAddBooking') }}" method="post">
                            @csrf
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Your Name</label>
                                        <input type="text" name="full_name" id="full_name" class="form-control"
                                            data-error="Please enter your name" placeholder="Your Name">
                                        <i class="bx bx-user"></i>
                                    </div>
                                    @error('full_name')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Your Email</label>
                                        <input type="email" name="email" id="email" id="email"
                                            class="form-control" data-error="Please enter your email"
                                            placeholder="Your Email">
                                        <i class="bx bx-mail-send"></i>
                                    </div>
                                    @error('email')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Your Phone</label>
                                        <input type="text" name="phone" id="phone" class="form-control"
                                            data-error="Please enter your phone" placeholder="Your phone">
                                        <i class="bx bx-phone"></i>
                                    </div>
                                    @error('phone')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>You are: </label>
                                        <select class="form-control" name="is_customer" id="is_customer">
                                            <option value="1">Customer</option>
                                            <option value="0">Booking for someone else.</option>
                                        </select>
                                    </div>
                                    @error('is_customer')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Check in</label>
                                        <div class="input-group">
                                            <input id="datetimepicker" name="check_in"
                                                onchange="calculateDateRange()"
                                                type="text" class="form-control" placeholder="2020-12-05">
                                            <span class="input-group-addon"></span>
                                        </div>
                                        <i class="bx bxs-calendar"></i>
                                    </div>
                                    @error('check_in')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Check Out</label>
                                        <div class="input-group">
                                            <input id="datetimepicker-check" name="check_out"
                                                onchange="calculateDateRange()" type="text" class="form-control"
                                                placeholder="2020-12-05">
                                            <span class="input-group-addon"></span>
                                        </div>
                                        <i class="bx bxs-calendar"></i>
                                    </div>
                                    @error('check_out')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Adults</label>
                                        <select class="form-control" name="adults" id="adults">
                                            <option value="1">01</option>
                                            <option value="2">02</option>
                                            <option value="3">03</option>
                                            <option value="4">04</option>
                                            <option value="5">05</option>
                                        </select>
                                    </div>
                                    @error('adults')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Children</label>
                                        <select class="form-control" name="children" id="children">
                                            <option value="0">00</option>
                                            <option value="1">01</option>
                                            <option value="2">02</option>
                                            <option value="3">03</option>
                                            <option value="4">04</option>
                                            <option value="5">05</option>
                                        </select>
                                    </div>
                                    @error('children')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Types Room</label>
                                        <select class="form-control" name="type_room" id="type_room">
                                            @foreach ($rooms as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('type_room')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Numbers of Rooms</label>
                                        <select class="form-control" name="quantity" id="quantity">
                                            <option value="1">01</option>
                                            <option value="2">02</option>
                                            <option value="3">03</option>
                                            <option value="4">04</option>
                                            <option value="5">05</option>
                                        </select>
                                    </div>
                                    @error('quantity')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Check out by</label>
                                        <select class="form-control" name="quantity" id="quantity">
                                            <option value="1">Cash</option>
                                            <option value="2">Card</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn btn-bg-two border-radius-5">
                                        Book Now
                                    </button>
                                </div>
                            </div>
                            <input type="hidden" name="result" id="result">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function calculateDateRange() {
            // Lấy giá trị ngày từ ô input
            var checkInDate = new Date(document.getElementById('datetimepicker').value);
            var checkOutDate = new Date(document.getElementById('datetimepicker-check').value);

            // Tính toán khoảng cách giữa hai ngày
            var timeDiff = checkOutDate - checkInDate;
            var daysDiff = Math.ceil(timeDiff / (1000 * 60 * 60 * 24));

            // Hiển thị kết quả
            var resultElement = document.getElementById('result');
            resultElement.value = daysDiff;
        }
    </script>
@endsection
