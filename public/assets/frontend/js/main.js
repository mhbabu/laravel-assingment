
// add remove class on hover in navbar
const nav = document.querySelector('nav');
const dropdownItems = document.querySelectorAll('.hover-dropdown');

dropdownItems.forEach((dropdownItem) => {
  dropdownItem.addEventListener('mouseover', () => {
    nav.classList.add('nav-hovered');
  });

  dropdownItem.addEventListener('mouseout', () => {
    nav.classList.remove('nav-hovered');
  });
});
// sticky menu add and remove class on click 
document.addEventListener("DOMContentLoaded", function() {
  var menuItems = document.getElementsByClassName("sticky-menu-item");
  var sections = document.querySelectorAll(".sticky-menu-section");

  for (var i = 0; i < menuItems.length; i++) {
    menuItems[i].addEventListener("click", function(event) {
      event.preventDefault();

      var targetId = this.getAttribute("href");
      var targetSection = document.querySelector(targetId);
      var offsetTop = targetSection.offsetTop;

      window.scrollTo({
        top: offsetTop,
        behavior: "smooth"
      });

      for (var j = 0; j < menuItems.length; j++) {
        menuItems[j].classList.remove("active");
      }
      
      this.classList.add("active");
    });
  }
});

// related news owl calousel
$('.related-carousel').owlCarousel({
  items:3,
  loop:false,
  center:true,
  margin:40,
  URLhashListener:true,
  autoplayHoverPause:true,
  startPosition: 'URLHash',
  nav: true,
  navText: [
    '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="m7 8 5-5H9.172L4.879 7.293a1 1 0 0 0 0 1.414L9.172 13H12L7 8Z" clip-rule="evenodd"></path></svg>',
    '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="currentColor" fill-rule="evenodd" d="M9 8 4 3h2.828l4.293 4.293a1 1 0 0 1 0 1.414L6.828 13H4l5-5Z" clip-rule="evenodd"></path></svg>'
  ],
  navContainerClass: 'custom-owl-nav owl-nav container',
  responsive:{
    0:{
        items:1,
    },
    600:{
        items:2,
    },
    1000:{
        items:3,
    }
}
});
// owl carousel custom counter and bar 
$(document).ready(function(){
  var owl = $('.service-owl');
  var itemsCount = owl.find('.item').length;
  var currentIndex = 0;

  function updateProgress() {
    var progress = ((currentIndex + 1) / itemsCount) * 100;
    $('.progress').css('width', progress + '%');
    $('.counter').text((currentIndex + 1) + '/' + itemsCount);
  }
  
  function fadeTransition() {
    var currentItem = $('.service-owl .item').eq(currentIndex);
    currentItem.find('.left-div').css('opacity', 0);
    currentItem.find('.right-div').css('opacity', 0);

    currentItem.find('.left-div').animate({ opacity: 1 }, 500);
    currentItem.find('.right-div').animate({ opacity: 1 }, 500);
  }

  $('.service-owl').owlCarousel({
    items: 1,
    loop: false,
    nav: false,
    mouseDrag: false,
    touchDrag: false,
    dots: false,
    onChanged: function(event) {
      currentIndex = event.item.index;
      updateProgress();
      fadeTransition();
    }
  });
  
  $('.next-btn').on('click', function() {
    if (currentIndex < itemsCount - 1) {
      currentIndex++;
      owl.trigger('next.owl.carousel');
      updateProgress();
    }
  });
  
  $('.prev-btn').on('click', function() {
    if (currentIndex > 0) {
      currentIndex--;
      owl.trigger('prev.owl.carousel');
      updateProgress();
    }
  });
});
