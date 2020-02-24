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
        // Dropdown check
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
            
            if(checked.length <= 0) {
            this.$label = this.$el.find('.dropdown-label');;
            }
            else if(checked.length === 1) {
            this.$label.html(checked.parent('label').text());
            }
            else if(checked.length === this.$inputs.length) {
            this.$label.html('All Selected');
            this.areAllChecked = true;
            this.$checkAll.html('Uncheck All');
            }
            else {
            this.$label.html(checked.length + ' Selected');
            }
        };
        
        CheckboxDropdown.prototype.onCheckAll = function(checkAll) {
            if(!this.areAllChecked || checkAll) {
            this.areAllChecked = true;
            this.$checkAll.html('Uncheck All');
            this.$inputs.prop('checked', true);
            }
            else {
            this.areAllChecked = false;
            this.$checkAll.html('Check All');
            this.$inputs.prop('checked', false);
            }
            
            this.updateStatus();
        };
        
        CheckboxDropdown.prototype.toggleOpen = function(forceOpen) {
            var _this = this;
            
            if(!this.isOpen || forceOpen) {
            this.isOpen = true;
            this.$el.addClass('on');
            $(document).on('click', function(e) {
                if(!$(e.target).closest('[data-control]').length) {
                _this.toggleOpen();
                }
            });
            }
            else {
            this.isOpen = false;
            this.$el.removeClass('on');
            $(document).off('click');
            }
        };
        
        var checkboxesDropdowns = document.querySelectorAll('[data-control="checkbox-dropdown"]');
        for(var i = 0, length = checkboxesDropdowns.length; i < length; i++) {
            new CheckboxDropdown(checkboxesDropdowns[i]);
        }
        // End Dropdown check
        
        // scroll brand car page
       // duration of scroll animation
            var scrollDuration = 300;
            // paddles
            var leftPaddle = document.getElementsByClassName('left-paddle');
            var rightPaddle = document.getElementsByClassName('right-paddle');
            // get items dimensions
            var itemsLength = $('.item').length;
            var itemSize = $('.item').outerWidth(true);
            // get some relevant size for the paddle triggering point
            var paddleMargin = 20;

            // get wrapper width
            var getMenuWrapperSize = function() {
                return $('.section-wrapper').outerWidth();
            }
            var menuWrapperSize = getMenuWrapperSize();
            // the wrapper is responsive
            $(window).on('resize', function() {
                menuWrapperSize = getMenuWrapperSize();
            });
            // size of the visible part of the menu is equal as the wrapper size 
            var menuVisibleSize = menuWrapperSize;

            // get total width of all menu items
            var getMenuSize = function() {
                return itemsLength * itemSize;
            };
            var menuSize = getMenuSize();
            // get how much of menu is invisible
            var menuInvisibleSize = menuSize - menuWrapperSize;

            // get how much have we scrolled to the left
            var getMenuPosition = function() {
                return $('.section-list').scrollLeft();
            };

            // finally, what happens when we are actually scrolling the menu
            $('.section-list').on('scroll', function() {

                // get how much of menu is invisible
                menuInvisibleSize = menuSize - menuWrapperSize;
                // get how much have we scrolled so far
                var menuPosition = getMenuPosition();

                var menuEndOffset = menuInvisibleSize - paddleMargin;

                // show & hide the paddles 
                // depending on scroll position
                if (menuPosition <= paddleMargin) {
                    $(leftPaddle).addClass('hidden');
                    $(rightPaddle).removeClass('hidden');
                } else if (menuPosition < menuEndOffset) {
                    // show both paddles in the middle
                    $(leftPaddle).removeClass('hidden');
                    $(rightPaddle).removeClass('hidden');
                } else if (menuPosition >= menuEndOffset) {
                    $(leftPaddle).removeClass('hidden');
                    $(rightPaddle).addClass('hidden');
            }

            });

            // scroll to left
            $(rightPaddle).on('click', function() {
                $('.section-list').animate( { scrollLeft: menuInvisibleSize}, scrollDuration);
            });

            // scroll to right
            $(leftPaddle).on('click', function() {
                $('.section-list').animate( { scrollLeft: '0' }, scrollDuration);
            });
        //end scroll brand car page
        // fold table 
        $(".fold-table tr.view").on("click", function(){
            $(this).toggleClass("open").next(".fold").toggleClass("open");
          });
        // end fold table
    };


    $(document).ready(function() {
        var homeObj = new homeCls();
        homeObj.run();

        // On resize
        $(window).resize(function() {

        });
    });
}(jQuery, $.app));