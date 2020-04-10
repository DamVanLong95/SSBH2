(function ($) {
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
 
})(jQuery);