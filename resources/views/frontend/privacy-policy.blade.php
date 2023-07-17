@extends('layouts.frontend.app')
@section('title', 'Privacy & Policy')

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
<section class="hero-section contact-hero privacy-hero">
  <!-- breadcumbs -->
  <div class="hero-section__content">
    <div class="container custom-container">
      <h1 class="big-heading">Privacy notice</h1>
    </div>
  </div>
</section>
<!-- terms condition -->
<section class="terms-condition pt-5">
  <div class="container custom-container">
    <div class="row">
      <div class="col-md-10 mx-auto">
        <div class="group">
          <p>When we refer to "Fugro", "we", or "us" in this Privacy Notice, we refer to the Fugro entity(ies) responsible for your Personal Data and acting as “data controller”. This (these) will be the entity(ies) with whom you intend to conclude - or have concluded - a contract, whose premises you have visited, whose website(s) you have accessed or with whom you interact in any other way. A full list of the locations and contact details of Fugro entities can be found here.</p>
          <p>When we refer to "Personal Data" under this Privacy Notice, we mean any information through which we can identify you as an individual (e.g. your name, telephone number, e-mail address etcetera).</p>
        </div>
        <div class="group">
          <h4 class="fs-30 fw-400">Scope of this Privacy Notice</h4>
          <p>This Privacy Notice applies to the processing of Personal Data of (prospective) clients, suppliers and (website) visitors.</p>
          <ul>
            <li>(Prospective) clients - When we do business with our clients, the Personal Data we process includes the contact details of (legal) representatives and contact persons of the client. This Personal Data is collected in different ways, for example, by our website, over the telephone, via email or through forms or requests you submit, and during business events and/or meetings</li>
            <li>Suppliers - When we do business with our suppliers, the Personal Data we process includes the contact details of (legal) representatives and contact persons of the supplier. This Personal Data is collected in different ways, for example, over the telephone and via email</li>
            <li>Visitors – When you visit our premises we process your Personal Data as part of our safety and security measures</li>
            <li><span class="fw-600">Website visitors</span> - When you visit our website(s) we process your Personal Data among others in connection with registrations, purchases, inquiries, and subscriptions for receiving direct marketing. We also collect limited data automatically when you browse our website(s)</li>
          </ul>
        </div>
        <div class="group">
          <h4 class="fs-30 fw-400">What Personal Data do we process?</h4>
          <p>The type of Personal Data we process varies depending on the type of relationship we have with you and the kind of services we provide to you.</p>
        </div>
        <div class="group">
          <h5 class="fs-24 fw-400">(Prospective) clients and suppliers</h5>
          <p>We process the following Personal Data of our (prospective) clients and suppliers to the extent available to us and in accordance with applicable law and regulation:</p>
          <ul>
            <li>your contact details - your name, address and any other contact details you provide, such as your telephone number and e-mail address</li>
            <li>your contact details - your name, address and any other contact details you provide, such as your telephone number and e-mail address</li>
            <li>your contact details - your name, address and any other contact details you provide, such as your telephone number and e-mail address</li>
            <li>your contact details - your name, address and any other contact details you provide, such as your telephone number and e-mail address</li>
            <li>your contact details - your name, address and any other contact details you provide, such as your telephone number and e-mail address</li>
            <li>your contact details - your name, address and any other contact details you provide, such as your telephone number and e-mail address</li>
          </ul>
        </div>
        <div class="group">
          <h4 class="fs-30 fw-400">Visitors to our premises</h4>
          <p>We process the following Personal Data of persons visiting our premises:</p>
          <ul>
            <li>your contact details - your name and any other contact details you provide, such as your address, telephone number and email address</li>
            <li>video surveillance footage - when you enter our buildings or premises, you are subject to image retention via our video surveillance systems (CCTV)</li>
          </ul>
        </div>
        <div class="group">
          <h4 class="fs-30 fw-400 text-black">Website visitors</h4>
          <p>We process the following Personal Data when you access our website(s):</p>
          <ul>
            <li>your contact details - your name, address and any other contact details which you provide to us, such as your telephone number and email address</li>
            <li>your contact details - your name, address and any other contact details which you provide to us, such as your telephone number and email address</li>
            <li>your contact details - your name, address and any other contact details which you provide to us, such as your telephone number and email address</li>
            <li>your contact details - your name, address and any other contact details which you provide to us, such as your telephone number and email address</li>
            <li>your contact details - your name, address and any other contact details which you provide to us, such as your telephone number and email address</li>
          </ul>
        </div>
        <div class="group">
          <h4 class="fs-30 fw-400 text-black">For what purposes do we process your Personal Data?</h4>
          <p>Processing takes place in order to carry out our obligations arising from contracts entered into with you, and to provide you with the information and services you request. This includes managing and handling your requests, inquiries or complaints, and sending you our invoices or paying your outstanding fees</p>
          <p>If you are a (prospective) client or website visitor, we process your Personal Data to send you marketing communications (such as newsletters) via email or other electronic means. We will only do so after we have received your consent. You can withdraw your consent at any time (see section 10)</p>
          <p>We process your Personal Data to comply with legal obligations, such as maintaining appropriate business records, complying with lawful requests from governmental agencies and public authorities, and to comply with applicable law and regulation</p>
          <p>We also process your Personal Data for our legitimate (business) interests, which include the following:</p>
          <ul>
            <li>to manage our internal client database (CRM) and to maintain contact with you for marketing purposes or other commercial purposes</li>
            <li>to manage our internal client database (CRM) and to maintain contact with you for marketing purposes or other commercial purposes</li>
            <li>to manage our internal client database (CRM) and to maintain contact with you for marketing purposes or other commercial purposes</li>
            <li>to manage our internal client database (CRM) and to maintain contact with you for marketing purposes or other commercial purposes</li>
            <li>to manage our internal client database (CRM) and to maintain contact with you for marketing purposes or other commercial purposes</li>
            <li>to manage our internal client database (CRM) and to maintain contact with you for marketing purposes or other commercial purposes</li>
          </ul>
        </div>
        <div class="group">
          <h4 class="fs-30 fw-400">How do you contact Fugro with privacy related questions?</h4>
          <p>If you have any questions or concerns about this Privacy Notice or the processing of your Personal Data in general, or if you wish to exercise any of your rights, please email us at <a href="mailto:dataprivacy@fugro.com" class="text-red">dataprivacy@fugro.com</a> and be sure to indicate the nature of your query.</p>
        </div>
        <div class="technical__item">
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