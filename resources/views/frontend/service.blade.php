@extends('layouts.frontend.app')
@section('title', 'Service')
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
  <img src="https://placehold.co/1905x755" alt="" class="img-fluid">
  <nav aria-label="breadcrumb" class="breadcrumb-nav">
    <ol class="breadcrumb container custom-container">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Library</li>
    </ol>
  </nav>
  <div class="hero-section__content">
    <div class="container custom-container">
      <p class="fs-20 text-white mb-0">Energy</p>
      <h1 class="big-heading">Supporting the energy transition for a safe and sustainable world</h1>
    </div>
  </div>
</section>
<!-- sticky menu -->
<section class="sticky-menu">
  <div class="container custom-container">
    <div class="d-flex align-items-center">
      <p class="mb-0 me-5">Jump to</p>
      <div class="d-flex align-items-center">
        <a href="#ourviews" class="sticky-menu-item">Our views</a>
        <a href="#casestudy" class="sticky-menu-item">Case studies</a>
        <a href="#newsreads" class="sticky-menu-item">News and long reads</a>
        <a href="#technicalpappers" class="sticky-menu-item">Technical papers</a>
        <a href="#subindustries" class="sticky-menu-item">Sub industries</a>
        <a href="#contact" class="sticky-menu-item">Contact</a>
      </div>
    </div>
  </div>
</section>
<!-- what we do -->
<section id="ourviews" class="what-to-do">
  <div class="container custom-container">
    <div class="row">
      <div class="col-md-3">
        <h4 class="medium-heading">Our view on energy</h4>
      </div>
      <div class="col-md-6">
        <p>Whatever you’re planning, building, or maintaining, we believe understanding the earth is key. At Fugro, we unlock its secrets in the form of Geo-data, which we apply to develop safer, more sustainable, and more efficient operations. It’s how we help create a safe and liveable world – together.</p>
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
<!-- energy section -->
<section id="casestudy"  class="energy sticky-menu-section our-views">
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
  <div class="line"></div>
  <!-- energy item -->
  <div class="container custom-container mt-5">
    <div class="d-flex justify-content-between mb-3">
      <h3>Case studies in energy</h3>
      <a href="{{ url('service/details') }}" class="view-more text-red">All case studies <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></a>
    </div>
    <div class="grid-items">
      <a href="{{ url('service/details') }}" class="grid-items__list">
        <img src="https://placehold.co/648x350" alt="images" class="img-fluid">
        <p class="dot text-white-light fs-16 mb-1 mt-2">Case study</p>
        <h3 class="heading text-black mb-1">Site characterisation for Revolution Wind, Ørsted and Eversource</h3>
        <p class="address text-black mb-0">Rhode Island, USA</p>
      </a>
      <a href="{{ url('service/details') }}" class="grid-items__list">
        <img src="https://placehold.co/312x350" alt="images" class="img-fluid">
        <p class="dot text-white-light fs-16 mb-1 mt-2">Case study</p>
        <h3 class="heading text-black mb-1">Site characterisation for Revolution Wind, Ørsted and Eversource</h3>
        <p class="address text-black mb-0">Rhode Island, USA</p>
      </a>
      <a href="{{ url('service/details') }}" class="grid-items__list">
        <img src="https://placehold.co/312x350" alt="images" class="img-fluid">
        <p class="dot text-white-light fs-16 mb-1 mt-2">Case study</p>
        <h3 class="heading text-black mb-1">Site characterisation for Revolution Wind, Ørsted and Eversource</h3>
        <p class="address text-black mb-0">Rhode Island, USA</p>
      </a>
    </div>
    <div class="grid-items service-grid-items">
      <a href="{{ url('service/details') }}" class="grid-items__list">
        <img src="https://placehold.co/312x350" alt="images" class="img-fluid">
        <p class="dot text-white-light fs-16 mb-1 mt-2">Case study</p>
        <h3 class="heading text-black mb-1">Site characterisation for Revolution Wind, Ørsted and Eversource</h3>
        <p class="address text-black mb-0">Rhode Island, USA</p>
      </a>
      <a href="{{ url('service/details') }}" class="grid-items__list">
        <img src="https://placehold.co/648x432" alt="images" class="img-fluid">
        <p class="dot text-white-light fs-16 mb-1 mt-2">Case study</p>
        <h3 class="heading text-black mb-1">Site characterisation for Revolution Wind, Ørsted and Eversource</h3>
        <p class="address text-black mb-0">Rhode Island, USA</p>
      </a>
      <a href="{{ url('service/details') }}" class="grid-items__list">
        <img src="https://placehold.co/312x350" alt="images" class="img-fluid">
        <p class="dot text-white-light fs-16 mb-1 mt-2">Case study</p>
        <h3 class="heading text-black mb-1">Site characterisation for Revolution Wind, Ørsted and Eversource</h3>
        <p class="address text-black mb-0">Rhode Island, USA</p>
      </a>
    </div>
  </div>
</section>
<!-- slider -->
<section class="slider energy-slider" id="newsreads">
  <div class="container custom-container">
    <div class="owl-carousel service-owl" >
      <div class="item">
        <div class="left-div">
          <p>Long read</p>
          <h2 class="fs-48 text-black">Looking ahead at the offshore wind operations and maintenance market </h2>
          <p class="fs-24">We help clients predict their energy output at a certain moment in time and advise whether it’s more cost-effective for the turbines to be on or off.</p>
        </div>
        <div class="right-div">
          <img src="https://placehold.co/660x760" alt="Image 1" class="img-fluid">
        </div>
      </div>
      <div class="item">
        <div class="left-div">
          <h2>Heading 2</h2>
          <p>Paragraph text 2</p>
        </div>
        <div class="right-div">
          <img src="https://placehold.co/660x760" alt="Image 2" class="img-fluid">
        </div>
      </div>
      <div class="item">
        <div class="left-div">
          <h2>Heading 3</h2>
          <p>Paragraph text 3</p>
        </div>
        <div class="right-div">
          <img src="https://placehold.co/660x760" alt="Image 2" class="img-fluid">
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
        <a href="/" class="text-black">Read more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></a>
        <div class="d-flex align-items-center">
          <span class="counter">1</span>
          <div class="d-flex ms-3">
            <button class="prev-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m7 8 5-5H9.172L4.879 7.293a1 1 0 0 0 0 1.414L9.172 13H12L7 8Z" clip-rule="evenodd"></path></svg></button>
            <button class="next-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="M9 8 4 3h2.828l4.293 4.293a1 1 0 0 1 0 1.414L6.828 13H4l5-5Z" clip-rule="evenodd"></path></svg></button>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</section>
<!-- technical -->
<section class="technical" id="technicalpappers">
  <div class="container custom-container">
    <div class="d-flex justify-content-between mb-5">
      <h2>Technical papers</h2>
      <a href="/" class="fs-18 text-red">All technical papers <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></a>
    </div>
    <div class="technical__item">
      <div class="left">
        <p class="mb-0 text-white-light">01 Jan 2022</p>
      </div>
      <div class="middle">
        <p class="text-white-light dot mb-1"> Link</p>
        <p class="mb-0 fs-20">Optimisation of Predictions for Driven Piles Performance in Carbonate Silts for Offshore Structures in the Arabian Gulf

        </p>
      </div>
      <div class="right">
        <a href="/" class="link">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="#011E41" fill-rule="evenodd" d="M17.578 5H11.92l2-2h6.071a1 1 0 0 1 1 1v6.07l-2 2V6.414l-7.485 7.485-2.121.707.707-2.121 7.485-7.486Z" clip-rule="evenodd"></path><path fill="#011E41" fill-rule="evenodd" d="m8.92 5 2-2H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-6.938l-2 2V19H5V5h3.92Z" clip-rule="evenodd"></path></svg>
        </a>
      </div>
    </div>
    <div class="technical__item">
      <div class="left">
        <p class="mb-0 text-white-light">01 Jan 2022</p>
      </div>
      <div class="middle">
        <p class="text-white-light dot mb-1"> Link</p>
        <p class="mb-0 fs-20">Ore Structures in the Arabian Gulf

        </p>
      </div>
      <div class="right">
        <a href="#" class="link">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="#011E41" fill-rule="evenodd" d="M17.578 5H11.92l2-2h6.071a1 1 0 0 1 1 1v6.07l-2 2V6.414l-7.485 7.485-2.121.707.707-2.121 7.485-7.486Z" clip-rule="evenodd"></path><path fill="#011E41" fill-rule="evenodd" d="m8.92 5 2-2H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-6.938l-2 2V19H5V5h3.92Z" clip-rule="evenodd"></path></svg>
        </a>
      </div>
    </div>
    <div class="technical__item">
      <div class="left">
        <p class="mb-0 text-white-light">01 Jan 2022</p>
      </div>
      <div class="middle">
        <p class="text-white-light dot mb-1"> Link</p>
        <p class="mb-0 fs-20"> for Offshore Structures in the Arabian Gulf

        </p>
      </div>
      <div class="right">
        <a href="/" class="link">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="#011E41" fill-rule="evenodd" d="M17.578 5H11.92l2-2h6.071a1 1 0 0 1 1 1v6.07l-2 2V6.414l-7.485 7.485-2.121.707.707-2.121 7.485-7.486Z" clip-rule="evenodd"></path><path fill="#011E41" fill-rule="evenodd" d="m8.92 5 2-2H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-6.938l-2 2V19H5V5h3.92Z" clip-rule="evenodd"></path></svg>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- sub industries -->
<section class="sub-indrustries" id="subindustries">
  <div class="container custom-container">
    <h3 class="fs-28 mb-3">Sub industries</h3>
    <div class="grid-items">
      <a href="{{ url('service/details') }}" class="grid-items__list">
        <img src="https://placehold.co/648x432" alt="images" class="img-fluid">
        <p class="dot text-white-light fs-16 mb-1 mt-2">Case study</p>
        <h3 class="heading text-black mb-1">Renewable energy</h3>
      </a>
      <a href="{{ url('service/details') }}" class="grid-items__list">
        <img src="https://placehold.co/648x432" alt="images" class="img-fluid">
        <h3 class="heading text-black mt-1">Oil and gas</h3>
      </a>
    </div>
  </div>
</section>
<!-- contact -->
<section id="contact" class="contact">
  <div class="container custom-container">
    <div class="row">
      <div class="col-md-6">
        <h2 class="text-black fs-28">Contact</h2>
      </div>
      <div class="col-md-6">
        <h2 class="fs-48 mb-0">Get in touch for</h2>
        <h2 style="color: rgb(129, 142, 160);" class="fs-48 mb-0">Energy services</h2>
        <div class="profile d-flex mt-5">
          <div class="left">
            <img src="https://placehold.co/144x144" alt="fugro images">
          </div>
          <div class="right d-flex flex-column ms-3">
            <div class="top">
              <p class="mb-0 fs-18">Remmelt de Jong</p>
              <p class="fs-18 text-white-light">Industry lead - Energy</p>
            </div>
            <div class="mt-auto">
              <button class="contact-action-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Contact Remmelt de Jong <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></button>
            </div>
            <!-- contact item -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
              <div class="offcanvas-header">
                
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <h1 class="mb-0 fs-48">Get in touch with</h1>
              <h1 class="fs-48" style="color: rgb(129, 142, 160);">Remmelt de Jong</h1>
              <div class="offcanvas-body">
                <div class="profile-details">
                  <img src="https://placehold.co/200x200" alt="images" class="img-fluid w-100">
                  <p class="fs-20 text-black mb-0">Remmelt de Jong</p>
                  <p class="fs-20" style="color: rgb(72, 93, 118);">Industry lead - Energy</p>
                </div>
                <div class="form-content">
                  <form action="">
                    <div class="form-group">
                      <label for="contactFirstName" class="form-label">Last name <span class="req text-red">*</span></label>
                      <input type="text" class="form-control" id="contactFirstName">
                    </div>
                    <div class="form-group">
                      <label for="contactLastName" class="form-label">Last name <span class="req text-red">*</span></label>
                      <input type="text" class="form-control" id="contactLastName">
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
                      <label for="countryName" class="form-label">Country <span class="req text-red">*</span></label>
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
                        <img src="https://placehold.co/216x96" alt="captcha">
                      </div>
                      <div class="captcha-input">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <button type="submit" class="primary-btn">Send message</button>
                    <p class="fs-16">By sending this form, I agree to the <a href="/" style="color: #479CAA;">Privacy Policy</a>.</p>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
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
      <a href="{{ url('service/details') }}" class="readmore d-inline-flex align-items-center">Read more <svg class="icon ms-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m17.586 11-5.5-5.5h2.828l5.794 5.793a1 1 0 0 1 0 1.414L14.915 18.5h-2.829l5.5-5.5H4l-2-1 2-1h13.586Z" clip-rule="evenodd"></path></svg></a>
    </div>
  </div>
</section>
@endsection