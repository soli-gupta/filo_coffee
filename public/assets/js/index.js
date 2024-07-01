$(document).ready(function () {
    $('.homebannerslider').owlCarousel({
        loop: false,
        margin: 30,
        nav: false,
        dots: true,
        autoWidth: false,
        // navText: ["<img src='images/arrowleft.svg'>","<img src='images/arrowright.svg'>"],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    $('.articleslider').owlCarousel({
        loop: true,
        margin: 100,
        nav: true,
        dots: false,
        autoWidth: false,
        autoplay: 4000,
        navText: ["<img src='./assets/images/slider-arrow-left.svg'>", "<img src='./assets/images/slider-arrow-right.svg'>"],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1.5,
            }
        }
    });

    $('.blogslider').owlCarousel({
        loop: true,
        margin: 75,
        nav: true,
        dots: false,
        autoWidth: false,
        autoplay: 4000,
        navText: ["<img src='./assets/images/slider-arrow-left.svg'>", "<img src='./assetsimages/slider-arrow-right.svg'>"],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            }
        }
    });

    $('.keypeopleslider').owlCarousel({
        loop: true,
        margin: 75,
        nav: true,
        dots: false,
        autoWidth: false,
        autoplay: 4000,
        navText: ["<img src='images/slider-arrow-left.svg'>", "<img src='images/slider-arrow-right.svg'>"],
        responsive: {
            0: {
                items: 2,
                margin: 15,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            }
        }
    });
    $('.testimonialslider').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        dots: false,
        autoWidth: false,
        autoplay: 4000,
        navText: ["<img src='./assets/images/slider-arrow-left.svg'>", "<img src='./assets/images/slider-arrow-right.svg'>"],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 2,
            }
        }
    });


    // Home page banner slick function start
    $(document).on('ready', function () {
        $(".bannerslidernew").slick({
            dots: true,
            infinite: true,
            autoplay: false,
            autoplaySpeed: 4000,
            slidesToShow: 1,
            slidesToScroll: 1
        });
    });
    // Home page banner slick function start


    //Custom Marquee function start
    $('.marqueebox').loopmovement({
        'direction': 'top',
        'speed': 50
    });

    $('.marqueebox2').loopmovement({
        'direction': 'top',
        'speed': 50
    });
    //Custom Marquee function end



    // mobile menu
    $(document).ready(function () { $('#slide, #slide1').click(function () { var hidden = $('.sidewarper'); if (hidden.hasClass('visible')) { hidden.animate({ "left": "-1200px" }, "slow").removeClass('visible'); } else { hidden.animate({ "left": "0px" }, "slow").addClass('visible'); } }); });
    // mobile acordian
    $(document).ready(function ($) { $('.accordion').find('.accordion-toggle').click(function () { $(this).next().slideToggle('fast'); $(".accordion-content").not($(this).next()).slideUp('fast'); }); });
});



// Quote Animation start

gsap.registerPlugin(ScrollTrigger)
const splitTypes = document.querySelectorAll('.reveal-type')
splitTypes.forEach((char, i) => {
    const bg = char.dataset.bgColor
    const fg = char.dataset.fgColor
    const text = new SplitType(char, { types: 'words' })
    gsap.fromTo(text.words,
        {
            color: bg,
        },
        {
            color: fg,
            duration: 0.5,
            stagger: 0.2,
            scrollTrigger: {
                trigger: char,
                start: 'top 90%',
                end: 'top 30%',
                scrub: true,
                markers: false,
                toggleActions: 'play play reverse reverse'
            }
        })
})

// Quote Animation start


//gsap image animation to top start

gsap.registerPlugin(ScrollTrigger);

let revealContainers = document.querySelectorAll(".revealimage");

revealContainers.forEach((container) => {
    let image = container.querySelector("img");
    let tl = gsap.timeline({
        scrollTrigger: {
            trigger: container,
            toggleActions: "restart none none reset"
        }
    });

    tl.set(container, { autoAlpha: 1 });
    tl.from(container, 1.5, {
        xPercent: -100,
        ease: Power2.out
    });
    tl.from(image, 1.5, {
        xPercent: 100,
        scale: 1.3,
        delay: -1.5,
        ease: Power2.out
    });
});


//gsap image animation to top end
