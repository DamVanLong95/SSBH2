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
            ele.slideContact = '.swiper-contact';
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
                var swiper5 = new Swiper(ele.slideContact, {
                    slidesPerView: 1,
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
        // ===============Dropdown check====================
        var CheckboxDropdown = function(el) {
            var _this = this;
            this.isOpen = false;
            this.areAllChecked = false;
            this.$el = $(el);
            this.$label = this.$el.find('.dropdown-label');
            this.$checkAll = this.$el.find('[data-toggle="check-all"]').first();
            this.$inputs = this.$el.find('[type="checkbox"]');

            this.onCheckBox();

            this.$label.on('click', function(e) {
                e.preventDefault();
                _this.toggleOpen();
            });

            this.$checkAll.on('click', function(e) {
                e.preventDefault();
                _this.onCheckAll();
            });

            this.$inputs.on('change', function(e) {
                _this.onCheckBox();
            });
        };

        CheckboxDropdown.prototype.onCheckBox = function() {
            this.updateStatus();
        };

        CheckboxDropdown.prototype.updateStatus = function() {
            var checked = this.$el.find(':checked');

            this.areAllChecked = false;
            this.$checkAll.html('Check All');

            if (checked.length <= 0) {
                this.$label = this.$el.find('.dropdown-label');;
            } else if (checked.length === 1) {
                this.$label.html(checked.parent('label').text());
            } else if (checked.length === this.$inputs.length) {
                this.$label.html('All Selected');
                this.areAllChecked = true;
                this.$checkAll.html('Uncheck All');
            } else {
                this.$label.html(checked.length + ' Selected');
            }
        };

        CheckboxDropdown.prototype.onCheckAll = function(checkAll) {
            if (!this.areAllChecked || checkAll) {
                this.areAllChecked = true;
                this.$checkAll.html('Uncheck All');
                this.$inputs.prop('checked', true);
            } else {
                this.areAllChecked = false;
                this.$checkAll.html('Check All');
                this.$inputs.prop('checked', false);
            }

            this.updateStatus();
        };

        CheckboxDropdown.prototype.toggleOpen = function(forceOpen) {
            var _this = this;

            if (!this.isOpen || forceOpen) {
                this.isOpen = true;
                this.$el.addClass('on');
                $(document).on('click', function(e) {
                    if (!$(e.target).closest('[data-control]').length) {
                        _this.toggleOpen();
                    }
                });
            } else {
                this.isOpen = false;
                this.$el.removeClass('on');
                $(document).off('click');
            }
        };

        var checkboxesDropdowns = document.querySelectorAll('[data-control="checkbox-dropdown"]');
        for (var i = 0, length = checkboxesDropdowns.length; i < length; i++) {
            new CheckboxDropdown(checkboxesDropdowns[i]);
        }
        //================= End Dropdown check=====================

        // =====================scroll brand car page==================
        // duration of scroll animation
        var scrollDuration = 300;
        // paddles
        var leftPaddle = document.getElementsByClassName('left-paddle');
        var rightPaddle = document.getElementsByClassName('right-paddle');
        // get items dimensions
        var itemsLength = $('.item').length;
        var itemSize = $('.item').outerWidth(true);


        // get wrapper width
        var getBrandWrapperSize = function() {
            return $('.section-wrapper').outerWidth();
        }
        var brandWrapperSize = getBrandWrapperSize();
        // the wrapper is responsive
        $(window).on('resize', function() {
            brandWrapperSize = getBrandWrapperSize();
        });
        // size of the visible part of the brand is equal as the wrapper size 
        var brandVisibleSize = brandWrapperSize;

        // get total width of all brand items
        var getBrandSize = function() {
            return itemsLength * itemSize;
        };
        var brandSize = getBrandSize();
        // get how much of brand is invisible
        var brandInvisibleSize = brandSize - brandWrapperSize;

        // get how much have we scrolled to the left
        var getBrandPosition = function() {
            return $('.section-list').scrollLeft();
        };

        // finally, what happens when we are actually scrolling the brand
        $('.section-list').on('scroll', function() {

            // get how much of brand is invisible
            brandInvisibleSize = brandSize - brandWrapperSize;
            // get how much have we scrolled so far
            var brandPosition = getBrandPosition();
            // get some relevant size for the paddle triggering point
            var paddleMargin = 20;
            // console.log("brandPosition", brandPosition);
            var brandEndOffset = brandInvisibleSize - paddleMargin;
            // console.log("brandPositiontrtsrtsrtwr", brandEndOffset);
            // show & hide the paddles 
            // depending on scroll position
            if (brandPosition <= paddleMargin) {
                $(leftPaddle).addClass('hidden');
                $(rightPaddle).removeClass('hidden');
            } else if (brandPosition < brandEndOffset) {
                // show both paddles in the middle
                $(leftPaddle).removeClass('hidden');
                $(rightPaddle).removeClass('hidden');
            } else if (brandPosition >= brandEndOffset) {
                $(leftPaddle).removeClass('hidden');
                $(rightPaddle).addClass('hidden');
            }

        });

        // scroll to left
        $(rightPaddle).on('click', function() {
            $('.section-list').animate({
                scrollLeft: "+=300px"
            }, "slow");
        });

        // scroll to right
        $(leftPaddle).on('click', function() {
            $('.section-list').animate({
                scrollLeft: "-=300px"
            }, "slow");
        });
        //===============end scroll brand car page=====================

        // fold table 
        $(".fold-table tr.view").on("click", function() {
            $(this).toggleClass("open").next(".fold").toggleClass("open");
        });
        // end fold table
        // =========================mega drop down======================
        $('.open').click(function() {
            $(this).toggleClass("show hide");
            $('.content').toggleClass("show hide");
        });

        $('.close').click(function() {
            $('.content').toggleClass("show hide");
            $('.open').toggleClass("show hide");
        });
        // ========================end mega dropdown======================
        // =======================select dropdown=========================
        $('.dropdown2 > .caption').on('click', function() {
            $(this).parent().toggleClass('open');
        });

        $('.dropdown2 > .list > .item').on('click', function() {
            $('.dropdown2 > .list > .item').removeClass('selected');
            $(this).addClass('selected').parent().parent().removeClass('open').children('.caption').text($(this).text());
        });

        $(document).on('keyup', function(evt) {
            if ((evt.keyCode || evt.which) === 27) {
                $('.dropdown2').removeClass('open');
            }
        });

        $(document).on('click', function(evt) {
            if ($(evt.target).closest(".dropdown2 > .caption").length === 0) {
                $('.dropdown2').removeClass('open');
            }
        });
        // =========================end select dropdown=====================
    };


    $(document).ready(function() {
        var homeObj = new homeCls();
        homeObj.run();
        // On resize
        $(window).resize(function() {

        });
    });





}(jQuery, $.app));