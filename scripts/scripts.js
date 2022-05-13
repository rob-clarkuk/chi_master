import $ from 'jquery';

import 'slick-carousel/slick/slick.js';


$(window).scroll(function() {
	var scroll = $(window).scrollTop();

	if (scroll >= 100) {
	  $("body").addClass("scrolled");
	} else {
	  $("body").removeClass("scrolled");
	}
});

$.fn.isOnScreen = function() {
	var win = $(window);

	var viewport = {
		top: win.scrollTop(),
		left: win.scrollLeft()
	};
	viewport.right = viewport.left + win.width();
	viewport.bottom = viewport.top + win.height();

	var bounds = this.offset();
	bounds.right = bounds.left + this.outerWidth();
	bounds.bottom = bounds.top + this.outerHeight();

	return !(
	viewport.right < bounds.left ||
	viewport.left > bounds.right ||
	viewport.bottom < bounds.top ||
	viewport.top > bounds.bottom
	);
};

$(".slide-up, .slide-down, .slide-right, .slow-fade, .col__circle-list ul li").each(function() {
	if ($(this).isOnScreen()) {
  		$(this).addClass("active");
	}
});

  // ========== Add class on entering viewport

  $.fn.isInViewport = function() {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();
    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();
    return elementBottom > viewportTop && elementTop < viewportBottom;
  };

  $(window).on("resize scroll", function() {
    $(".slide-up, .slide-down, .slide-right, .slow-fade, .col__circle-list ul li").each(function() {
      if ($(this).isInViewport()) {
        $(this).addClass("active");
      }
    });
  });

$('.hero__image-container').slick({
	autoplay:true,
	fade:true,
	dots:false,
	arrows:false,
	autoplaySpeed:5000,
});

$('.rooms__gallery').slick({
	autoplay:true,
	fade:true,
	dots:true,
	arrows:false,
	autoplaySpeed:5000,
});

$('.food__gallery').slick({
	autoplay:true,
	fade:true,
	dots:true,
	arrows:false,
	autoplaySpeed:5000,
});

$('.testimonials__container').slick({
	autoplay:true,
	dots:false,
	arrows:false,
	autoplaySpeed:5000,
});

$('.booking__options > div, #booking__popup-room, .booking__popup').hide();

$("#booking_table").on('click', function(e){
	e.preventDefault();
	var bookingValue = $(this).attr('data-booking');
	$('.booking__options > div').hide();
	$('#' + bookingValue).fadeIn();
	$('.booking__popup').fadeIn();
	$('body').css('overflowY', 'hidden');
});

$("#booking_rooms").on('click', function(e){
	$('.booking__options > div').hide();
});

$('.header__mobMenu').on('click', function(){
	$(this).toggleClass('active');
	$('.nav__mobile').toggleClass('active');
})

$('.booking__popup--tabs').on('click', function(){
	var bookingPopupId = $(this).attr('data-tab');
	if (!$(this).hasClass('active')){
		$('.booking__popup--tabs').removeClass('active');
		$(this).addClass('active');
		$('.booking__popup--content').fadeOut();
		$('#' + bookingPopupId).delay(300).fadeIn();
	}
});

$('.bookNowBtn').on('click', function(e){
	e.preventDefault();
	$('.booking__popup').fadeIn();
	$('body').css('overflowY', 'hidden');
});

$('.booking__popup--background').on('click', function(){
	$('.booking__popup').fadeOut();
	$('body').css('overflowY', 'auto');
});

var bookingHeight = $('.booking').height();

$('footer').css('marginBottom', bookingHeight);




// Newsletter Form

$('#newsletterConfirm, #newsletterFail').hide();

var endpoint = 'https://api.airship.co.uk/v1/contact'
var token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYjYwOGNjNzE1NjM5Y2JmNWQzNmM2NmQyYWU4ODdlZmY1OWEzYmFkOTA3YWIxZTBiYzA1OGY0ZjI3MTgxNTE4YTEyZWU0NjYwODNiNTFjYjMiLCJpYXQiOjE2Mjk4MDIyOTAsIm5iZiI6MTYyOTgwMjI5MCwiZXhwIjo0Nzg1NDc1ODkwLCJzdWIiOiI3MzQ2Iiwic2NvcGVzIjpbInJlYWQiLCJ3cml0ZSJdfQ.qkylNWwaEhMgc3-kK8a7goQQS7mWyHOMz8ge2QZ0hTox18MM4EiUNAFI6aaXCa5iBiBmaN4utnvSpq0I6-_TDtbzCVN4eaRGV3HV_ErhYYBcQCZEZhOAzkkkoUyljeOChJ44Wp38RvARuxBImXoq7OiHoADAxF6dcDp-n-yIIJsuhyEiFl4B2uSnxkqxyVFFTRYy71sM1uo4aK2lSzC-zkPU7u7onrUg0J6LfGfzTKsFo1alJL05EQaSwolhWwjh96EzvzF9IKmvDbMz_tIU69lHRRYCbPl3TOBYozYBFQ4x_TPu5xdAOV3dVIWdnHaDnipfArcoBG-JOKk5SJLpnMS9TpCNNxL-TyMlLAzIoTRuBezCRZSzJdFr5pg0mKhjxD8YpQk3f9BoWVJft4fruBEZRR8NtNm41wVWI9X5zyWVOpE6w-3b841AlD6Mb1yPJJR2C6UT2YssIVIhkXHFPSrNcuSTE0jKvTkjitrgNg4-Gg-WrzHKxIirH4H55pnrqzP5Xu7FJTKrIfnWYtjqMlZP9xXUq_uVt4qrMEVp5Ts2C4dKkaWWWuVXZUz2u_m6BDXciMVyo0RK65EBGlmIbjXt0swS8FpZ_NOrwzWj9Rps_1r6WDdEbLHVnt6kS4ZylQxaxYQPa3K36vTVNSsLXyKal0HSNYf-nCzdHPdhbZw"

$('#newsletterSignup').on('submit', function(e){
  const form = $(this);
  const emailAddress = form.find('#emailAddress').val();
  const locationId = form.attr('data-locationId');
  const groupId = form.attr('data-groupId');;
  const formSettings = {
  "async": true,
  "crossDomain": true,
  "url": "https://api.airship.co.uk/v1/contact",
  "method": "POST",
  "headers": {
    "Content-Type": "application/json",
    "Authorization": "Bearer " + token
  },
  "processData": false,
  "data": '{\n  \"account_id\": 811,\n  \"email\": \"' + emailAddress + '\",\n  \"source_name\": \"website\",\n \"units\": [\n    {\n      \"id\": ' + locationId + ',\n      \"groups\": [\n        {\n          \"id\": ' + groupId + '\n        }\n      ]\n    }\n  ]\n}'
};
  e.preventDefault();

  $.ajax(formSettings)
    .done(function (response) {
      $('#newsletterConfirm').fadeIn();
      $('#newsletterFail').hide();
    })
    .fail(function(response) {
      $('#newsletterFail').fadeIn();
      $('#newsletterConfirm').hide();
    });
});

// Contact Form
$('#contactForm').on('submit', function(e){
	const formContainer = document.getElementById( '#contactForm' );
	const wpcf7Elm = document.querySelector( '.wpcf7' );
	const form = $('form', this);
  const firstName = form.find('#firstName').val();
  const surname = form.find('#surname').val();
  const emailAddress = form.find('#emailAddress').val();
  const phoneNumber = form.find('#contactNumber').val();
  const acceptance = form.find('#acceptance').is(':checked');
  const locationId = $(this).attr('data-locationId');
  const groupId = $(this).attr('data-groupId');
  const formSettings = {
  "async": true,
  "crossDomain": true,
  "url": "https://api.airship.co.uk/v1/contact",
  "method": "POST",
  "headers": {
    "Content-Type": "application/json",
    "Authorization": "Bearer " + token
  },
  "processData": false,
  "data": '{\n  \"account_id\": 811,\n  \"first_name\": \"' + firstName + '\",\n  \"last_name\": \"' + surname + '\",\n  \"email\": \"' + emailAddress + '\",\n  \"source_name\": \"website\",\n \"units\": [\n    {\n      \"id\": ' + locationId + ',\n      \"groups\": [\n        {\n          \"id\": ' + groupId + '\n        }\n      ]\n    }\n  ]\n}'
};


  wpcf7Elm.addEventListener( 'wpcf7submit', function( event ) {
	  if (acceptance) {
		$.ajax(formSettings)
	    .done(function (response) {
	      console.log(formSettings.data, response)
	    })
	    .fail(function(response) {
	      console.log(formSettings.data, response)
	    });
	  }
	}, false );
});


// Mapbox
var mapContainer = $('#contactMap');
var lat = mapContainer.attr('data-lat');
var long = mapContainer.attr('data-long');

var mapboxgl = require('mapbox-gl/dist/mapbox-gl.js');
 
mapboxgl.accessToken = 'pk.eyJ1Ijoicm9iY2xhcmt1ayIsImEiOiJja3AyaHZ3bmExdTdnMm5xZ2o0cmVtenE5In0.zOOGOgO-RbSd7FJyWOeGaA';
var map = new mapboxgl.Map({
	container: 'contactMap',
	style: 'mapbox://styles/mapbox/light-v10',
	center: [long, lat],
  zoom: 13,
});

var marker = new mapboxgl.Marker({
	color: "#404040",
	draggable: true
})
	.setLngLat([long, lat])
	.addTo(map);