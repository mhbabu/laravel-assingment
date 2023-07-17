@extends('layouts.frontend.app')
@section('title', 'Home')
@section('meta-data')

  {{-- {!! SEO::generate() !!} --}}
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
        <img src="https://placehold.co/1905x755" alt="" class="img-fluid">
        <div class="hero-section__content">
          <div class="container custom-container">
            <h1 class="big-heading">Creating a safe and liveable world</h1>
          </div>
        </div>
      </section>
      <!-- sticky menu -->
      <section class="sticky-menu">
        <div class="container custom-container">
          <div class="d-flex align-items-center">
            <p class="mb-0 me-5">Jump to</p>
            <div class="d-flex align-items-center">
              <a href="#energy" class="sticky-menu-item">Energy</a>
              <a href="#water" class="sticky-menu-item">Water</a>
              <a href="#infrastructure" class="sticky-menu-item">Infrastructure</a>
            </div>
          </div>
        </div>
      </section>
      <!-- what we do -->
      <section class="what-to-do">
        <div class="container custom-container">
          <div class="row">
            <div class="col-md-3">
              <h4 class="medium-heading">What we do</h4>
            </div>
            <div class="col-md-6">
              <p>Whatever you’re planning, building, or maintaining, we believe understanding the earth is key. At Fugro, we unlock its secrets in the form of Geo-data, which we apply to develop safer, more sustainable, and more efficient operations. It’s how we help create a safe and liveable world – together.</p>
              <a href="#" class="learn-more d-inline-flex align-items-center">Learn more <svg class="icon ms-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="M9 8 4 3h2.828l4.293 4.293a1 1 0 0 1 0 1.414L6.828 13H4l5-5Z" clip-rule="evenodd"></path></svg></a>
            </div>
          </div>
        </div>
      </section>
      <!-- energy section -->
      <section id="energy" class="energy sticky-menu-section">
        <div class="container custom-container">
          <a href="/" class="energy__content d-block">
            <img src="https://placehold.co/1320x883" alt="energy" class="img-fluid">
            <div class="energy__content__text">
              <p class="dot mb-1">Energy</p>
              <h2 class="heading">Supporting the energy transition for a safe and sustainable world</h2>
              <div class="d-flex align-items-center">
                <div class="box">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m17.586 11-5.5-5.5h2.828l5.794 5.793a1 1 0 0 1 0 1.414L14.915 18.5h-2.829l5.5-5.5H4l-2-1 2-1h13.586Z" clip-rule="evenodd"></path></svg>
                </div>
                <p class="mb-0 fs-18">View energy industries</p>
              </div>
            </div>
          </a>
        </div>
        <!-- energy item -->
        <div class="container custom-container mt-5">
          <div class="d-flex justify-content-between mb-3">
            <h3>Case studies in energy</h3>
            <a href="/" class="view-more text-red">All case studies <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></a>
          </div>
          <div class="grid-items">
            <a href="/" class="grid-items__list">
              <img src="https://placehold.co/648x485" alt="images" class="img-fluid">
              <p class="dot text-white-light fs-16 mb-1 mt-2">Case study</p>
              <h3 class="heading text-black mb-1">Site characterisation for Revolution Wind, Ørsted and Eversource</h3>
              <p class="address text-black mb-0">Rhode Island, USA</p>
            </a>
            <a href="/" class="grid-items__list">
              <img src="https://placehold.co/312x350" alt="images" class="img-fluid">
              <p class="dot text-white-light fs-16 mb-1 mt-2">Case study</p>
              <h3 class="heading text-black mb-1">Site characterisation for Revolution Wind, Ørsted and Eversource</h3>
              <p class="address text-black mb-0">Rhode Island, USA</p>
            </a>
            <a href="/" class="grid-items__list">
              <img src="https://placehold.co/312x350" alt="images" class="img-fluid">
              <p class="dot text-white-light fs-16 mb-1 mt-2">Case study</p>
              <h3 class="heading text-black mb-1">Site characterisation for Revolution Wind, Ørsted and Eversource</h3>
              <p class="address text-black mb-0">Rhode Island, USA</p>
            </a>
          </div>
        </div>
      </section>
      <!-- water section -->
      <section id="water" class="energy sticky-menu-section">
        <div class="container custom-container">
          <a href="/" class="energy__content d-block">
            <img src="https://placehold.co/1320x883" alt="energy" class="img-fluid">
            <div class="energy__content__text">
              <p class="dot mb-1">Energy</p>
              <h2 class="heading">Supporting the energy transition for a safe and sustainable world</h2>
              <div class="d-flex align-items-center">
                <div class="box">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m17.586 11-5.5-5.5h2.828l5.794 5.793a1 1 0 0 1 0 1.414L14.915 18.5h-2.829l5.5-5.5H4l-2-1 2-1h13.586Z" clip-rule="evenodd"></path></svg>
                </div>
                <p class="mb-0 fs-18">View energy industries</p>
              </div>
            </div>
          </a>
        </div>
        <!-- energy item -->
        <div class="container custom-container mt-5">
          <div class="d-flex justify-content-between mb-3">
            <h3>Case studies in energy</h3>
            <a href="/" class="view-more text-red">All case studies <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></a>
          </div>
          <div class="grid-items">
            <a href="/" class="grid-items__list">
              <img src="https://placehold.co/648x485" alt="images" class="img-fluid">
              <p class="dot text-white-light fs-16 mb-1 mt-2">Case study</p>
              <h3 class="heading text-black mb-1">Site characterisation for Revolution Wind, Ørsted and Eversource</h3>
              <p class="address text-black mb-0">Rhode Island, USA</p>
            </a>
            <a href="/" class="grid-items__list">
              <img src="https://placehold.co/312x350" alt="images" class="img-fluid">
              <p class="dot text-white-light fs-16 mb-1 mt-2">Case study</p>
              <h3 class="heading text-black mb-1">Site characterisation for Revolution Wind, Ørsted and Eversource</h3>
              <p class="address text-black mb-0">Rhode Island, USA</p>
            </a>
            <a href="/" class="grid-items__list">
              <img src="https://placehold.co/312x350" alt="images" class="img-fluid">
              <p class="dot text-white-light fs-16 mb-1 mt-2">Case study</p>
              <h3 class="heading text-black mb-1">Site characterisation for Revolution Wind, Ørsted and Eversource</h3>
              <p class="address text-black mb-0">Rhode Island, USA</p>
            </a>
          </div>
        </div>
      </section>
      <!-- infrastructure section -->
      <section id="infrastructure" class="energy sticky-menu-section">
        <div class="container custom-container">
          <a href="/" class="energy__content d-block">
            <img src="https://placehold.co/1320x883" alt="energy" class="img-fluid">
            <div class="energy__content__text">
              <p class="dot mb-1">Energy</p>
              <h2 class="heading">Supporting the energy transition for a safe and sustainable world</h2>
              <div class="d-flex align-items-center">
                <div class="box">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m17.586 11-5.5-5.5h2.828l5.794 5.793a1 1 0 0 1 0 1.414L14.915 18.5h-2.829l5.5-5.5H4l-2-1 2-1h13.586Z" clip-rule="evenodd"></path></svg>
                </div>
                <p class="mb-0 fs-18">View energy industries</p>
              </div>
            </div>
          </a>
        </div>
        <!-- energy item -->
        <div class="container custom-container mt-5">
          <div class="d-flex justify-content-between mb-3">
            <h3>Case studies in energy</h3>
            <a href="/" class="view-more text-red">All case studies <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></a>
          </div>
          <div class="grid-items">
            <a href="/" class="grid-items__list">
              <img src="https://placehold.co/648x485" alt="images" class="img-fluid">
              <p class="dot text-white-light fs-16 mb-1 mt-2">Case study</p>
              <h3 class="heading text-black mb-1">Site characterisation for Revolution Wind, Ørsted and Eversource</h3>
              <p class="address text-black mb-0">Rhode Island, USA</p>
            </a>
            <a href="/" class="grid-items__list">
              <img src="https://placehold.co/312x350" alt="images" class="img-fluid">
              <p class="dot text-white-light fs-16 mb-1 mt-2">Case study</p>
              <h3 class="heading text-black mb-1">Site characterisation for Revolution Wind, Ørsted and Eversource</h3>
              <p class="address text-black mb-0">Rhode Island, USA</p>
            </a>
            <a href="/" class="grid-items__list">
              <img src="https://placehold.co/312x350" alt="images" class="img-fluid">
              <p class="dot text-white-light fs-16 mb-1 mt-2">Case study</p>
              <h3 class="heading text-black mb-1">Site characterisation for Revolution Wind, Ørsted and Eversource</h3>
              <p class="address text-black mb-0">Rhode Island, USA</p>
            </a>
          </div>
        </div>
      </section>
      <!-- work with us section -->
      <section class="work-us">
        <div class="left">
          <img src="https://placehold.co/762x700" alt="images" class="img-fluid">
        </div>
        <div class="right">
          <div class="right__top">
            <p class="fs-18 text-white">Come work with us</p>
            <h2 class="heading">Help create a positive impact on a global scale</h2>

          </div>
          <div class="right__bottom">
            <a href="/" class="readmore d-inline-flex align-items-center">Read more <svg class="icon ms-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m17.586 11-5.5-5.5h2.828l5.794 5.793a1 1 0 0 1 0 1.414L14.915 18.5h-2.829l5.5-5.5H4l-2-1 2-1h13.586Z" clip-rule="evenodd"></path></svg></a>
          </div>
        </div>
      </section>
@endsection