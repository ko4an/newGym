$(document).ready(function(){
      $('.main_slider').slick({
      	dots:true,
      	infinite: true,
        slidesToShow: 1,
 		slidesToScroll: 1,
  		autoplay: true,
  		autoplaySpeed: 15000,
  		fade: true,
  		cssEase: 'linear'
      });
    });

var demo = new Vue({
  el: '#main',
  data: {
    usl: ''
  }
})