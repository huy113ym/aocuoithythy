// Home Slider
$("#home_slider").slick({
    dots: true,
    arrows: true,
    infinite: true,
    speed: 1500,
    fade: true,
    cssEase: 'linear',
    responsive: [
        {
            breakpoint: 768,
            settings: {
                dots: false
            }
        }
    ]
});

$(".service-slider").slick({
    slidesToShow: 2,
    slidesToScroll: 2,
    arrows: true,
    infinite: true,
    speed: 1500,
    autoplay: true,
    responsive: [
        {
            breakpoint: 1080,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3
            }
        },
        {
            breakpoint: 890,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 620,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});

$(".testimonial-slider").slick({
    centerMode: true,
    centerPadding: '0',
    slidesToShow: 3,
    slidesToScroll: 3,
    arrows: true,
    infinite: true,
    speed: 1500,
    autoplay: true,
    responsive: [
        {
            breakpoint: 890,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 620,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});


// Back to Top

const scrollHeight = 200;
const backTopBtn = document.getElementById("back_top");

const scrollContainer = () => {
    return document.documentElement || document.body;
};

const goToTop = () => {
    document.body.scrollIntoView({
        behavior: "smooth"
    });
};

document.addEventListener("scroll", () => {
    if (scrollContainer().scrollTop > scrollHeight) {
        backTopBtn.classList.remove("hidden");
    } else {
        backTopBtn.classList.add("hidden");
    }
});

backTopBtn.addEventListener("click", goToTop);


// Sticky Menu

const header = document.getElementById("masthead");

window.addEventListener("scroll", e => {
    const scrollPosition = window.scrollY;

    if (scrollPosition > 180) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
});


// Mobile Menu

$(document).ready(function() {
    $("#show_menu").click(function() {
        $("body").addClass("not-scroll");
        $("#mobile_nav").addClass("show");
    });

    $("#close_menu").click(function() {
        $("body").removeClass("not-scroll");
        $("#mobile_nav").removeClass("show");
    });
});


// Google translate

var flags = document.getElementsByClassName('flag_link');

Array.prototype.forEach.call(flags, function(e){
    e.addEventListener('click', function(){
        var lang = e.getAttribute('data-lang');
        var languageSelect = document.querySelector("select.goog-te-combo");
        languageSelect.value = lang;
        languageSelect.dispatchEvent(new Event("change"));
    });
});