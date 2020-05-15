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
            // ele.slideContact = '.swiper-contact';
            ele.slideTreatment = '.swiper-treatment';
            ele.slideBanner = '.swiper-banner';
            ele.slideKnow = '.swiper-know';
            ele.slideSk = '.swiper-sk';
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
                            slidesPerView: 1,
                            spaceBetween: 30,
                        },
                        991: {
                            slidesPerView: 1,
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
                    autoplay: {
                        delay: 3000,
                    },
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
                            slidesPerView: 3,
                            spaceBetween: 30,

                        },
                        767: {
                            slidesPerView: 2,
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
                    // spaceBetween: 30,
                    autoplay: {
                        delay: 3000,
                    },
                    breakpoints: {
                        1200: {
                            slidesPerView: 1,
                            spaceBetween: 30,
                        },
                        991: {
                            slidesPerView: 1,
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
                // var swiper5 = new Swiper(ele.slideContact, {
                //     slidesPerView: 1,
                //     spaceBetween: 30,
                //     // autoplay: {
                //     //     delay: 3000,
                //     // },
                //     navigation: {
                //         nextEl: '.swiper-button-next',
                //         prevEl: '.swiper-button-prev',
                //     },
                //     // pagination: {
                //     //     el: '.swiper-pagination',
                //     //     clickable: true,
                //     // },
                //     breakpoints: {
                //         1200: {
                //             slidesPerView: 3,
                //             spaceBetween: 30,
                //         },
                //         991: {
                //             slidesPerView: 2,
                //             spaceBetween: 30,

                //         },
                //         767: {
                //             slidesPerView: 1,
                //             spaceBetween: 30,
                //         },
                //         320: {
                //             slidesPerView: 1,
                //             spaceBetween: 10,
                //         }
                //     }
                // });
                var swiper6 = new Swiper(ele.slideTreatment, {
                    slidesPerView: 3,
                    spaceBetween: 100,
                    effect: 'coverflow',
                    Centeredslides: true, // set the slide to center
                    coverflowEffect: {
                        rotate: 0, // Slide rotate in degrees
                        stretch: 0, // Stretch space between slides (in px)
                        depth: 100, // Depth offset in px (slides translate in Z axis)
                        modifier: 1, // Effect multipler
                        slideShadows : false, // Enables slides shadows
                      },
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
                            slidesPerView: 1,
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
                var swiper7 = new Swiper(ele.slideSk, {
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
                            slidesPerView: 1,
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
// =====================scroll health page==================
        // duration of scroll animation
        var scrollDuration = 300;
        // paddles
        var leftPaddle2 = document.getElementsByClassName('left-paddle2');
        var rightPaddle2 = document.getElementsByClassName('right-paddle2');
        // get items dimensions
        var itemsLength2 = $('.item2').length;
        var itemSize2 = $('.item2').outerWidth(true);
        // console.log("huhu", leftPaddle2)

        // get wrapper width
        var getBrandWrapperSize = function() {
            return $('.section-wrapper2').outerWidth();
        }
        var brandWrapperSize2 = getBrandWrapperSize();
        // the wrapper is responsive
        $(window).on('resize', function() {
            brandWrapperSize2 = getBrandWrapperSize();
        });
        // size of the visible part of the brand is equal as the wrapper size 
        var brandVisibleSize2 = brandWrapperSize2;

        // get total width of all brand items
        var getBrandSize = function() {
            return itemsLength2 * itemSize2;
        };
        var brandSize2 = getBrandSize();
        // get how much of brand is invisible
        var brandInvisibleSize2 = brandSize2 - brandWrapperSize2;

        // get how much have we scrolled to the left
        var getBrandPosition2 = function() {
            return $('.section-list2').scrollLeft();
        };

        // finally, what happens when we are actually scrolling the brand
        $('.section-list2').on('scroll', function() {

            // get how much of brand is invisible
            brandInvisibleSize2 = brandSize2 - brandWrapperSize2;
            // get how much have we scrolled so far
            var brandPosition2 = getBrandPosition2();
            // get some relevant size for the paddle triggering point
            var paddleMargin2 = 20;
            // console.log("brandPosition", brandPosition);
            var brandEndOffset2 = brandInvisibleSize2 - paddleMargin2;
            // console.log("brandPositiontrtsrtsrtwr", brandEndOffset);
            // show & hide the paddles 
            // depending on scroll position
            if (brandPosition2 <= paddleMargin2) {
                $(leftPaddle2).addClass('hidden');
                $(rightPaddle2).removeClass('hidden');
            } else if (brandPosition2 < brandEndOffset2) {
                // show both paddles in the middle
                $(leftPaddle2).removeClass('hidden');
                $(rightPaddle2).removeClass('hidden');
            } else if (brandPosition2 >= brandEndOffset2) {
                $(leftPaddle2).removeClass('hidden');
                $(rightPaddle2).addClass('hidden');
            }

        });

        // scroll to left
        $(rightPaddle2).on('click', function() {
            $('.section-list2').animate({
                scrollLeft: "+=301px"
            }, "slow");
        });

        // scroll to right
        $(leftPaddle2).on('click', function() {
            $('.section-list2').animate({
                scrollLeft: "-=301px"
            }, "slow");
        });
        //===============end scroll health page=====================
        
        // fold table 
        $(".fold-table tr.view").on("click", function() {
            $(this).toggleClass("open").next(".fold").toggleClass("open");
        });
        // end fold table
        // =========================health and longevity dropdown======================
        // -----------------seclect brand in health---------------
        $(".custom-select-fix").each(function() {
            var classes = $(this).attr("class"),
            id      = $(this).attr("id"),
            name    = $(this).attr("name");
            var template =  '<div class="' + classes + '">';
            template += '<span class="custom-select-fix-trigger" >' + $(this).attr("placeholder") + '</span>';
            template += '<div class="custom-options">';
            $(this).find("option").each(function() {
                template += '<span class="custom-option ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
            });
            template += '</div></div>';
            
            $(this).wrap('<div class="custom-select-fix-wrapper"></div>');
            $(this).hide();
            $(this).after(template);
          });
          $(".custom-option:first-of-type").hover(function() {
            $(this).parents(".custom-options").addClass("option-hover");
          }, function() {
            $(this).parents(".custom-options").removeClass("option-hover");
          });
          $(".custom-select-fix-trigger").on("click", function() {

            // $('html').one('click',function() {
            //   $(".custom-select-fix").removeClass("opened");
            // });
            $(this).parents(".custom-select-fix").toggleClass("opened");
            event.stopPropagation();
          });
          $(".custom-option").on("click", function() {
            $(this).parents(".custom-select-fix-wrapper").find("select").val($(this).data("value"));
            $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
            $(this).addClass("selection");
            $(this).parents(".custom-select-fix").removeClass("opened");
            $(this).parents(".custom-select-fix").find(".custom-select-fix-trigger").text($(this).text());
          });
        //   ----------select in logevity-------------
          $(".select-gray").each(function() {
            var classes = $(this).attr("class"),
            id      = $(this).attr("id"),
            name    = $(this).attr("name");
            var template =  '<div class="' + classes + '">';
            template += '<span class="select-gray-trigger">' + $(this).attr("placeholder") + '</span>';
            template += '<div class="custom-options">';
            $(this).find("option").each(function() {
                template += '<span class="custom-option ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
            });
            template += '</div></div>';
            
            $(this).wrap('<div class="select-gray-wrapper"></div>');
            $(this).hide();
            $(this).after(template);
          });
          $(".custom-option:first-of-type").hover(function() {
            $(this).parents(".custom-options").addClass("option-hover");
          }, function() {
            $(this).parents(".custom-options").removeClass("option-hover");
          });
          $(".select-gray-trigger").on("click", function() {
            $('html').one('click',function() {
              $(".select-gray").removeClass("opened");
            });
            $(this).parents(".select-gray").toggleClass("opened");
            event.stopPropagation();
          });
          $(".custom-option").on("click", function() {
            $(this).parents(".select-gray-wrapper").find("select").val($(this).data("value"));
            $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
            $(this).addClass("selection");
            $(this).parents(".select-gray").removeClass("opened");
            $(this).parents(".select-gray").find(".select-gray-trigger").text($(this).text());
          });
        // ========================end health dropdown======================
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