$(document).ready(function () {
  $(".gotopbtn").hide();

  $(window).scroll(function () {
    if ($(this).scrollTop() > 230) {
      $(".gotopbtn").show();
    } else {
      $(".gotopbtn").hide();
    }
  });

  $(".search-icon").click(function () {
    $(".search-wrap").toggle();
  });

  /* $(this).scrollTop(0);  */
});

$(window).scroll(function () {
  if ($(this).scrollTop() > 0) {
    $(".site-header").addClass("fixed");
  } else {
    $(".site-header").removeClass("fixed");
  }
});
//for property type
$(".buttonTypes button").click(function () {
  var $this = this;

  $($this).addClass("activebut");

  $(".buttonTypes button").not($this).removeClass("activebut");
});
//for kitchen
$(".kitchen span").click(function () {
  var $this = this;

  $($this).addClass("roomNumber");

  $(".kitchen span").not($this).removeClass("roomNumber");
});
//for rooms
$(".rooms span").click(function () {
  var $this = this;

  $($this).addClass("roomNumber");

  $(".rooms span").not($this).removeClass("roomNumber");
});
//for bathrooms
$(".bathrooms span").click(function () {
  var $this = this;

  $($this).addClass("roomNumber");

  $(".bathrooms span").not($this).removeClass("roomNumber");
});
//for floors
$(".floors span").click(function () {
  var $this = this;

  $($this).addClass("roomNumber");

  $(".floors span").not($this).removeClass("roomNumber");
});

$("img").unveil(1200, function () {
  $(this).on(function () {
    this.style.opacity = 1;
  });
});
//for extra room
/* $(".forToggle")
  .children()
  .last()
  .click(function () {
    $(this).next().toggle();
  }); */
$(document).on("click", ".noToggle", function () {
  $(this).closest(".list").find(".extra-wrap").css("display", "none");
});
$(document).on("click", ".forToggle", function () {
  $(this).closest(".list").find(".extra-wrap").toggle();
});
// $("#example").children().last();
//owl carousel
$(".types").owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots: false,
  navText: [
    '<i class="fas fa-arrow-left"></i>',
    '<i class="fas fa-arrow-right"></i>',
  ],
  responsive: {
    0: {
      items: 2,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 5,
    },
  },
});
//owl carousel 2
$(".latestCards").owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots: false,
  navText: [
    '<i class="fas fa-chevron-circle-left"></i>',
    '<i class="fas fa-chevron-circle-right"></i>',
  ],
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 3,
    },
  },
});
//slickslider
$(".slider-for").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: true,
  infinite: true,
  autoplay: false,
  asNavFor: ".slider-nav",
});
$(".slider-nav").slick({
  slidesToShow: 6,
  slidesToScroll: 1,
  asNavFor: ".slider-for",
  dots: false,
  infinite: true,
  centerMode: true,
  focusOnSelect: true,
  vertical: true,
});

//create the slider

var state = false;
function toggle() {
  if (state) {
    document.getElementById("password").setAttribute("type", "password");
    document.getElementById("eye").style.color = "#7a797e";
    state = false;
  } else {
    document.getElementById("password").setAttribute("type", "text");
    document.getElementById("eye").style.color = "#5887ef";
    state = true;
  }
}
