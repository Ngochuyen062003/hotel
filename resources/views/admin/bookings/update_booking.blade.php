{{-- @extends('admin.layouts.master')

@section('title')
    Admin - Update Room
@endsection

@section('link-active-list-room')
    active open
@endsection

@section('vendors-js')
    <script src="{{ asset('admin/assets/vendor/libs/quill/katex.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/quill/quill.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/jquery-repeater/jquery-repeater.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/tagify/tagify.js') }}"></script>
@endsection

@section('page-js')
    <script src="{{ asset('admin/assets/js/app-ecommerce-product-add.js') }}"></script>
@endsection

@section('link-CSS')
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/quill/typography.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/quill/katex.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/quill/editor.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/select2/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/dropzone/dropzone.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/flatpickr/flatpickr.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/tagify/tagify.css') }}">
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="app-ecommerce">
            <form action="{{ url('admin/update-room/'.$room->id) }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">

                    <div class="d-flex flex-column justify-content-center">
                        <h4 class="mb-1 mt-3">Update Booking - {{$room->name}}</h4>
                    </div>
                    <div class="d-flex align-content-center flex-wrap gap-3">
                        <button type="submit" class="btn btn-primary">Update room</button>
                    </div>

                </div>

                <div class="row">

                    <!-- First column-->
                    <div class="col-12">
                        <!-- Room Information -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-tile mb-0">Room information</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="col">
                                        <label class="form-label" for="name">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Name room"
                                            name="name" aria-label="Name room"  value="{{ $room->name }}">
                                        @error('name')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label class="form-label" for="expert">Expert</label>
                                        <input type="text" class="form-control" id="expert"
                                               placeholder="Write some things..." name="expert"
                                               aria-label="expert"  value="{{ $room->expert }}">
                                        @error('expert')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Base Price -->
                                <div class="mb-3">
                                    <div class="col">
                                        <label class="form-label" for="price">Base Price</label>
                                        <input type="number" class="form-control" id="price"
                                            placeholder="Price" name="price" aria-label="Room price"
                                            value="{{ $room->price }}">
                                        @error('price')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Description -->
                                <div class="mb-3">
                                    <div class="col">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" placeholder="Write a description here"
                                                  id="description" name="description" style="height: 200px">
                                                  {{ $room->description }}
                                        </textarea>
                                        @error('description')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Image -->
                                <div class="mb-3">
                                    <div class="col input-group">
                                        <input type="file" class="form-control" id="main_image" name="main_image">
                                        <label class="input-group-text" for="main_image">Upload</label>
                                        @error('main_image')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Room Information -->
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection --}}
