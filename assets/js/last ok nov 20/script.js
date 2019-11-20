jQuery(document).ready(function($) {
    "use strict";







    
    /* ScrollReveal({ reset: true });
    ScrollReveal().reveal('.hero-heading');
    ScrollReveal().reveal('.hero-text', { delay: 500 });
    ScrollReveal().reveal('.section-heading', { delay: 1000 }); */

    mi_init__dropdownOnHover();
    mi_init__navSearchWidth ();

    $(window).scroll(function() {
      //mi_init__navbarOnScorllEffect ()
    });
    




    

});








jQuery('#searchModal').on('show.bs.modal', function (e) {
  jQuery('body').addClass('search_modal-open');
});
jQuery('#searchModal').on('shown.bs.modal', function (e) {
  jQuery('.search-field').trigger('focus');
});
jQuery('#searchModal').on('hide.bs.modal', function (e) {
  jQuery('body').removeClass('search_modal-open');
});


function mi_init__dropdownOnHover () {
  if (jQuery(window).width() > 768) {
    jQuery('.dropdown-onhover').hover(function() {
       jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(300);
       jQuery(this).closest('.fixed-top').addClass('n-open');
     }, function() {
       jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(300);
       jQuery(this).closest('.fixed-top').removeClass('n-open');
     });
 }
}


function mi_init__navbarOnScorllEffect () {
  if (jQuery(window).scrollTop() > 70) {
      jQuery('.fixed-top').addClass('bg-white navbar-light').removeClass('navbar-dark');
      jQuery('.navbar-brand img').attr('src', 'assets/images/logo.svg');
  } else {
      jQuery('.fixed-top').removeClass('bg-white navbar-light').addClass('navbar-dark');
      jQuery('.navbar-brand img').attr('src', 'assets/images/logo-white.svg');
  }
}

function mi_init__navSearchWidth () {
  var $sub_w = jQuery('.nav-subscribe').outerWidth();
  jQuery('.nav-search').width($sub_w);
}

// (function() {
//   'use strict';
//   window.addEventListener('load', function() {
//     // Fetch all the forms we want to apply custom Bootstrap validation styles to
//     var forms = document.getElementsByClassName('needs-validation');
//     // Loop over them and prevent submission
//     var validation = Array.prototype.filter.call(forms, function(form) {
//       form.addEventListener('submit', function(event) {
//         if (form.checkValidity() === false) {
//           event.preventDefault();
//           event.stopPropagation();
//         }
//         form.classList.add('was-validated');
//       }, false);
//     });
//   }, false);
// })();




//Slider for home-slider and Video-slider 

jQuery(document).ready(function($){
    $(".hero-featured_slider").owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        nav: true,
        navText: ["<i class='ion ion-ios-arrow-back'></i>", "<i class='ion ion-ios-arrow-forward'></i>"],
        dots: false
    });

    $(".video_slider").owlCarousel({
        items: 3,
        nav: true,
        navText: ["<i class='ion ion-ios-arrow-back'></i>", "<i class='ion ion-ios-arrow-forward'></i>"],
        dots: false,
        margin: 8
    });


});

