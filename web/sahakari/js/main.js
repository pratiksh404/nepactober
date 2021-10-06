// LAZY LOAD IMAGE
$('img').unveil(200, function () {
  $(this).on(function () {
    this.style.opacity = 1;
  });
});


// FIXED NAVBAR
$(window).scroll(function () {
  if ($(this).scrollTop() > 120) {
    $('.header-wrapper').addClass('fixed');
  } else {
    $('.header-wrapper').removeClass('fixed');
  }
});

const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(window).on("load resize", function () {
  if (this.matchMedia("(min-width: 768px)").matches) {
    $dropdown.hover(
      function () {
        const $this = $(this);
        $this.addClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "true");
        $this.find($dropdownMenu).addClass(showClass);
      },
      function () {
        const $this = $(this);
        $this.removeClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "false");
        $this.find($dropdownMenu).removeClass(showClass);
      }
    );
  } else {
    $dropdown.off("mouseenter mouseleave");
  }
});




// const nextIcon = '<img src="./right-arrow.svg" alt:"right">';
// const prevIcon = '<img src="./left-arrow.svg" alt:"left">';

$(document).ready(function ($) {
  $('.remit-sec .owl-carousel').owlCarousel({
    items: 6,
    loop: true,
    margin: 20,
    nav: true,
    autoplay: true,
    autoplayTimeout: 3000,
    // navText: [
    //   prevIcon,
    //   nextIcon
    // ],
    responsive: {
      0: {
        items: 4
      },
      600: {
        items: 6
      },
      1000: {
        items: 6
      }
    }
  });
})


const backIcon = '<img src="./left-arrow.svg" alt:"left">';
const frontIcon = '<img src="./right-arrow.svg" alt:"right">';
$(document).ready(function ($) {
  $('.services .owl-carousel').owlCarousel({
    items: 3,
    loop: true,
    margin: 20,
    nav: true,
    autoplay: true,
    autoplayTimeout: 5000,
    navText: [
      backIcon,
      frontIcon
    ],
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 3
      }
    }
  });
})


// function TOP SCROLL
mybutton = document.getElementById("myBtn");
window.onscroll = function () {
  scrollFunction()
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

$('.count').counterUp({
  delay: 10,
  time: 2000
});


// NOTICE AD

$(document).ready(function ($) {
  $('.ad .owl-carousel').owlCarousel({
    items: 3,
    loop: true,
    margin: 20,
    nav: true,
    autoplay: true,
    autoplayTimeout: 3000,
    // navText: [
    //   prevIcon,
    //   nextIcon
    // ],
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 1
      }
    }
  });
})


// EMI Calculator

function emi() {
  if (document.getElementById('loan1').value == null || document.getElementById('loan1').value.length == 0 || document.getElementById('months1').value == null || document.getElementById('months1').value.length == 0 || document.getElementById('rate1').value == null || document.getElementById('rate1').value.length == 0) {
    document.getElementById('pay1').value = 'Data Reqd.';
  } else {
    var pay1 = '';
    var princ1 = document.getElementById('loan1').value;
    var term1 = document.getElementById('months1').value;
    var intr1 = document.getElementById('rate1').value / 1200;
    document.getElementById('pay1').value = Math.round(princ1 * intr1 / (1 - (Math.pow(1 / (1 + intr1), term1))) * 100) / 100;
    document.getElementById('gt1').value = Math.round((document.getElementById('pay1').value * document.getElementById('months1').value) * 100) / 100;
    document.getElementById('tintt1').value = Math.round((document.getElementById('gt1').value * 1 - document.getElementById('loan1').value * 1) * 100) / 100;
  }
}

// NOTICE POP_UP

$(document).ready(function () {
  $("#myModal").modal('show');

});