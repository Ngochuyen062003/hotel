@extends('admin.layouts.master')

@section('title')
    Admin - List rooms
@endsection

@section('link-active-list-room')
    active open
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
            <span class="text-muted fw-light">eCommerce /</span> Rooms List
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

        <!-- Product List Widget -->

        <div class="card mb-4">
            <div class="card-widget-separator-wrapper">
                <div class="card-body card-widget-separator">
                    <div class="row gy-4 gy-sm-1">
                        <div class="col-sm-6 col-lg-3">
                            <div
                                class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                                <div>
                                    <h6 class="mb-2">In-store Sales</h6>
                                    <h4 class="mb-2">$5,345.43</h4>
                                    <p class="mb-0"><span class="text-muted me-2">5k orders</span><span
                                            class="badge bg-label-success">+5.7%</span></p>
                                </div>
                                <div class="avatar me-sm-4">
                                    <span class="avatar-initial rounded bg-label-secondary">
                                        <i class="bx bx-store-alt bx-sm"></i>
                                    </span>
                                </div>
                            </div>
                            <hr class="d-none d-sm-block d-lg-none me-4">
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div
                                class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
                                <div>
                                    <h6 class="mb-2">Website Sales</h6>
                                    <h4 class="mb-2">$674,347.12</h4>
                                    <p class="mb-0"><span class="text-muted me-2">21k orders</span><span
                                            class="badge bg-label-success">+12.4%</span></p>
                                </div>
                                <div class="avatar me-lg-4">
                                    <span class="avatar-initial rounded bg-label-secondary">
                                        <i class="bx bx-laptop bx-sm"></i>
                                    </span>
                                </div>
                            </div>
                            <hr class="d-none d-sm-block d-lg-none">
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div
                                class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
                                <div>
                                    <h6 class="mb-2">Discount</h6>
                                    <h4 class="mb-2">$14,235.12</h4>
                                    <p class="mb-0 text-muted">6k orders</p>
                                </div>
                                <div class="avatar me-sm-4">
                                    <span class="avatar-initial rounded bg-label-secondary">
                                        <i class="bx bx-gift bx-sm"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h6 class="mb-2">Affiliate</h6>
                                    <h4 class="mb-2">$8,345.23</h4>
                                    <p class="mb-0"><span class="text-muted me-2">150 orders</span><span
                                            class="badge bg-label-danger">-3.5%</span></p>
                                </div>
                                <div class="avatar">
                                    <span class="avatar-initial rounded bg-label-secondary">
                                        <i class="bx bx-wallet bx-sm"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product List Table -->
        <div class="card">
            <div class="card-datatable table-responsive">
                <table class="datatables-products table border-top">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Expert</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roomList as $item)
                            <tr>
                                <th>{{ $item->name }}</th>
                                <th><img src="{{ $item->main_image ? Storage::url($item->main_image) : '' }}"
                                        alt="" width="100px"></th>
                                <th class="text-truncate" style="max-width: 100px">{{ $item->expert }}</th>
                                <th class="text-truncate" style="max-width: 150px;">{{ $item->description }}</th>
                                <th>{{ number_format($item->price, 0, ".", ".") }}đ</th>
                                <th>
                                    <form action="{{ route('admin.form-update', [$item->id]) }}" method="get"
                                        style="display: inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                    </form>

                                    <form action="{{ route('admin.del-room', [$item->id]) }}" id="showToastAnimation"
                                        method="get" style="display: inline;">
                                        @csrf
                                        <button type="submit" disabled class="btn btn-danger"
                                            data-id="{{ $item->id }}">Delete</button>
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
