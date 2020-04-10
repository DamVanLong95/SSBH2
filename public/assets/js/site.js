

(function($) {
    "use strict";

    $.ui = new function() {
        this.scrollTo = function(obj) {
            $('html,body').animate({
                scrollTop: $(obj).offset().top
            }, 'slow');
        };
    };
  // Menu
    $.ui.menu = new function () {
        this.init = function () {
            $(".accodition").click(function () {
                $(this).next().slideToggle('fast');
                $(this).toggleClass('rotate');
            });
            $(".open-sidemenu").click(function () {
                $('#sidenav').toggleClass('menu-mobile');
                $('.block-overlay').toggleClass('over');
                //$('#logo-desktop').toggleClass('d-none');
                $('#logo-desktop').css({zIndex: 0});
                $('body').toggleClass('no-scroll');
                $('.block-header-sale').addClass('slow-layer');
            });
            $(".block-overlay").click(function () {
                $('#sidenav').toggleClass('menu-mobile');
                //$('#logo-desktop').toggleClass('d-none');
                $('#logo-desktop').css({zIndex: 1030});
                $(this).toggleClass('over');
                $('body').toggleClass('no-scroll');
                $('.block-header-sale').removeClass('slow-layer');
            });
        }
    }
    // Video
   
   
})(jQuery);

var isShow = 0;

function openNav() {
    if (isShow == 0) {
        $('#menu-mobile').css({
            transform: 'translateX(0)'
        });
        $('#menu-mobile').css({
            transition: 'all 0.5s'
        });
        $('body').css({
            overflow: 'hidden'
        });
        $('.ovelay-side').css({
            height: '100%',
            width: '100%',
            visibility: 'visible',
        });
        isShow = 1;
    } else {
        $('#menu-mobile').css({
            transform: 'translateX(-300px)'
        });
        $('#menu-mobile').css({
            transition: 'all 0.5s'
        });
        $('body').css({
            overflow: 'visible'
        });
        $('.ovelay-side').css({
            height: '0%',
            width: '0%',
            visibility: 'visible',
        });
        isShow = 0;
    }
}

function closeNav() {
    $('#menu-mobile').css({
        transform: 'translateX(-300px)'
    });
    $('#menu-mobile').css({
        transition: 'all 0.5s'
    });
    $('body').css({
        overflow: 'visible'
    });
    $('.ovelay-side').css({
        height: '0%',
        width: '0%',
        visibility: 'hidden',
    });
    isShow = 0;
}
$(document).ready(function() {
    $('.ovelay-side').on('click', function() {
        $('#menu-mobile').css({
            transform: 'translateX(-300px)'
        });
        $('#menu-mobile').css({
            transition: 'all 0.5s'
        });
        $('body').css({
            overflow: 'visible'
        });
        $('.ovelay-side').css({
            height: '0%',
            width: '0%',
            visibility: 'visible',
        });
        isShow = 0;
    });
    var but = $('#menu-mobile ul li').find('ul');
    if (but.length !== 0) {
        but.before('<button class="accordion"></button>');
        but.addClass('sub-menu');
    }
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        }
    }
});


// Animate menu
$(document).ready(function() {
    // Add smooth scrolling to all links in navbar + footer link
    $("header .section-head .logo a.logo1, header .section-head .menu-main ul li a, .section-banner .banner-content .tt-button, footer a[href='#myPage']").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset() ? $(hash).offset().top : 0
            }, 900, function() {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });

        } // End if
    });

    // Back top
    $(window).scroll(function() {
        if ($(this).scrollTop() > 1000) {
            $('.back-to-top').fadeIn();
        } else {
            $('.back-to-top').fadeOut();
        }
    });

    $('.back-to-top').click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

    $(window).scroll(function() {
        $(".slideanim").each(function() {
            var pos = $(this).offset().top;

            var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
                $(this).addClass("slide");
            }
        });
    });
})

// slick mobile