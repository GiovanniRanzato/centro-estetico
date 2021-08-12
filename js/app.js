$(document).ready(function () {
  var scroll = $(window).scrollTop();
  if (scroll >= 20) {
    $(".cs-top-bar-contents").addClass("scrolled");
  }

  $("#burger").click(function (event) {
    event.preventDefault();
    $("#menu-principale").toggleClass("show");
    $(this).children("i").toggleClass("fa-bars fa-times");
  });

  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 100) {
      $(".cs-top-bar-contents").addClass("scrolled");
    } else {
      $(".cs-top-bar-contents").removeClass("scrolled");
    }
    if (scroll >= 250) {
      $(".back-top").removeClass("dnone");
    } else {
      $(".back-top").addClass("dnone");
    }
  });
  // Scroll to top handler
  $(".back-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
  });

  // Menu toggler handler
  $("#hamburger").click(function () {
    console.log("toggle-menu");
    $("#hamburger").toggleClass("is-active");
    $(".cs-main-nav").toggleClass("is-active");
  });

  // OWL carousel
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 32,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      },
      1400: {
        items: 4
      }
    }
  });
});