@extends('staffs.layouts.master')

@section('title')
    Gato Cat Hotel - Contact
@endsection

@section('contact-active')
    active
@endsection

@section('content')
    <div class="contact-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-content">
                        <div class="section-title">
                            <h2>Let's Start to Give Us a Message and Contact
                                With Us</h2>
                        </div>
                        <div class="contact-img">
                            <img src="{{ asset('staff/assets/img/contact/contact-img1.jpg') }}"
                                alt="Images">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name"
                                            id="name" class="form-control"
                                            required
                                            data-error="Please enter your name"
                                            placeholder="Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email"
                                            id="email" class="form-control"
                                            required
                                            data-error="Please enter your email"
                                            placeholder="Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text"
                                            name="phone_number"
                                            id="phone_number" required
                                            data-error="Please enter your number"
                                            class="form-control"
                                            placeholder="Phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text"
                                            name="msg_subject"
                                            id="msg_subject"
                                            class="form-control" required
                                            data-error="Please enter your subject"
                                            placeholder="Your Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message"
                                            class="form-control"
                                            id="message" cols="30" rows="8"
                                            required
                                            data-error="Write your message"
                                            placeholder="Your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group checkbox-option">
                                        <input type="checkbox" id="chb2">
                                        <p>
                                            Accept <a
                                                href="terms-condition.html">Terms
                                                & Conditions</a> And <a
                                                href="privacy-policy.html">Privacy
                                                Policy.</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit"
                                        class="default-btn btn-bg-three">
                                        Send Message
                                    </button>
                                    <div id="msgSubmit"
                                        class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-another pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-another-content">
                        <div class="section-title">
                            <h2>Contacts Info</h2>
                            <p>
                                We are one of the best agency and we can
                                easily make a contract
                                us anytime on the below details.
                            </p>
                        </div>
                        <div class="contact-item">
                            <ul>
                                <li>
                                    <i class="bx bx-home-alt"></i>
                                    <div class="content">
                                        <span>123 Virgil A Stanton,
                                            Virginia, USA</span>
                                        <span>163 Virgil A Stanton,
                                            Virginia, USA</span>
                                    </div>
                                </li>
                                <li>
                                    <i class="bx bx-phone-call"></i>
                                    <div class="content">
                                        <span><a href="tel:+1(123)4567890">+1
                                                (123) 456 7890</a></span>
                                        <span><a href="tel:+1(123)4567896">+1
                                                (123) 456 7896</a></span>
                                    </div>
                                </li>
                                <li>
                                    <i class="bx bx-envelope"></i>
                                    <div class="content">
                                        <span><a href="info%40atoli.html"><span
                                                    class="__cf_email__"
                                                    data-cfemail="89e0e7efe6c9e8fde6e5e0a7eae6e4">[email&#160;protected]</span></a></span>
                                        <span><a href="hello%40atoli.html"><span
                                                    class="__cf_email__"
                                                    data-cfemail="adc5c8c1c1c2edccd9c2c1c483cec2c0">[email&#160;protected]</span></a></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-another-img">
                        <img src="{{ asset('staff/assets/img/contact/contact-img2.jpg') }}"
                            alt="Images">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="map-area">
        <div class="container-fluid m-0 p-0">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50194.82376159623!2d-79.09792989247224!3d38.159337740034566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b4a08eb8621697%3A0xe5d6e4710a09b66e!2zU3RhdW50b24sIOCmreCmvuCmsOCnjeCmnOCmv-CmqOCmv-Cmr-CmvOCmviAyNDQwMSwg4Kau4Ka-4Kaw4KeN4KaV4Ka_4KaoIOCmr-CngeCmleCnjeCmpOCmsOCmvuCmt-CnjeCmn-CnjeCmsA!5e0!3m2!1sbn!2sbd!4v1604126938221!5m2!1sbn!2sbd"></iframe>
        </div>
    </div>
@endsection
