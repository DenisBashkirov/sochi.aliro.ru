$(document).ready(function () {

    AOS.init();


    let breakpoints = {
        xs: 0,
        sm: 375,
        md: 768,
        lg: 1020,
        xl: 1200
    };

    let mobile_xs = window.matchMedia('(max-width: ' + (breakpoints.sm - 1) + 'px)').matches;
    let mobile_sm = window.matchMedia('(min-width: ' + (breakpoints.sm) + 'px) and (max-width: ' + (breakpoints.md - 1) + 'px)').matches;
    let tablet_md = window.matchMedia('(min-width: ' + (breakpoints.md) + 'px) and (max-width: ' + (breakpoints.lg - 1) + 'px)').matches;
    let tablet_lg = window.matchMedia('(min-width: ' + (breakpoints.lg) + 'px) and (max-width: ' + (breakpoints.xl - 1) + 'px)').matches;
    let desktop = window.matchMedia('(min-width: ' + (breakpoints.xl) + 'px)').matches;


    let $headerDropdown = $('.js-header-nav-dropdown');
    if(desktop) {
        $headerDropdown.on('mouseenter', function () {
            let $dropdownMenu = $(this).find('.header-nav-dropdown-wrapper');
            $dropdownMenu.fadeIn('fast');
        });
        $headerDropdown.on('mouseleave', function () {
            let $dropdownMenu = $(this).find('.header-nav-dropdown-wrapper');
            $dropdownMenu.fadeOut('fast');
        });
    } else {
        let $dropdownMenu = '.header-nav-dropdown-wrapper';
        $headerDropdown.on('click', function () {
            let $dropdownMenu = $(this).find('.header-nav-dropdown-wrapper');
            $dropdownMenu.slideToggle('fast');
        });
    }



    let $hamburger = $('.js-hamburger');
    let $mobileMenu = $('.js-mobile_nav');
    $hamburger.on('click', function () {
        $hamburger.toggleClass('is-active');
        $mobileMenu.fadeToggle();
    });


    let shippingSwiper = new Swiper('.shipping-swiper', {
        spaceBetween: 30,
        watchOverflow: true,
        slidesOffsetBefore: 15,
        slidesOffsetAfter: 15,
        navigation: {
            //nextEl: '.swiper-button-next',
            //revEl: '.swiper-button-prev',
        },

        breakpoints: {
            // when window width is >= 320px
            320: {
                initialSlide: 2,
                slidesPerView: 'auto',
                centeredSlides: true,
                centeredSlidesBounds: true,
                pagination: {
                    el: '.shipping-swiper-pagination',
                },
            },
            // when window width is >= 768px
            768: {
                slidesPerView: 'auto',
                centeredSlides: false,
                watchOverflow: false
            },
            // when window width is >= 1200px
            1200: {
                slidesPerView: 4,
                spaceBetween: 30
            }
        }
    });



    let cerificatesSwiper = new Swiper('.certificates-swiper', {
        spaceBetween: 30,
        watchOverflow: true,
        slidesOffsetBefore: 15,
        slidesOffsetAfter: 15,
        pagination: {
            el: '.certificates-swiper-pagination',
        },
        navigation: {
            nextEl: '.certificates-swiper-navigation .swiper-button_next',
            prevEl: '.certificates-swiper-navigation .swiper-button_prev',
        },

        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 'auto',
                centeredSlides: false,
                centeredSlidesBounds: true
            },
            // when window width is >= 768px
            768: {
                slidesPerView: 'auto',
                centeredSlides: false,
                watchOverflow: false
            },
            // when window width is >= 1200px
            1200: {
                slidesPerView: 4,
                spaceBetween: 30,
                slidesOffsetBefore: 0,
                slidesOffsetAfter: 0
            }
        }
    });



    let portfolioSwiper = new Swiper('.portfolio-swiper', {
        spaceBetween: 30,
        watchOverflow: true,
        slidesOffsetBefore: 15,
        slidesOffsetAfter: 15,
        pagination: {
            el: '.portfolio-swiper-pagination',
        },
        navigation: {
            nextEl: '.portfolio-swiper-navigation .swiper-button_next',
            prevEl: '.portfolio-swiper-navigation .swiper-button_prev',
        },

        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 'auto',
                centeredSlides: true,
                centeredSlidesBounds: true
            },
            // when window width is >= 768px
            768: {
                slidesPerView: 'auto',
                centeredSlides: false,
                watchOverflow: false
            },
            // when window width is >= 1200px
            1200: {
                slidesPerView: 4,
                spaceBetween: 30
            }
        }
    });



    let weProduceSwiper = new Swiper('.we-produce-swiper', {
        spaceBetween: 30,
        watchOverflow: true,
        slidesOffsetBefore: 15,
        slidesOffsetAfter: 15,
        pagination: {
            el: '.we-produce-swiper-pagination',
        },
        navigation: {
            //nextEl: '.swiper-button-next',
            //revEl: '.swiper-button-prev',
        },

        breakpoints: {
            // when window width is >= 320px
            320: {
                spaceBetween: 15,
                slidesPerView: 'auto',
                centeredSlides: true,
                slidesOffsetBefore: 0,
                slidesOffsetAfter: 0,
                centeredSlidesBounds: false
            },
            // when window width is >= 768px
            768: {
                slidesPerView: 'auto',
                centeredSlides: false,
                watchOverflow: false
            },
            // when window width is >= 1200px
            1200: {
                slidesPerView: 4,
                spaceBetween: 30
            }
        }
    });


    /*
    ANCHOR SCROLL
     */
    let header = document.querySelector('.header');
    let headerHeight = parseInt(getComputedStyle(header).height) - 1;
    let offset = 30;

    $("a[href^='#']").click(function(e){
        e.preventDefault();
        let _href = $(this).attr("href");
        let paddingTop = parseInt($(_href).css('paddingTop').replace('px', ''));
        let scrollTop = ($(_href).offset().top - headerHeight + offset)+"px";
        console.log(scrollTop)
        $("html, body").animate({scrollTop: scrollTop}, 1200, 'easeInOutQuart');
    });


    let switcherGroup = $('.js-product-switcher');
    let switchProductButton = $('.js-show-product');
    switchProductButton.on('click', function () {

        let activeButton = switcherGroup.find('.js-active');

        // нажатие на не активную кнопку
        if (!$(this).hasClass('js-active')) {

            $(this).removeClass('button_ghost-red');
            $(this).addClass('button_solid-red');

            activeButton.addClass('button_ghost-red');
            activeButton.removeClass('button_solid-red');

            switchProductButton.toggleClass('js-active');

        }


        let productName = $(this).attr('data-product');

        //$(this).removeClass('button_ghost-red');
        //$(this).addClass('button_solid-red');
        $('.product-type-item').hide();

        let productDiv = $("[data-product-name=" + productName + "]");
        productDiv.show();

    });

    let $modals = $('.modal');
    let $modalCloseButtons = $('.js-modal-close');

    $modalCloseButtons.on('click', function () {
        $modals.fadeOut();
    });

    let $modalShowButtons = $('.js-modal-open');
    $modalShowButtons.on('click', function () {
        let modalName = $(this).attr('data-modal');
        let $modal = $('[data-modal-name="' + modalName + '"]');
        $modal.fadeIn();
    });


    $('input[name="phone"]').mask('8(999)999-99-99');

    /*
    FANCYBOX
     */
    $('[data-fancybox="certificate"]').fancybox({
        toolbar : false,
        keyboard: false,
        infobar: false,
        arrows: false,
        touch: false,
        clickSlide: "close",
        mobile: {
            clickSlide: "close",
        }
    });

});
