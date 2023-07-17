@extends('layouts.frontend.app')
@section('title', 'Project')

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
      <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Library</li>
    </ol>
  </nav>
  <div class="hero-section__content">
    <div class="container custom-container">
      <p class="mb-0 text-white fs-20">Our expertise</p>
      <h1 class="big-heading">We transform Geo-data into actionable insights</h1>
    </div>
  </div>
</section>
<!-- More to explore -->
<section class="more-explore project-more-explr" id="moreexplore">
  <div class="container custom-container">
    <h3 class="fs-28">More to explore</h3>
    <div class="more-explore__content pt-4">
      <div class="more-explore__content__item">
        <h3 class="fs-24">Locations</h3>
        <p class="fs-18">We work in all corners of the world. Find a Fugro location near you.</p>
        <a href="{{ url('project/details') }}" class="learnmore">Learn more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></a>
      </div>
      <div class="more-explore__content__item">
        <h3 class="fs-24">Locations</h3>
        <p class="fs-18">We work in all corners of the world. Find a Fugro location near you.</p>
        <a href="{{ url('project/details') }}" class="learnmore">Learn more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></a>
      </div>
      <div class="more-explore__content__item">
        <h3 class="fs-24">Locations</h3>
        <p class="fs-18">We work in all corners of the world. Find a Fugro location near you.</p>
        <a href="{{ url('project/details') }}" class="learnmore">Learn more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></a>
      </div>
      <div class="more-explore__content__item">
        <h3 class="fs-24">Locations</h3>
        <p class="fs-18">We work in all corners of the world. Find a Fugro location near you.</p>
        <a href="{{ url('project/details') }}" class="learnmore">Learn more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></a>
      </div>
      <div class="more-explore__content__item">
        <h3 class="fs-24">Locations</h3>
        <p class="fs-18">We work in all corners of the world. Find a Fugro location near you.</p>
        <a href="{{ url('project/details') }}" class="learnmore">Learn more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></a>
      </div>
      <div class="more-explore__content__item">
        <h3 class="fs-24">Locations</h3>
        <p class="fs-18">We work in all corners of the world. Find a Fugro location near you.</p>
        <a href="{{ url('project/details') }}" class="learnmore">Learn more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></a>
      </div>
      <div class="more-explore__content__item">
        <h3 class="fs-24">Locations</h3>
        <p class="fs-18">We work in all corners of the world. Find a Fugro location near you.</p>
        <a href="{{ url('project/details') }}" class="learnmore">Learn more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></a>
      </div>
      <div class="more-explore__content__item">
        <h3 class="fs-24">Locations</h3>
        <p class="fs-18">We work in all corners of the world. Find a Fugro location near you.</p>
        <a href="{{ url('project/details') }}" class="learnmore">Learn more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></a>
      </div>
      <div class="more-explore__content__item">
        <h3 class="fs-24">Locations</h3>
        <p class="fs-18">We work in all corners of the world. Find a Fugro location near you.</p>
        <a href="{{ url('project/details') }}" class="learnmore">Learn more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></a>
      </div>
      <div class="more-explore__content__item">
        <h3 class="fs-24">Locations</h3>
        <p class="fs-18">We work in all corners of the world. Find a Fugro location near you.</p>
        <a href="{{ url('project/details') }}" class="learnmore">Learn more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></a>
      </div>
      <div class="more-explore__content__item">
        <h3 class="fs-24">Locations</h3>
        <p class="fs-18">We work in all corners of the world. Find a Fugro location near you.</p>
        <a href="{{ url('project/details') }}" class="learnmore">Learn more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></a>
      </div>
      <div class="more-explore__content__item">
        <h3 class="fs-24">Locations</h3>
        <p class="fs-18">We work in all corners of the world. Find a Fugro location near you.</p>
        <a href="{{ url('project/details') }}" class="learnmore">Learn more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></a>
      </div>
      <div class="more-explore__content__item">
        <h3 class="fs-24">Locations</h3>
        <p class="fs-18">We work in all corners of the world. Find a Fugro location near you.</p>
        <a href="{{ url('project/details') }}" class="learnmore">Learn more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></a>
      </div>
      <div class="more-explore__content__item">
        <h3 class="fs-24">Locations</h3>
        <p class="fs-18">We work in all corners of the world. Find a Fugro location near you.</p>
        <a href="{{ url('project/details') }}" class="learnmore">Learn more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></a>
      </div>
      <div class="more-explore__content__item">
        <h3 class="fs-24">Locations</h3>
        <p class="fs-18">We work in all corners of the world. Find a Fugro location near you.</p>
        <a href="{{ url('project/details') }}" class="learnmore">Learn more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m11.586 7-4-4h2.828l4.293 4.293a1 1 0 0 1 0 1.414L10.414 13H7.586l4-4H3L1 8l2-1h8.586Z" clip-rule="evenodd"></path></svg></a>
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