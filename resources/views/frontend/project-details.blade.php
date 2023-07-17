@extends('layouts.frontend.app')
@section('title', 'Project Details')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
@endsection

@section('meta-data')
  <meta name="description" content="{{ isset($metaData->meta_description) ? $metaData->meta_description : null }}" />
  <meta property="og:type" content="website">
  <meta property="og:title" content="{{ isset($metaData->og_title) ? $metaData->og_title : null }}" />
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:description" content="{{ isset($metaData->meta_description) ? $metaData->meta_description : null }}" />
  <meta property="og:image" content="{{ isset($metaData->og_image_path) ? $metaData->og_image_path : null }}">
  <meta property="og:image:text" content="{{ isset($metaData->og_image_alt_text) ? $metaData->og_image_alt_text : null }}" />
  <meta property="og:image:height" content="{{ isset($metaData->og_image) ? '630' : null }}" />
  <meta property="og:image:width" content="{{ isset($metaData->og_image) ? '1200' : null }}" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="{{ '@' . Request::root() }}" />
  <meta name="twitter:title" content="{{ isset($metaData->twitter_title) ? $metaData->twitter_title : null }}" />
  <meta name="twitter:description" content="{{ isset($metaData->twitter_description) ? $metaData->twitter_description : null }}" />
  <meta name="twitter:image" content="{{ isset($metaData->twitter_image_path) ? $metaData->twitter_image_path : null  }}" />
  <meta name="meta:description" content="{{ isset($metaData->meta_description) ? $metaData->meta_description : null }}" />
  <meta name="feature_image" content="{{ isset($metaData->image_path) ? $metaData->image_path : null }}" />
  <meta name="feature_image_alt_text" content="{{ isset($metaData->image_alt_text) ? $metaData->image_alt_text : null }}" />
  <meta name="feature_image_height" content="{{ isset($metaData->image) ? '1920' : null }}" />
  <meta name="feature_image_width" content="{{ isset($metaData->image) ? '1080' : null }}" />
@endsection 

@section('content')
    <!-- hero section -->
    <section class="hero-section">
        <img src="https://placehold.co/1905x755" alt="fugr" class="img-fluid">
        <!-- breadcumbs -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <ol class="breadcrumb container custom-container">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Environmental Services And Remediation</li>
            </ol>
        </nav>
        <div class="hero-section__content">
            <div class="container custom-container">
                <h1 class="big-heading">Environmental services and remediation</h1>
            </div>
        </div>
    </section>
    <!-- sticky menu -->
    <section class="sticky-menu">
        <div class="container custom-container">
            <div class="d-flex align-items-center">
                <p class="mb-0 me-5">Jump to</p>
                <div class="d-flex align-items-center">
                    <a href="#experties" class="sticky-menu-item">Experties</a>
                    <a href="#benefits" class="sticky-menu-item">Benefits</a>
                    <a href="#keyFigures" class="sticky-menu-item">Key figures</a>
                    <a href="#casestudy" class="sticky-menu-item">Case studies</a>
                    <a href="#relatedNews" class="sticky-menu-item">Related news</a>
                    <a href="#contact" class="sticky-menu-item">Contact</a>
                </div>
            </div>
        </div>
    </section>
    <!-- what we do -->
    <section id="experties" class="what-to-do">
        <div class="container custom-container">
            <div class="row">
                <div class="col-md-3">
                    <h4 class="medium-heading">Expertise</h4>
                </div>
                <div class="col-md-6">
                    <p>From changing or unclear requirements to lack of data insights to legislation demands – keeping your
                        project on track can be a challenge. That’s why we’re here to support you, no matter what industry
                        you’re in. With our advice on business strategy, project management, operational processes, optimal
                        design, and technology, you’re empowered to maximise project value. Throughout its life cycle.</p>
                    <div class="person-details d-flex align-items-end">
                        <img src="https://placehold.co/140x140" alt="fugro" class="img-fluid">
                        <div class="ms-4">
                            <p class="fs-18 fw-600 mb-0">Remmelt de Jong</p>
                            <p class="fs-18 mb-0">Industry lead - Energy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Benefits -->
    <section class="benefits mt-3" id="benefits">
        <div class="container custom-container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h3 class="fs-24 text-black mb-4">Benefits</h3>
                    <div class="benefits__item">
                        <h3 class="fs-24 text-black mb-1">1. Reliable data and advice</h3>
                        <p class="fs-18 ">Get a clear understanding of project constraints and opportunities. Plus: accurate
                            data acquisition for less risk.</p>
                    </div>
                    <div class="benefits__item">
                        <h3 class="fs-24 text-black mb-1">2. Reliable data and advice</h3>
                        <p class="fs-18 ">Get a clear understanding of project constraints and opportunities. Plus: accurate
                            data acquisition for less risk.</p>
                    </div>
                    <div class="benefits__item">
                        <h3 class="fs-24 text-black mb-1">3. Reliable data and advice</h3>
                        <p class="fs-18 ">Get a clear understanding of project constraints and opportunities. Plus: accurate
                            data acquisition for less risk.</p>
                    </div>
                    <div class="benefits__item">
                        <h3 class="fs-24 text-black mb-1">4. Reliable data and advice</h3>
                        <p class="fs-18 ">Get a clear understanding of project constraints and opportunities. Plus: accurate
                            data acquisition for less risk.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- key figure -->
    <section class="key-figure mt-4" id="keyFigures">
        <div class="container custom-container">
            <h2 class="fs-48 text-black mb-4">Key figures</h2>
            <div class="key-figure__item">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="fs-48 text-black">2000</h2>
                    </div>
                    <div class="col-md-6">
                        <h4 class="fs-24 text-black mb-2">consultants</h4>
                        <p class="fs-18 mb-0">spread across the globe</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- slider -->
    <section class="slider project-slider" id="newsreads">
        <div class="container custom-container">
            <div class="owl-carousel service-owl">
                <div class="item">
                    <div class="left-div">
                        <p>Long read</p>
                        <h2 class="fs-48 text-black">Looking ahead at the offshore wind operations and maintenance market
                        </h2>
                        <p class="fs-24">We help clients predict their energy output at a certain moment in time and advise
                            whether it’s more cost-effective for the turbines to be on or off.</p>


                    </div>
                    <div class="right-div">
                        <img src="https://placehold.co/600x760" alt="Image 1" class="img-fluid">
                    </div>
                </div>
                <div class="item">
                    <div class="left-div">
                        <h2>Heading 2</h2>
                        <p>Paragraph text 2</p>
                    </div>
                    <div class="right-div">
                        <img src="https://placehold.co/600x760" alt="Image 2" class="img-fluid">
                    </div>
                </div>
                <div class="item">
                    <div class="left-div">
                        <h2>Heading 3</h2>
                        <p>Paragraph text 3</p>
                    </div>
                    <div class="right-div">
                        <img src="https://placehold.co/600x760" alt="Image 2" class="img-fluid">
                    </div>
                </div>
                <!-- Add more items as needed -->
            </div>
            <!-- indicator -->
            <div class="indicators">
                <div class="progress-bar">
                    <div class="progress"></div>
                </div>
                <div class="controls d-flex justify-content-between align-items-center">
                    <a href="/" class="text-black">Read more <svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="none">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z"
                                clip-rule="evenodd"></path>
                        </svg></a>
                    <div class="d-flex align-items-center">
                        <span class="counter">1</span>
                        <div class="d-flex ms-3">
                            <button class="prev-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="none">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="m7 8 5-5H9.172L4.879 7.293a1 1 0 0 0 0 1.414L9.172 13H12L7 8Z"
                                        clip-rule="evenodd"></path>
                                </svg></button>
                            <button class="next-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="none">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M9 8 4 3h2.828l4.293 4.293a1 1 0 0 1 0 1.414L6.828 13H4l5-5Z"
                                        clip-rule="evenodd"></path>
                                </svg></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- contact -->
    <section id="contact" class="contact project-details-contact">
        <div class="container custom-container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-black fs-28">Contact us</h2>
                </div>
                <div class="col-md-6">
                    <h2 class="fs-48 mb-0">Get in touch for</h2>
                    <h2 style="color: rgb(129, 142, 160);" class="fs-48 mb-0">environmental services and remediation</h2>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <div class="contact-grid">
                        <div class="profile d-flex">
                            <div class="left">
                                <img src="https://placehold.co/160x160" alt="fugro images">
                            </div>
                            <div class="right d-flex flex-column ms-3">
                                <div class="top">
                                    <p class="mb-0 fs-18">Remmelt de Jong</p>
                                    <p class="fs-18 text-white-light">Industry lead - Energy</p>
                                </div>
                                <div class="mt-auto">
                                    <button class="contact-action-btn" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Contact Remmelt de
                                        Jong <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="none">
                                            <path fill="currentColor" fill-rule="evenodd"
                                                d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z"
                                                clip-rule="evenodd"></path>
                                        </svg></button>
                                </div>
                            </div>
                        </div>
                        <div class="profile d-flex">
                            <div class="left">
                                <img src="https://placehold.co/160x160" alt="fugro images">
                            </div>
                            <div class="right d-flex flex-column ms-3">
                                <div class="top">
                                    <p class="mb-0 fs-18">Remmelt de Jong</p>
                                    <p class="fs-18 text-white-light">Industry lead - Energy</p>
                                </div>
                                <div class="mt-auto">
                                    <button class="contact-action-btn" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Contact Remmelt de
                                        Jong <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="none">
                                            <path fill="currentColor" fill-rule="evenodd"
                                                d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z"
                                                clip-rule="evenodd"></path>
                                        </svg></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- contact item form -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                        aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">

                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                        <!-- bootstrap -->
                      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
                      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
                        <h1 class="mb-0 fs-48">Get in touch with</h1>
                        <h1 class="fs-48" style="color: rgb(129, 142, 160);">Remmelt de Jong</h1>
                        <div class="offcanvas-body">
                            <div class="profile-details">
                                <img src="https://placehold.co/200x200" alt="images" class="img-fluid w-100">
                                <p class="fs-20 text-black mb-0">Remmelt de Jong</p>
                                <p class="fs-20" style="color: rgb(72, 93, 118);">Industry lead - Energy</p>
                            </div>
                            <div class="form-content">
                                <form action=""><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                                    <!-- bootstrap -->
                                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
                                  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>ame" class="form-label">Last name <span
                                                class="req text-red">*</span></label>
                                        <input type="text" class="form-control" id="contactFirstName">
                                    </div>
                                    <div class="form-group">
                                        <label for="contactLastName" class="form-label">Last name <span
                                                class="req text-red">*</span></label>
                                        <input type="text" class=<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                                        <!-- bootstrap -->
                                      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
                                      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>"form-control" id="contactLastName">
                                    </div>
                                    <div class="form-group">
                                        <label for="jobTitle" class="form-label">Job title</label>
                                        <input type="text" class="form-control" id="jobTitle">
                                    </div>
                                    <div class="form-group">
                                        <label for="companyName" class="form-label">Company name</label>
                                        <input type="text" class="form-control" id="companyName">
                                    </div>
                                    <div class="form-group">
                                        <label for="countryName" class="form-label">Country <span
                                                class="req text-red">*</span></label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Country</option>
                                            <option value="">Dhaka</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="phonenumber" class="form-label">Phone number</label>
                                        <input type="text" class="form-control" id="phonenumber">
                                    </div>
                                    <div class="form-group">
                                        <label for="YourEnquiry" class="form-label">Your enquiry</label>
                                        <input type="text" class="form-control" id="YourEnquiry">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Enter the characters you see</label>
                                        <div class="d-flex align-items-center captcha-text">
                                            <a href="/" class="new-capcha">New</a>
                                            <a href="/" class="audio-capcha">Audio</a>
                                        </div>
                                        <div class="captcha-images">
                                            <img src="https://9452e698f89248789fe8b910eb456c04.svc.dynamics.com/f/captcha/challenge?fid=2958ab594407d8fe8d9da1323de36f12&type=visual&rnd=f4c2a8f1e468e14cffb76aa40ff333f9"
                                                alt="captcha">
                                        </div>
                                        <div class="captcha-input">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <button type="submit" class="primary-btn">Send message</button>
                                    <p class="fs-16">By sending this form, I agree to the <a href="/"
                                            style="color: #479CAA;">Privacy Policy</a>.</p>


                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end form -->
                </div>
            </div>
        </div>
    </section>
    <!-- work with us section -->
    <section class="work-us">
        <div class="left">
            <img src="https://placehold.co/200x200" alt="images" class="img-fluid">
        </div>
        <div class="right">
            <div class="right__top">
                <p class="fs-18 text-white">Come work with us</p>
                <h2 class="heading">Help create a positive impact on a global scale</h2>

            </div>
            <div class="right__bottom">
                <a href="/" class="readmore d-inline-flex align-items-center">Read more <svg class="icon ms-2"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="m17.586 11-5.5-5.5h2.828l5.794 5.793a1 1 0 0 1 0 1.414L14.915 18.5h-2.829l5.5-5.5H4l-2-1 2-1h13.586Z"
                            clip-rule="evenodd"></path>
                    </svg></a>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
@endsection
