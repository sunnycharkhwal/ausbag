//nav
function darken_screen(yesno) {
  if (yesno == true) {
    document.querySelector(".screen-darken").classList.add("active");
  } else if (yesno == false) {
    document.querySelector(".screen-darken").classList.remove("active");
  }
}

function close_offcanvas() {
  darken_screen(false);
  document.querySelector(".mobile-offcanvas.show").classList.remove("show");
  document.body.classList.remove("offcanvas-active");
}

function show_offcanvas(offcanvas_id) {
  darken_screen(true);
  document.getElementById(offcanvas_id).classList.add("show");
  document.body.classList.add("offcanvas-active");
}

document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll("[data-trigger]").forEach(function (everyelement) {
    let offcanvas_id = everyelement.getAttribute("data-trigger");

    everyelement.addEventListener("click", function (e) {
      e.preventDefault();
      show_offcanvas(offcanvas_id);
    });
  });

  document.querySelectorAll(".btn-close").forEach(function (everybutton) {
    everybutton.addEventListener("click", function (e) {
      e.preventDefault();
      close_offcanvas();
    });
  });

  document
    .querySelector(".screen-darken")
    .addEventListener("click", function (event) {
      close_offcanvas();
    });
});
// nav
// input eye
function myFunction(x) {
  x.classList.toggle("fa-eye-slash");
}
// input eye end
//  Loved by our customer
$(".owl-carouself").owlCarousel({
  loop: true,

  items: 1,
  nav: true,
  dots: false,
  navText: [
    " <img src='./img/slideLeft.svg'>",
    "<img src='./img/slideRight.svg'>",
  ],
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 1,
    },
    1000: {
      items: 1,
    },
  },
});

// Our Trusted Partners
$("#owelp").owlCarousel({
  loop: true,
  items: 4,
  // nav: true,
  // dots: false,
  // navText: [
  //   " <img src='./img/slideLeft.svg'>",
  //   "<img src='./img/slideRight.svg'>",
  // ],
  margin: 0,
  dots: false,
  autoplay: true,
  autoplaySpeed: 2200,
  autoplayTimeout: 2200,
  autoplayHoverPause: true,
  slideTransition: "linear",
  // autoWidth: true,
  responsive: {
    0: {
      items: 1,
    },
    375: {
      items: 1,
    },
    425: {
      items: 2,
    },
    768: {
      items: 3,
    },
    992: {
      items: 4,
    },
  },
});
// Our Trusted Partners end
$(".owl-carousels").owlCarousel({
  animateOut: "fadeOut",
  items: 1,
  loop: true,
  nav: false,
  dots: false,
  margin: 10,
  autoplay: true,
  smartSpeed: 600,
});
