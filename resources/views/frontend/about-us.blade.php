@extends('layouts.frontend.app')
@section('title', 'About US')

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
  <div class="hero-section__content">
    <div class="container custom-container">
      <p class="mb-0 text-white fs-20">About us</p>
      <h1 class="big-heading">The world’s leading Geo-data specialist</h1>
    </div>
  </div>
</section>
<!-- sticky menu -->
<section class="sticky-menu">
  <div class="container custom-container">
    <div class="d-flex align-items-center">
      <p class="mb-0 me-5">Jump to</p>
      <div class="d-flex align-items-center">
        <a href="#whatwedo" class="sticky-menu-item"> What we do</a>
        <a href="#purpose" class="sticky-menu-item">Purpose</a>
        <a href="#values" class="sticky-menu-item">Values</a>
        <a href="#strategy" class="sticky-menu-item">Strategy</a>
        <a href="#moreexplore" class="sticky-menu-item">More explore</a>
      </div>
    </div>
  </div>
</section>
 <!-- what we do -->
 <section class="what-to-do" id="whatwedo">
  <div class="container custom-container">
    <div class="row">
      <div class="col-md-12">
        <h6 class="medium-heading fs-18">What we do</h4>
      </div>
      <div class="col-md-7">
        <h2 class="fs-48 mb-3">Helping people understand Earth since 1962</h2>
        <p class="fs-18">We use the power of Geo-data to unlock the secrets of Earth. From surface to subsurface, natural to built environment. Together with our partners and clients, we’re building a safer and more liveable world.</p>
        <a href="#" class="learn-more d-inline-flex align-items-center fs-16">Discover more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></a>
      </div>
    </div>
  </div>
</section>
<!-- count down -->
<section class="count-down">
  <div class="container custom-container">
    <div class="count-down__item d-flex justify-content-between">
      <div class="number">
        <h2 class="fs-48 mb-0">11009</h2>
        <p class="text-white-light  mb-0">Employees</p>
      </div>
      <div class="content">
        <h4 class="fs-24">Team of experts</h4>
        <p class="mb-0 fs-20">Technology and equipment are one thing, but the real key to our success? Our people. Fugro is home to expertise and talent from more than 100 different countries.</p>
      </div>
    </div>
    <div class="count-down__item d-flex justify-content-between">
      <div class="number">
        <h2 class="fs-48 mb-0">11009</h2>
        <p class="text-white-light  mb-0">Employees</p>
      </div>
      <div class="content">
        <h4 class="fs-24">Team of experts</h4>
        <p class="mb-0 fs-20">Technology and equipment are one thing, but the real key to our success? Our people. Fugro is home to expertise and talent from more than 100 different countries.</p>
      </div>
    </div>
    <div class="count-down__item d-flex justify-content-between">
      <div class="number">
        <h2 class="fs-48 mb-0">11009</h2>
        <p class="text-white-light  mb-0">Employees</p>
      </div>
      <div class="content">
        <h4 class="fs-24">Team of experts</h4>
        <p class="mb-0 fs-20">Technology and equipment are one thing, but the real key to our success? Our people. Fugro is home to expertise and talent from more than 100 different countries.</p>
      </div>
    </div>
  </div>
</section>
<!-- Purpose -->
<section class="purpose" id="purpose">
  <div class="container custom-container">
    <div class="row">
      <div class="col-md-12">
        <h6 class="medium-heading fs-20">Purpose</h4>
      </div>
      <div class="col-md-7">
        <h2 class="fs-48 mb-3">Creating a safe and liveable world together</h2>
        <p class="fs-20">Our work is bigger than individual projects. That’s what we believe. We aim to contribute to a world where nature is protected and people can thrive.</p>
      </div>
    </div>
  </div>
  <div class="line"></div>
  <!-- purpose banner -->
  <div class="container custom-container">
    <div class="purpose__banner">
      <div class="left">
        <img src="https://placehold.co/554x554" alt="fugro" class="img-fluid">
      </div>
      <div class="right d-flex flex-column">
        <div class="top">
          <p class="fs-18 mb-2">Purpose</p>
          <h2 class="fs-48">Keeping the bigger picture in mind</h2>
        </div>
        <div class="bottom mt-auto">
          <a href="/" class="text-black fs-16">More about our purpose <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m17.586 11-5.5-5.5h2.828l5.794 5.793a1 1 0 0 1 0 1.414L14.915 18.5h-2.829l5.5-5.5H4l-2-1 2-1h13.586Z" clip-rule="evenodd"></path></svg></a>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- values -->
<section class="values" id="values">
  <div class="container custom-container">
    <div class="row">
      <div class="col-md-12">
        <h6 class="medium-heading fs-20">Values</h4>
      </div>
      <div class="col-md-7">
        <h2 class="fs-48 mb-3">Four guiding principles</h2>
        <p class="fs-24">We live by four distinct values. Each one as important as the other, their sum represents our strength as a team.</p>
      </div>
    </div>
  </div>
  <div class="line"></div>
  <!-- values holder -->
  <div class="container custom-container">
    <h1 class="fs-48 mb-1">Our values</h1>
    <a href="/" class="text-red fs-20 d-inline-block mb-4">More about our values <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></a>
        <div class="scroll-reveal-section">
          <div class="item">
            <div class="image-holder">
              <img src="https://placehold.co/517x690">
            </div>
            <div class="text-holder">
              <h1 class="fs-48 text-gray-light mb-1">01</h1>
              <h1 class="fs-48 mb-1">We are determined to deliver</h1>
              <p class="fs-24">Distinctively exploit optimal alignments for intuitive bandwidth. Quickly coordinate e-business applications through revolutionary catalysts for change. Seamlessly underwhelm optimal testing procedures whereas bricks-and-clicks processes.</p>
            </div>
          </div>
          <div class="item">
            <div class="image-holder">
              <img src="https://placehold.co/517x690">
            </div>
            <div class="text-holder">
              <h1 class="fs-48 text-gray-light mb-1">02</h1>
              <h1 class="fs-48 mb-1">We are determined to deliver</h1>
              <p class="fs-24">Distinctively exploit optimal alignments for intuitive bandwidth. Quickly coordinate e-business applications through revolutionary catalysts for change. Seamlessly underwhelm optimal testing procedures whereas bricks-and-clicks processes.</p>
            </div>
        
          </div>
          <div class="item">
            <div class="image-holder">
              <img src="https://placehold.co/517x690">
            </div>
            <div class="text-holder">
              <h1 class="fs-48 text-gray-light mb-1">03</h1>
              <h1 class="fs-48 mb-1">We are determined to deliver</h1>
              <p class="fs-24">Distinctively exploit optimal alignments for intuitive bandwidth. Quickly coordinate e-business applications through revolutionary catalysts for change. Seamlessly underwhelm optimal testing procedures whereas bricks-and-clicks processes.</p>
            </div>
          </div>
          
        </div>
  </div>
</section>
 <!-- Strategy -->
 <section class="strategy" id="strategy">
  <div class="container custom-container">
    <div class="row">
      <div class="col-md-12">
        <h6 class="medium-heading fs-20">Strategy</h4>
      </div>
      <div class="col-md-7">
        <h2 class="fs-48 mb-3">Three strategic pillars</h2>
        <p class="fs-20">To be able to create a safer, more liveable world, we aim for growth, better pricing, higher productivity, and more sustainability. Our strategy is based on these three pillars.</p>
        
      </div>
    </div>
  </div>
  <div class="line"></div>
  <!-- coount down -->
  <div class="container custom-container">
    <h2 class="fs-48">Strategy</h2>
    <a href="#" class="learn-more d-inline-flex align-items-center fs-18 text-red">More about our strategy <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></a>
    <div class="count-down__item d-flex justify-content-between mt-4">
      <div class="number">
        <h2 class="fs-48 mb-0">1</h2>
        <p class="text-white-light  mb-0">Employees</p>
      </div>
      <div class="content">
        <h4 class="fs-24">Team of experts</h4>
        <p class="mb-0 fs-20">Technology and equipment are one thing, but the real key to our success? Our people. Fugro is home to expertise and talent from more than 100 different countries.</p>
      </div>
    </div>
    <div class="count-down__item d-flex justify-content-between">
      <div class="number">
        <h2 class="fs-48 mb-0">2</h2>
        <p class="text-white-light  mb-0">Employees</p>
      </div>
      <div class="content">
        <h4 class="fs-24">Team of experts</h4>
        <p class="mb-0 fs-20">Technology and equipment are one thing, but the real key to our success? Our people. Fugro is home to expertise and talent from more than 100 different countries.</p>
      </div>
    </div>
    <div class="count-down__item d-flex justify-content-between">
      <div class="number">
        <h2 class="fs-48 mb-0">3</h2>
        <p class="text-white-light  mb-0">Employees</p>
      </div>
      <div class="content">
        <h4 class="fs-24">Team of experts</h4>
        <p class="mb-0 fs-20">Technology and equipment are one thing, but the real key to our success? Our people. Fugro is home to expertise and talent from more than 100 different countries.</p>
      </div>
    </div>
  </div>
</section>
<!-- More to explore -->
<section class="more-explore" id="moreexplore">
  <div class="container custom-container">
    <h3 class="fs-28">More to explore</h3>
    <div class="more-explore__content pt-4">
      <div class="more-explore__content__item">
        <h3 class="fs-24">Locations</h3>
        <p class="fs-18">We work in all corners of the world. Find a Fugro location near you.</p>
        <a href="/" class="learnmore">Learn more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></a>
      </div>
      <div class="more-explore__content__item">
        <h3 class="fs-24">Locations</h3>
        <p class="fs-18">We work in all corners of the world. Find a Fugro location near you.</p>
        <a href="/" class="learnmore">Learn more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></a>
      </div>
      <div class="more-explore__content__item">
        <h3 class="fs-24">Locations</h3>
        <p class="fs-18">We work in all corners of the world. Find a Fugro location near you.</p>
        <a href="/" class="learnmore">Learn more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></a>
      </div>
      <div class="more-explore__content__item">
        <h3 class="fs-24">Locations</h3>
        <p class="fs-18">We work in all corners of the world. Find a Fugro location near you.</p>
        <a href="/" class="learnmore">Learn more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></a>
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
      <a href="/" class="readmore d-inline-flex align-items-center">Read more <svg class="icon ms-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m17.586 11-5.5-5.5h2.828l5.794 5.793a1 1 0 0 1 0 1.414L14.915 18.5h-2.829l5.5-5.5H4l-2-1 2-1h13.586Z" clip-rule="evenodd"></path></svg></a>
    </div>
  </div>
</section>
@endsection