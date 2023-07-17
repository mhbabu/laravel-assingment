@extends('layouts.frontend.app')
@section('title', 'Faq')

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
  <section class="faq">
    <div class="container custom-container">
      <h1 class="fs-68 mb-xl-5 mb-3">Disclaimer</h1>
      <div class="row mt-3 mt-xl-5 pt-3 pt-xl-5">
        <div class="col-md-10 mx-auto">
          <div class="group">
            <h3 class="fs-30 ">General</h3>
            <p>The information, offered on this website by Fugro (Fugro N.V. and its subsidiaries), is intended to be useful and informative and for personal use of the visitor.</p>
            <p>Please note that, although the information in all Fugro's web-pages has been composed with reasonable care, Fugro does not represent or warrant its accuracy, and such information may be inaccurate, incomplete, outdated or condensed. It is not intended to provide the basis for any evaluation or decision. The web-pages are provided "as is" without warranty of any kind, either express or implied, including but not limited to, the implied warranties of merchantability, fitness for a particular purpose, or non-infringement.</p>
            <p>Fugro will not be responsible for the direct or indirect consequences of reliance upon any information contained in this website or for any omission. Fugro assumes no responsibility for the contents of any other website to which the Fugro website has links. The inclusion of hyperlinks to other websites does not mean that Fugro endorses the information on such websites or has any association with the owner thereof.</p>
            <p>The contents of the site do not constitute an invitation to invest or otherwise deal in (depositary receipts of) shares in Fugro N.V. and such investment is the sole responsibility of the investor.</p>

          </div>
          <div class="group">
            <h3 class="fs-30 ">Downloads</h3>
            <p>Documents, brochures, reports etc. are derived from the official printed versions. Fugro N.V. only assumes responsibility for the printed versions of the downloaded information. The Annual Reports are accompanied by unqualified auditors' reports.</p>
          </div>
          <div class="group">
            <h3 class="fs-30 ">Privacy statement</h3>
            <p>Fugro N.V. will only process data provided for purposes of sending information requested and or for the gathering of statistical information on the use of our website. You may request access to, rectification and/or deletion of your data at all times. In such an event please contact:</p>
          </div>
          <div class="group">
            <h3 class="fs-30 ">Fugro N.V.</h3>
            <p class="mb-0">Veurse Achterweg 10</p>
            <p class="mb-0">2264 SG Leidschendam</p>
            <p class="mb-0">The Netherlands</p>
            <p class="mb-0">Telephone: +31 (0) 70 311 1422</p>
          </div>
          <div class="group">
            <h3 class="fs-30 ">Ownership</h3>
            <p>Fugro has the right to change any information contained in its web-pages without notice. Fugro holds all copyrights to the contents of this website and downloads. All other intellectual property rights are reserved. Visitorsmust not modify, copy, reproduce, distribute, sell or publish any information obtained from this website.</p>
            <p>The use of this website and downloads of it, and the operations of these terms and conditions, shall be governed by the laws of The Netherlands. The courts in The Netherlands shall have exclusive jurisdiction over any dispute arising out of the use of this website.</p>
            <p class="fw-500">© 2014, Fugro N.V., Leidschendam, The Netherlands</p>
            <p>All rights reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection