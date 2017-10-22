
jQuery( document ).ready( function( jQuery ) {
  //modal();
  //modalClose();
  MoveTo();
  //videoShow();
  //accordion();
  hamburger();
} );
function modal(){
  console.log('fire');
}
function hamburger(){
  jQuery("#hamburger").on("click", function (e) {
    jQuery("body").toggleClass("header-mobile-actif");
  });
}
function videoShow () {
    // Load the IFrame Player API code asynchronously.

    // 2. This code loads the IFrame Player API code asynchronously.
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    var player;

    if (typeof hardMode == "undefined") hardMode = false;
    var mql = window.matchMedia("(max-width: 879px)");

    //(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) ? mobile = true : mobile = false;
    (mql.matches) ? hardMode = true : hardMode = false;

    var jQueryGetHtmlClass = jQuery('html').attr('class');

    jQuery(".btn-play").on("click", function (e) {
      e.preventDefault();
      videomodal();
      var jQueryvideoId = jQuery(this).data('video-id');
      player = new YT.Player('ytplayer', {
        videoId: jQueryvideoId,
        events: {
          'onReady': onPlayerReady
        },
        playerVars: {}

      });
        // 4. The API will call this function when the video player is ready.
        function onPlayerReady(event) {
          jQuery("body").addClass("modal");
          if (!hardMode) {
            event.target.playVideo();
          }
        }
        jQuery(".modal_bg,.modal_close").on('click', function (event) {
          event.preventDefault();
          videomodalClose();
          var state = player.getPlayerState();

          if (state = 1) {
            player.stopVideo();
          };
        });
      });
  };

  function videomodal(){
    jQuery(".hidden").removeClass("hidden");
    jQuery("body").addClass("modal");
  }
  function videomodalClose(){
    jQuery("body.modal").removeClass("modal");
    jQuery(".modal_bg").addClass("hidden");
  }

  function MoveTo() {
    // Select all links with hashes
    jQuery('.scroll a')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
      ) {
      // Figure out element to scroll to
    var target = jQuery(this.hash);
    target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        jQuery('html, body').animate({
          scrollTop: target.offset().top
        }, 2000, function() {
          // Callback after animation
          // Must change focus!
          var jQuerytarget = jQuery(target);
          jQuerytarget.focus();
          if (jQuerytarget.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            jQuerytarget.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            jQuerytarget.focus(); // Set focus again
          };
        });
      }
    }
  });
}
function accordion(){
  console.log('accordion');
 var allPanels = jQuery('.accordion > dd').hide();
    
  jQuery('.accordion > dt > a').click(function() {
      jQuerythis = jQuery(this);
      jQueryparent =  jQuerythis.parent();
      jQuerytarget =  jQuerythis.parent().next();


 if(jQuerytarget.hasClass('active')){
        jQuerytarget.removeClass('active').slideUp(); 
        jQueryparent.removeClass('actif');
      }else{
        jQuery('.fa-minus').removeClass('fa-minus');
        allPanels.removeClass('active').slideUp();
        jQueryparent.addClass('actif');
        jQuerytarget.addClass('active').slideDown();
      }
      
    return false;
  });
}