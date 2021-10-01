// FIRST CAROUSEL
$(document).ready(function($) {
    $(".slider .owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: false,

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
});

// POPULAR DESTINATION
$(document).ready(function($) {
    $(".popular-destinations .owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
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
});

// PACKAGE IMAGES
$(document).ready(function($) {
    $(".package-img .owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 1,
            },
        },
    });
});

// FIXED NAVBAR
$(window).scroll(function() {
    if ($(this).scrollTop() > 120) {
        $(".header-wrapper").addClass("fixed");
    } else {
        $(".header-wrapper").removeClass("fixed");
    }
});

const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(window).on("load resize", function() {
    if (this.matchMedia("(min-width: 768px)").matches) {
        $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
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

/*SCROLL TO TOP*/
mybutton = document.getElementById("myBtn");
window.onscroll = function() {
    scrollFunction();
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
/*SCROLL TO TOP ENDS*/

// Calling Function
lazyLoad();

/*==========================
        Lazy Load
    =============================*/
function lazyLoad() {
    $(".lazy-image").unveil(200, function() {
        $(this).on(function() {
            this.style.opacity = 1;
        });
    });
}
/*==========================
 Slider
=== === === === === === === === == */
window.addEventListener("DOMContentLoaded", () => {
    new dualRangeSlider(document.querySelector(".dual-range"));
});

class dualRangeSlider {
    constructor(rangeElement) {
        this.range = rangeElement;
        this.min = Number(rangeElement.dataset.min);
        this.max = Number(rangeElement.dataset.max);
        this.handles = [...this.range.querySelectorAll(".handle")];
        this.startPos = 0;
        this.activeHandle;

        this.handles.forEach((handle) => {
            handle.addEventListener("mousedown", this.startMove.bind(this));
            handle.addEventListener("touchstart", this.startMoveTouch.bind(this));
        });

        window.addEventListener("mouseup", this.stopMove.bind(this));
        window.addEventListener("touchend", this.stopMove.bind(this));
        window.addEventListener("touchcancel", this.stopMove.bind(this));
        window.addEventListener("touchleave", this.stopMove.bind(this));

        const rangeRect = this.range.getBoundingClientRect();
        const handleRect = this.handles[0].getBoundingClientRect();
        this.range.style.setProperty("--x-1", "0px");
        this.range.style.setProperty(
            "--x-2",
            rangeRect.width - handleRect.width / 2 + "px"
        );
        this.handles[0].dataset.value = this.range.dataset.min;
        this.handles[1].dataset.value = this.range.dataset.max;
    }

    startMoveTouch(e) {
        const handleRect = e.target.getBoundingClientRect();
        this.startPos = e.touches[0].clientX - handleRect.x;
        this.activeHandle = e.target;
        this.moveTouchListener = this.moveTouch.bind(this);
        window.addEventListener("touchmove", this.moveTouchListener);
    }

    startMove(e) {
        this.startPos = e.offsetX;
        this.activeHandle = e.target;
        this.moveListener = this.move.bind(this);
        window.addEventListener("mousemove", this.moveListener);
    }

    moveTouch(e) {
        this.move({ clientX: e.touches[0].clientX });
    }

    move(e) {
        const isLeft = this.activeHandle.classList.contains("left");
        const property = isLeft ? "--x-1" : "--x-2";
        const parentRect = this.range.getBoundingClientRect();
        const handleRect = this.activeHandle.getBoundingClientRect();
        let newX = e.clientX - parentRect.x - this.startPos;
        if (isLeft) {
            const otherX = parseInt(this.range.style.getPropertyValue("--x-2"));
            newX = Math.min(newX, otherX - handleRect.width);
            newX = Math.max(newX, 0 - handleRect.width / 2);
        } else {
            const otherX = parseInt(this.range.style.getPropertyValue("--x-1"));
            newX = Math.max(newX, otherX + handleRect.width);
            newX = Math.min(newX, parentRect.width - handleRect.width / 2);
        }
        this.activeHandle.dataset.value = this.calcHandleValue(
            (newX + handleRect.width / 2) / parentRect.width
        );
        this.range.style.setProperty(property, newX + "px");
    }

    calcHandleValue(percentage) {
        return Math.round(percentage * (this.max - this.min) + this.min);
    }

    stopMove() {
        window.removeEventListener("mousemove", this.moveListener);
        window.removeEventListener("touchmove", this.moveTouchListener);
    }
}
/*==========================
 Slider
=== === === === === === === === == */
window.addEventListener("DOMContentLoaded", () => {
    new dualRangeSlider(document.querySelector(".dual-range2"));
});

class dualRangeSlider {
    constructor(rangeElement) {
        this.range = rangeElement;
        this.min = Number(rangeElement.dataset.min);
        this.max = Number(rangeElement.dataset.max);
        this.handles = [...this.range.querySelectorAll(".handle")];
        this.startPos = 0;
        this.activeHandle;

        this.handles.forEach((handle) => {
            handle.addEventListener("mousedown", this.startMove.bind(this));
            handle.addEventListener("touchstart", this.startMoveTouch.bind(this));
        });

        window.addEventListener("mouseup", this.stopMove.bind(this));
        window.addEventListener("touchend", this.stopMove.bind(this));
        window.addEventListener("touchcancel", this.stopMove.bind(this));
        window.addEventListener("touchleave", this.stopMove.bind(this));

        const rangeRect = this.range.getBoundingClientRect();
        const handleRect = this.handles[0].getBoundingClientRect();
        this.range.style.setProperty("--x-1", "0px");
        this.range.style.setProperty(
            "--x-2",
            rangeRect.width - handleRect.width / 2 + "px"
        );
        this.handles[0].dataset.value = this.range.dataset.min;
        this.handles[1].dataset.value = this.range.dataset.max;
    }

    startMoveTouch(e) {
        const handleRect = e.target.getBoundingClientRect();
        this.startPos = e.touches[0].clientX - handleRect.x;
        this.activeHandle = e.target;
        this.moveTouchListener = this.moveTouch.bind(this);
        window.addEventListener("touchmove", this.moveTouchListener);
    }

    startMove(e) {
        this.startPos = e.offsetX;
        this.activeHandle = e.target;
        this.moveListener = this.move.bind(this);
        window.addEventListener("mousemove", this.moveListener);
    }

    moveTouch(e) {
        this.move({ clientX: e.touches[0].clientX });
    }

    move(e) {
        const isLeft = this.activeHandle.classList.contains("left");
        const property = isLeft ? "--x-1" : "--x-2";
        const parentRect = this.range.getBoundingClientRect();
        const handleRect = this.activeHandle.getBoundingClientRect();
        let newX = e.clientX - parentRect.x - this.startPos;
        if (isLeft) {
            const otherX = parseInt(this.range.style.getPropertyValue("--x-2"));
            newX = Math.min(newX, otherX - handleRect.width);
            newX = Math.max(newX, 0 - handleRect.width / 2);
        } else {
            const otherX = parseInt(this.range.style.getPropertyValue("--x-1"));
            newX = Math.max(newX, otherX + handleRect.width);
            newX = Math.min(newX, parentRect.width - handleRect.width / 2);
        }
        this.activeHandle.dataset.value = this.calcHandleValue(
            (newX + handleRect.width / 2) / parentRect.width
        );
        this.range.style.setProperty(property, newX + "px");
    }

    calcHandleValue(percentage) {
        return Math.round(percentage * (this.max - this.min) + this.min);
    }

    stopMove() {
        window.removeEventListener("mousemove", this.moveListener);
        window.removeEventListener("touchmove", this.moveTouchListener);
    }
}
/*==========================
 Slider
=== === === === === === === === == */
window.addEventListener("DOMContentLoaded", () => {
    new dualRangeSlider(document.querySelector(".dual-range3"));
});

class dualRangeSlider {
    constructor(rangeElement) {
        this.range = rangeElement;
        this.min = Number(rangeElement.dataset.min);
        this.max = Number(rangeElement.dataset.max);
        this.handles = [...this.range.querySelectorAll(".handle")];
        this.startPos = 0;
        this.activeHandle;

        this.handles.forEach((handle) => {
            handle.addEventListener("mousedown", this.startMove.bind(this));
            handle.addEventListener("touchstart", this.startMoveTouch.bind(this));
        });

        window.addEventListener("mouseup", this.stopMove.bind(this));
        window.addEventListener("touchend", this.stopMove.bind(this));
        window.addEventListener("touchcancel", this.stopMove.bind(this));
        window.addEventListener("touchleave", this.stopMove.bind(this));

        const rangeRect = this.range.getBoundingClientRect();
        const handleRect = this.handles[0].getBoundingClientRect();
        this.range.style.setProperty("--x-1", "0px");
        this.range.style.setProperty(
            "--x-2",
            rangeRect.width - handleRect.width / 2 + "px"
        );
        this.handles[0].dataset.value = this.range.dataset.min;
        this.handles[1].dataset.value = this.range.dataset.max;
    }

    startMoveTouch(e) {
        const handleRect = e.target.getBoundingClientRect();
        this.startPos = e.touches[0].clientX - handleRect.x;
        this.activeHandle = e.target;
        this.moveTouchListener = this.moveTouch.bind(this);
        window.addEventListener("touchmove", this.moveTouchListener);
    }

    startMove(e) {
        this.startPos = e.offsetX;
        this.activeHandle = e.target;
        this.moveListener = this.move.bind(this);
        window.addEventListener("mousemove", this.moveListener);
    }

    moveTouch(e) {
        this.move({ clientX: e.touches[0].clientX });
    }

    move(e) {
        const isLeft = this.activeHandle.classList.contains("left");
        const property = isLeft ? "--x-1" : "--x-2";
        const parentRect = this.range.getBoundingClientRect();
        const handleRect = this.activeHandle.getBoundingClientRect();
        let newX = e.clientX - parentRect.x - this.startPos;
        if (isLeft) {
            const otherX = parseInt(this.range.style.getPropertyValue("--x-2"));
            newX = Math.min(newX, otherX - handleRect.width);
            newX = Math.max(newX, 0 - handleRect.width / 2);
        } else {
            const otherX = parseInt(this.range.style.getPropertyValue("--x-1"));
            newX = Math.max(newX, otherX + handleRect.width);
            newX = Math.min(newX, parentRect.width - handleRect.width / 2);
        }
        this.activeHandle.dataset.value = this.calcHandleValue(
            (newX + handleRect.width / 2) / parentRect.width
        );
        this.range.style.setProperty(property, newX + "px");
    }

    calcHandleValue(percentage) {
        return Math.round(percentage * (this.max - this.min) + this.min);
    }

    stopMove() {
        window.removeEventListener("mousemove", this.moveListener);
        window.removeEventListener("touchmove", this.moveTouchListener);
    }
}