(function($, app) {
    //import "./contest";

    var homeCls = function() {
        // Class variables
        var vars = {};

        // Class elements
        var ele = {};

        this.run = function() {
            this.init();
            this.bindEvents();
        };

        this.init = function() {
            vars.id = 0;
            ele.timeStartEvent = "Sep 16, 2019 00:00:00";
            ele.slideCustomer = '.swiper-customer';
            ele.slidePartner = '.swiper-partner';
            ele.slideBanner = '.swiper-banner';
            ele.slideKnow = '.swiper-know';
        };

        this.bindEvents = function() {
            slideHome();
        };

        this.resize = function() {

        };
        var slideHome = function() {
            $(function() {
                var swiper = new Swiper(ele.slideCustomer, {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    autoplay: {
                        delay: 3000,
                    },
                    // navigation: {
                    //     nextEl: '.swiper-button-next',
                    //     prevEl: '.swiper-button-prev',
                    // },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    breakpoints: {
                        1200: {
                            slidesPerView: 3,
                            spaceBetween: 30,
                        },
                        991: {
                            slidesPerView: 2,
                            spaceBetween: 30,

                        },
                        767: {
                            slidesPerView: 1,
                            spaceBetween: 30,
                        },
                        320: {
                            slidesPerView: 1,
                            spaceBetween: 10,
                        }
                    }
                });
                var swiper2 = new Swiper(ele.slidePartner, {
                    slidesPerView: 6,
                    spaceBetween: 30,
                    // autoplay: {
                    //     delay: 3000,
                    // },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    // pagination: {
                    //     el: '.swiper-pagination',
                    //     clickable: true,
                    // },
                    breakpoints: {
                        1200: {
                            slidesPerView: 3,
                            spaceBetween: 30,
                        },
                        991: {
                            slidesPerView: 2,
                            spaceBetween: 30,

                        },
                        767: {
                            slidesPerView: 1,
                            spaceBetween: 30,
                        },
                        320: {
                            slidesPerView: 1,
                            spaceBetween: 10,
                        }
                    }
                });
                var swiper3 = new Swiper(ele.slideBanner, {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    autoplay: {
                        delay: 3000,
                    },
                    // navigation: {
                    //     nextEl: '.swiper-button-next',
                    //     prevEl: '.swiper-button-prev',
                    // },
                    // pagination: {
                    //     el: '.swiper-pagination',
                    //     clickable: true,
                    // },
                    breakpoints: {
                        1200: {
                            slidesPerView: 3,
                            spaceBetween: 30,
                        },
                        991: {
                            slidesPerView: 2,
                            spaceBetween: 30,

                        },
                        767: {
                            slidesPerView: 1,
                            spaceBetween: 30,
                        },
                        320: {
                            slidesPerView: 1,
                            spaceBetween: 10,
                        }
                    }
                });
                var swiper4 = new Swiper(ele.slideKnow, {
                    slidesPerView: 3,
                    spaceBetween: 30,
                    // autoplay: {
                    //     delay: 3000,
                    // },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    // pagination: {
                    //     el: '.swiper-pagination',
                    //     clickable: true,
                    // },
                    breakpoints: {
                        1200: {
                            slidesPerView: 3,
                            spaceBetween: 30,
                        },
                        991: {
                            slidesPerView: 2,
                            spaceBetween: 30,

                        },
                        767: {
                            slidesPerView: 1,
                            spaceBetween: 30,
                        },
                        320: {
                            slidesPerView: 1,
                            spaceBetween: 10,
                        }
                    }
                });
            });
        };

    };


    $(document).ready(function() {
        var homeObj = new homeCls();
        homeObj.run();

        // On resize
        $(window).resize(function() {

        });
    });
}(jQuery, $.app));