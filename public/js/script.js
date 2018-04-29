
  


//   $(document).ready(function(){
//     $('.owl-carousel').owlCarousel();
//   });

// jQuery(document).ready(function() {
//     $("#owl-demo").owlCarousel({
//         navigation : true
//       });
//   });

if($.isFunction('owlCarousel')){
    $('.#owlcaru').owlCarousel({
      navigation : true,
      loop:true,
      margin:10,
      nav:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:3
          },
          1000:{
              items:5
          }
      }
    });
  }