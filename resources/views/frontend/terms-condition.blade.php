@extends('layouts.frontend.app')
@section('title', 'Terms & Condition')

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
    <section class="hero-section contact-hero">
      <!-- breadcumbs -->
      <div class="hero-section__content">
        <div class="container custom-container">
          <h1 class="big-heading">Fugro general purchase terms and conditions</h1>
        </div>
      </div>
    </section>
    <!-- terms condition -->
    <section class="terms-condition pt-5">
      <div class="container custom-container">
        <div class="row">
          <div class="col-md-10 mx-auto">
            <h4 class="fs-24 mb-5 pb-5 fw-400">The purchase of any products, services, and/or software, as well as the rental of products by Fugro Group companies is governed by the Fugro general purchase terms and conditions (“GTC”).</h4>
            <div class="group">
              <p>Supplier shall be considered to make their offer based on the applicable GTC. The GTC form part of and apply to any purchase order issued by Fugro Group companies. By accepting any purchase order from Fugro Group company, issuing an order acknowledgement or confirmation, or commencing to perform under Fugro Group company’s purchase order, supplier accepts and agrees to perform under the GTC. Notwithstanding the foregoing, the GTC do not apply in case that the business transaction between the Fugro Group company and the supplier is covered by a specific agreement executed between them.</p>
              <p>The GTC apply to the exclusion of any terms (e.g., any industry or supplier’s general terms and conditions) referred to in supplier’s offer, order confirmation or in any other communication/documentation which are explicitly rejected and have no force and effect.  </p>
              <p>The applicable GTC are determined according to the region in which the Fugro entity issuing the purchase order is incorporated:</p>
            </div>
            <div class="py-3"></div>
            <div class="technical__item">
              <div class="left">
                <p class="mb-0 text-white-light">01 Jan 2022</p>
              </div>
              <div class="middle">
                <p class="text-white-light dot mb-1"> Link</p>
                <p class="mb-0 fs-20">Embracing Digital Transformation </p>
              </div>
              <div class="right">
                <a href="/" class="link">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="currentColor" d="M5 20h14v2H5v-2Z"></path><path fill="currentColor" d="M5 20h14v2H5v-2Z"></path><path fill="#011E41" fill-rule="evenodd" d="m13 14.586 4-4v2.828l-4.293 4.293a1 1 0 0 1-1.414 0L7 13.414v-2.828l4 4V4l1-2 1 2v10.586Z" clip-rule="evenodd"></path></svg>
                </a>
              </div>
            </div>
            <div class="technical__item">
              <div class="left">
                <p class="mb-0 text-white-light">01 Jan 2022</p>
              </div>
              <div class="middle">
                <p class="text-white-light dot mb-1"> Link</p>
                <p class="mb-0 fs-20">Embracing Digital Transformation </p>
              </div>
              <div class="right">
                <a href="/" class="link">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="currentColor" d="M5 20h14v2H5v-2Z"></path><path fill="currentColor" d="M5 20h14v2H5v-2Z"></path><path fill="#011E41" fill-rule="evenodd" d="m13 14.586 4-4v2.828l-4.293 4.293a1 1 0 0 1-1.414 0L7 13.414v-2.828l4 4V4l1-2 1 2v10.586Z" clip-rule="evenodd"></path></svg>
                </a>
              </div>
            </div>
            <div class="technical__item">
              <div class="left">
                <p class="mb-0 text-white-light">01 Jan 2022</p>
              </div>
              <div class="middle">
                <p class="text-white-light dot mb-1"> Link</p>
                <p class="mb-0 fs-20">Embracing Digital Transformation </p>
              </div>
              <div class="right">
                <a href="/" class="link">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="currentColor" d="M5 20h14v2H5v-2Z"></path><path fill="currentColor" d="M5 20h14v2H5v-2Z"></path><path fill="#011E41" fill-rule="evenodd" d="m13 14.586 4-4v2.828l-4.293 4.293a1 1 0 0 1-1.414 0L7 13.414v-2.828l4 4V4l1-2 1 2v10.586Z" clip-rule="evenodd"></path></svg>
                </a>
              </div>
            </div>
            <div class="py-3"></div>
            <div class="group">
              <h3 class="fs-24">Archive</h3>
              <p>Please find below previous versions of Fugro general purchase terms and conditions:</p>

            </div>
            <div class="py-3"></div>
            <button class="primary-btn py-3 px-4">Download zip file</button>
          </div>
        </div>
      </div>
    </section>
    <div class="py-5"></div>
    <!--  -->
    <section class="work-us terms-work-us">
      <div class="left">
        <img src="https://placehold.co/762x500" alt="images" class="img-fluid">
      </div>
      <div class="right">
        <div class="right__top">
          <p class="fs-18 text-white">Our mission</p>
          <h2 class="heading">Creating a safe and liveable world</h2>
          <p class="fs-18 text-white">Tackling tomorrow’s problems</p>

        </div>
        <div class="right__bottom">
          <a href="/" class="readmore d-inline-flex align-items-center">Find out more <svg class="icon ms-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m17.586 11-5.5-5.5h2.828l5.794 5.793a1 1 0 0 1 0 1.414L14.915 18.5h-2.829l5.5-5.5H4l-2-1 2-1h13.586Z" clip-rule="evenodd"></path></svg></a>
        </div>
      </div>
    </section>
@endsection