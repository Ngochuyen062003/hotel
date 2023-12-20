@extends('admin.layouts.master')

@section('title')
    Admin - List bookings
@endsection

@section('link-active-list-booking')
    active
@endsection

@section('vendors-js')
    <script src="{{ asset('admin/assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/toastr/toastr.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
@endsection

@section('page-js')
    <script src="{{ asset('admin/assets/js/ui-toasts.js') }}"></script>
@endsection

@section('link-CSS')
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('admin/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/select2/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/toastr/toastr.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/animate-css/animate.css') }}" />
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">eCommerce /</span> Bookings List
        </h4>

        <div class="bs-toast toast toast-ex animate__animated my-2" role="alert" aria-live="assertive" aria-atomic="true"
            data-bs-delay="2000">
            <div class="toast-header">
                <i class='bx bx-bell me-2'></i>
                <div class="me-auto fw-medium">Bootstrap</div>
                <small>11 mins ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Fruitcake chocolate bar tootsie roll gummies gummies jelly
                beans cake.
            </div>
        </div>

        <!-- Product List Table -->
        <div class="card">
            <div class="card-datatable table-responsive">
                <table class="datatables-products table border-top">
                    <thead>
                        <tr>
                            <th>Name customer</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Is customer</th>
                            <th>Check-in</th>
                            <th>Check-out</th>
                            <th>Type room</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $item)
                            <tr>
                                <th>{{ $item->full_name }}</th>
                                <th>{{ $item->phone }}</th>
                                <th>{{ $item->email }}</th>
                                <th>{{ $item->is_customer }}</th>
                                <th>{{ $item->check_in }}</th>
                                <th>{{ $item->check_out }}</th>
                                <th>{{ $item->type_room }}</th>
                                <th>{{ number_format($item->total, 0, ".", ".") }}đ</th>
                                <th>{{ $item->status }}</th>
                                <th>
                                    <form action="{{ route('admin.form-update', [$item->id]) }}" method="get"
                                        style="display: inline;">
                                        @csrf
                                        <button disabled type="submit" class="btn btn-primary">Detail</button>
                                    </form>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
