@extends('layouts.frontend.app')
@section('title', 'Contact US')

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
      <h1 class="big-heading">Contact us</h1>
    </div>
  </div>
</section>
<!-- contact -->
<section class="what-to-do contact-headline">
  <div class="container custom-container">
    <div class="row">
      <div class="col-md-3">
        <h4 class="medium-heading">Contact</h4>
      </div>
      <div class="col-md-6">
        <p> Do you have a question about our company or services? 
          Please choose from the options below to find the best way 
          to contact us. You can find details of our offices around 
          the world on our locations page.</p>
        <a href="/" class="text-red d-inline-block mt-1">See our location <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="M9 8 4 3h2.828l4.293 4.293a1 1 0 0 1 0 1.414L6.828 13H4l5-5Z" clip-rule="evenodd"></path></svg></a>

      </div>
    </div>
  </div>
</section>
<!-- contact -->
<section class="contact main-contact">
  <div class="container custom-container">
    <div class="row">
      <div class="col-md-6">
        <h2 class="text-black fs-28">Media and investor relations</h2>
      </div>
      <div class="col-md-6">
        <h2 class="fs-48 mb-0">Contact</h2>
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
                <button class="contact-action-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Contact Remmelt de Jong <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></button>
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
                <button class="contact-action-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Contact Remmelt de Jong <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></button>
              </div>
            </div>
          </div>
        </div>
        <!-- contact item form -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
          <div class="offcanvas-header">
            
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <h1 class="mb-0 fs-48">Get in touch with</h1>
          <h1 class="fs-48" style="color: rgb(129, 142, 160);">Remmelt de Jong</h1>
          <div class="offcanvas-body">
            <div class="profile-details">
              <img src="https://placehold.co/180x180" alt="images" class="img-fluid w-100">
              <p class="fs-20 text-black mb-0">Remmelt de Jong</p>
              <p class="fs-20" style="color: rgb(72, 93, 118);">Industry lead - Energy</p>
              <a href="tel:+31 70 31 11129" class="text-red underline">+31 70 31 11129</a>
            </div>
            <div class="form-content">
              <form action="">
                <div class="form-group">
                  <label for="contactFirstName" class="form-label">First name</label>
                  <input type="text" class="form-control" id="contactFirstName">
                </div>
                <div class="form-group">
                  <label for="contactLastName" class="form-label">Last name </label>
                  <input type="text" class="form-control" id="contactLastName">
                </div>
                <div class="form-group">
                  <label for="companyName" class="form-label">Company name</label>
                  <input type="text" class="form-control" id="companyName">
                </div>
                <div class="form-group">
                  <label for="companyEmail" class="form-label">Email</label>
                  <input type="email" class="form-control" id="companyEmail">
                </div>
                <div class="form-group">
                  <label for="phonenumber" class="form-label">Phone number</label>
                  <div class="number-list position-relative">
                    <select name="" id="">
                      <option value="">Select</option>
                      <option value="+93">Afganisthan (+93)</option>
                      <option value="">Bangladesh (+88)</option>
                    </select>
                    <span class="line"></span>
                    <input type="text" class="form-control" id="phonenumber">
                  </div>
                  
                </div>
                <div class="form-group">
                  <label for="question" class="form-label">What’s your question?</label>
                  <textarea itemid="question" name="" cols="30" rows="6" class="form-control w-100"></textarea>
                </div>

                <button type="submit" class="primary-btn">Send message</button>
                
                
              </form>
            </div>
          </div>
        </div>
        <!-- end form -->
      </div>
    </div>
  </div>
</section>
<section class="contact supplier-contact">
  <div class="container custom-container">
    <div class="row">
      <div class="col-md-6">
        <h2 class="text-black fs-28">Suppliers</h2>
      </div>
      <div class="col-md-6">
        <h2 class="fs-48 mb-0">Contact</h2>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-12">
        <div class="contact-grid">
          <div class="profile d-flex">
            <div class="left">
              <img src="https://placehold.co/180x180" alt="fugro images">
            </div>
            <div class="right d-flex flex-column ms-3">
              <div class="top">
                <p class="mb-0 fs-18">Remmelt de Jong</p>
                <p class="fs-18 text-white-light">Industry lead - Energy</p>
              </div>
              <div class="mt-auto">
                <button class="contact-action-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Contact Remmelt de Jong <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></button>
              </div>
            </div>
          </div>
          <div class="profile d-flex">
            <div class="left">
              <img src="https://placehold.co/180x180" alt="fugro images">
            </div>
            <div class="right d-flex flex-column ms-3">
              <div class="top">
                <p class="mb-0 fs-18">Remmelt de Jong</p>
                <p class="fs-18 text-white-light">Industry lead - Energy</p>
              </div>
              <div class="mt-auto">
                <button class="contact-action-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Contact Remmelt de Jong <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></button>
              </div>
            </div>
          </div>
        </div>
        <!-- contact item form -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
          <div class="offcanvas-header">
            
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <h1 class="mb-0 fs-48">Get in touch with</h1>
          <h1 class="fs-48" style="color: rgb(129, 142, 160);">Remmelt de Jong</h1>
          <div class="offcanvas-body">
            <div class="profile-details">
              <img src="https://placehold.co/180x180" alt="images" class="img-fluid w-100">
              <p class="fs-20 text-black mb-0">Remmelt de Jong</p>
              <p class="fs-20" style="color: rgb(72, 93, 118);">Industry lead - Energy</p>
              <a href="tel:+31 70 31 11129" class="text-red underline">+31 70 31 11129</a>
            </div>
            <div class="form-content">
              <form action="">
                <div class="form-group">
                  <label for="contactFirstName" class="form-label">First name</label>
                  <input type="text" class="form-control" id="contactFirstName">
                </div>
                <div class="form-group">
                  <label for="contactLastName" class="form-label">Last name </label>
                  <input type="text" class="form-control" id="contactLastName">
                </div>
                <div class="form-group">
                  <label for="companyName" class="form-label">Company name</label>
                  <input type="text" class="form-control" id="companyName">
                </div>
                <div class="form-group">
                  <label for="companyEmail" class="form-label">Email</label>
                  <input type="email" class="form-control" id="companyEmail">
                </div>
                <div class="form-group">
                  <label for="phonenumber" class="form-label">Phone number</label>
                  <div class="number-list position-relative">
                    <select name="" id="">
                      <option value="">Select</option>
                      <option value="+93">Afganisthan (+93)</option>
                      <option value="">Bangladesh (+88)</option>
                    </select>
                    <span class="line"></span>
                    <input type="text" class="form-control" id="phonenumber">
                  </div>
                  
                </div>
                <div class="form-group">
                  <label for="question" class="form-label">What’s your question?</label>
                  <textarea itemid="question" name="" cols="30" rows="6" class="form-control w-100"></textarea>
                </div>

                <button type="submit" class="primary-btn">Send message</button>
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
 <section class="work-us contact-work-us">
  <div class="left">
    <img src="https://placehold.co/762x700" alt="images" class="img-fluid">
  </div>
  <div class="right">
    <div class="right__top">
      
      <h2 class="heading text-black fs-68 mb-3">What we do at Fugro</h2>
      <p class="fs-20 text-black">The more you know, the smaller the risk</p>

    </div>
    <div class="right__bottom">
      <a href="/" class="readmore d-inline-flex align-items-center">Read more <svg class="icon ms-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m17.586 11-5.5-5.5h2.828l5.794 5.793a1 1 0 0 1 0 1.414L14.915 18.5h-2.829l5.5-5.5H4l-2-1 2-1h13.586Z" clip-rule="evenodd"></path></svg></a>
    </div>
  </div>
</section>
@endsection