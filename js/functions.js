jQuery(window).load(function(){

  //jQuery(".slick_pause").insertBefore(jQuery(".carousel-next"));
	jQuery('body').addClass('pageLoaded');

});

jQuery(document).ready(function($) {

  popup_event_gallery();
  create_home_slider();

  if(jQuery("#contact_map").length) {
    init_google_map();
  }

  jQuery(".prevent_a").click(function(e) {
      e.preventDefault();
  });
  
  jQuery( ".checkbox_designed" ).prop( "checked", true );

  jQuery( "li.menu-item-has-children").click(function() {
    console.log('asa');
      jQuery(this).toggleClass('changed');
      jQuery( "li.menu-item-has-children > .sub-menu").slideToggle();
  });
  

  jQuery('.home_gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    gallery:{
      enabled:true,
      tCounter: '<span class="mfp-counter"></span>' 
    }
  });

  jQuery('.open_video').magnificPopup({ 
      disableOn: 700,
      type: 'iframe',
      removalDelay: 160,
      preloader: false,
      fixedContentPos: false
  });

	jQuery(document).foundation();
});

function init_google_map(){
          map = new google.maps.Map(document.getElementById('contact_map'), {
            zoom: 12,
            scrollwheel: false,
            zoomControl: false,
            streetViewControl: false,
            disableDefaultUI: true,
            navigationControl: false,
            draggable: false,
            disableDoubleClickZoom: true,
            center: new google.maps.LatLng(locations[1],locations[2]),
              styles: 
              [
                {"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},
                {"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},
                {"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},
                {"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},
                {"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},
                {"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},
                {"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},
                {"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},
                {"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},
                {"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},
                {"elementType":"labels.icon","stylers":[{"visibility":"off"}]},
                {"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},
                {"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},
                {"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}
              ],
            mapTypeId: google.maps.MapTypeId.ROADMAP
          });

          var icons = {
            info: {
              icon: domainurl + '/images/anchor.png'
            }
          };

          var marker = new google.maps.Marker({
            map: map,
            position: new google.maps.LatLng(locations[1],locations[2]),
            icon: icons.info.icon,
            draggable: false
          });
}

function popup_event_gallery(){
  jQuery('.gallery_trigger').on('click', function (e) {
      e.preventDefault();
      jQuery(this).parent().find(".gallery_hidden").magnificPopup('open');
  });

  jQuery('.gallery_hidden').each(function () {
      jQuery(this).magnificPopup({
          delegate: 'a',
          gallery: {
              enabled: true,
              tPrev: domainurl + '/images/prev.png',
              tNext: domainurl + '/images/next.png',
              tCounter: '<span class="mfp-counter"></span>' 
          },
          type: 'image'
      });
  });  
}

function create_home_slider(){
  home_slider = jQuery(".home_slider");
  home_slider.slick({
    infinite: true,
    speed: 1000,
    autoplay: true,
    autoplaySpeed: 3200,
    slidesToShow: 1,
    slidesToScroll: 1,
    rtl: true,
    // fade: true,
    focusOnSelect: false,
    arrows: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          arrows:false,
          slidesToShow: 1
        }
      },
      {
        breakpoint: 640,
        settings: {
          arrows:false,
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          dots:false,
          arrows:false,
          slidesToShow: 1
        }
      }
    ]
  });
}