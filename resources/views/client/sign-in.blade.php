@extends('client.layouts.master')

@section('title')
    Gato Cat Hotel - Sign In
@endsection

@section('link-active-sign-in')
    active
@endsection

@section('banner')
    <section class="breadcrumb_area" style="background: url('{{asset("client/assets/image/banner/banner-2.jpg")}}') no-repeat scroll center 0/cover;">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">Sign-in</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ route('client.home') }}">Home</a></li>
                    <li class="active">Sign-in</li>
                </ol>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="ftco-section bg-secondary mt-1">
        <link rel="stylesheet" href="{{asset('client/assets/css/sign-in.css')}}">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-5">
                    <h2 class="heading-section text-center">GATO CAT HOTEL - SIGN IN</h2>
                    <img src="{{asset('client/assets/image/gallery/01.jpg')}}" width="100%" class="rounded-pill" alt="">
                </div>
                <div class="col-5" >
                    <div class="login-wrap p-0">
                        <h3 class="mb-2 text-center"><a href="sign-up.html">Don't have an account? <br> Sign-up now!</a></h3>
                        <form action="{{ route('admin.dashboard') }}" class="signin-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username" required=""
                                    spellcheck="false" data-ms-editor="true">
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" class="form-control" placeholder="Password"
                                    required="">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked="">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#" style="color: #fff">Forgot Password</a>
                                </div>
                            </div>
                        </form>
                        <p class="w-100 text-center">— Or Sign In With —</p>
                        <div class="social d-flex text-center">
                            <a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span>
                                Facebook</a>
                            <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span>
                                Twitter</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
            </div>
        </div>
    </section>
@endsection
