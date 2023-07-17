 <!-- footer -->
 <footer class="footer footer-spacing">
    <div class="container sml-container">
      <div class="footer__content">
        <div class="footer__content__item">
          <a href="/" class="d-inline-block text-black">
            <img src="{{ url('assets/frontend/img/logo.png') }}" alt="logo" height="170" width="200"  />
          </a>
        </div>
        <div class="footer__content__item for-big-device d-none d-lg-flex">
          <a href="/" class="footer__content__item__menu">Industries</a>
          <a href="/" class="footer__content__item__menu">Expertise</a>
          <a href="/" class="footer__content__item__menu">Careers</a>
          <a href="/" class="footer__content__item__menu">Investors</a>
          <a href="/" class="footer__content__item__menu">News</a>
          <a href="{{ url('/about-us') }}" class="footer__content__item__menu">About us</a>
        </div>
        <div class="footer__content__item">
          <div class="footer__content__item for-mbl d-lg-none">
            <a href="/" class="footer__content__item__menu">Industries</a>
            <a href="/" class="footer__content__item__menu">Expertise</a>
            <a href="/" class="footer__content__item__menu">Careers</a>
            <a href="/" class="footer__content__item__menu">Investors</a>
            <a href="/" class="footer__content__item__menu">News</a>
            <a href="{{ url('/about-us') }}" class="footer__content__item__menu">About us</a>
          </div>
          <div class="top">
            <p class="mb-0 fs-18">Subscribe to news alerts</p>
            <a href="/" class="d-inline-block">Sign up now <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m17.586 11-5.5-5.5h2.828l5.794 5.793a1 1 0 0 1 0 1.414L14.915 18.5h-2.829l5.5-5.5H4l-2-1 2-1h13.586Z" clip-rule="evenodd"></path></svg></a>

          </div>
          <div class="bottom">
            <div class="right">
              <p>Social media</p>
              <a href="/">Linked in</a>
              <a href="/">Facebook</a>
              <a href="/">Twitter</a>
              <a href="/">Instagram</a>
            </div>
            <div class="left">
              <p>Contact</p>
              <a href="/">Genarel contact</a>
              <a href="/">Our locations</a>
              <a href="/">Talent Community</a>

            </div>
          </div>
        </div>
      </div>
      
      <!-- copyright -->
      <div class="d-flex justify-content-between copyright">
        
        <div class="d-flex align-items-center copyright-item">
          <a href="/" class="d-inline-block font-dm">Cookies</a>
          <a href="{{ url('privacy-policy') }}" class="d-inline-block font-dm">Privacy statement</a>
          <a href="/" class="d-inline-block font-dm">Disclaimer</a>
          <a href="{{ url('terms-condition') }}" class="d-inline-block font-dm">General purchase terms and conditions</a>
        </div>
        <p class="font-dm mb-0">© {{ now()->format('Y')}} AM Group. All right reserved</p>
      </div>
    </div>
  </footer>