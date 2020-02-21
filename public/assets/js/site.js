(function ($) {
    "use strict";
    $.app = new function () {
        this.vars = {};
        this.posting = false;
        var interval = null;
        var tmpHtml = null;
        var instance = this;

        this.init = function (args) {
            //Set vars
            for (var i in args) {
                if (args.hasOwnProperty(i)) {
                    instance.vars[i] = args[i];
                }
            }

            // Another init for class
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $.app.vars.token
                }
            });

            this.facebook.init();
            window.isMobile = function () {
                var check = false;
                (function (a) {
                    if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) check = true;
                })(navigator.userAgent || navigator.vendor || window.opera);
                return check;
            };
        };

        this.ajax = function (obj, url, formData, callback, method, alertClass, allowDuplicate) {
            //if($.app.posting && !allowDuplicate) return false;

            var $button = $(obj);
            var $alert = alertClass ? $(alertClass) : $button.parent().closest('alert');
            method = method || "POST";

            $.app.tmpHtml = obj ? $button.html() : null;
            $button.html('<img style="width:20px" src="' + $.app.vars.url + 'assets/img/loading.gif"/>Đang xử lý...');

            //$alert.addClass('alert').addClass('hidden').addClass('text-left').removeClass('alert-danger').removeClass('alert-success');
            $alert.addClass('text-left').removeClass('alert-danger').removeClass('alert-success');

            $.app.posting = true;
            $.ajax({
                type: method,
                url: $.app.vars.url + url,
                data: formData,
                success: function (data) {
                    $.app.posting = false;
                    $alert.removeClass('hidden').html(data.message);
                    if (data.code) {
                        $alert.addClass('alert-success');
                    } else {
                        $alert.addClass('alert-danger');
                    }

                    $button.html($.app.tmpHtml);

                    if (typeof callback === 'function') {
                        callback(data);
                    }
                },
                error: function () {
                    $.app.posting = false;
                    $button.html($.app.tmpHtml);
                    $alert.removeClass('hidden').addClass('alert-danger').html('<strong>Thông báo:</strong> Lỗi khi xử lý dữ liệu. Bạn vui lòng thử lại.');
                },
                done: function () {}
            });
        };

        this.checkLogin = function (redirectTo, callback, submitId) {

            var _cb = function (data) {
                // Logged in, can continue
                if (data.code !== 2) {
                    $.modal.close();
                    if (callback) {
                        callback(data);
                    } else {
                        if (redirectTo) {
                            window.location.href = redirectTo;
                        }
                    }
                }

                // Logged out, login again
                if (data.code === 2) {
                    // Check login
                    $('#loginModal').modal({});
                    $('#loginModal .form').removeClass('hidden');
                    $('#loginModal .process').addClass('hidden');
                    $('#loginModal .redirect_link').unbind('click').bind('click', function () {
                        $.app.cookie.setCookie('fbRedirect', redirectTo ? redirectTo : window.location.href);
                        $.app.cookie.setCookie('fbCallback', callback ? callback.name : null);
                        window.location.href = data.login_url;
                        return false;
                    });

                    $('.btn-fb, .btn-fblogin-modal').unbind('click').bind('click', function () {
                        var $agent = window.navigator.userAgent;
                        if ($agent.indexOf('SamsungBrowser') > -1 || window.isMobile()) {
                            $.app.cookie.setCookie('fbRedirect', redirectTo ? redirectTo : window.location.href);
                            $.app.cookie.setCookie('fbCallback', callback ? callback.name : null);
                            window.location.href = data.login_url;
                            return false;
                        } else {
                            var _cbLogin = function () {
                                $.modal.close();

                                if (callback) {
                                    callback(data);
                                } else {
                                    if (redirectTo) {
                                        window.location.href = redirectTo;
                                    }
                                }
                            };

                            $.app.facebook.login(_cbLogin);
                            return false;
                        }
                    });

                    $('.btn-gg').unbind('click').bind('click', function () {
                        $.app.cookie.setCookie('fbRedirect', redirectTo ? redirectTo : window.location.href);
                        $.app.cookie.setCookie('fbCallback', callback ? callback.name : null);
                        window.location.href = $.app.vars.url + 'auth/google';
                        return false;
                    });
                }
            };

            $.app.ajax(null, 'contest/checkUser', {
                id: submitId,
                redirect: redirectTo
            }, _cb, 'get', '.alert-none');
            return false;
        };

        // Modal functions
        this.modal = new function () {
            this.show = function (html) {
                $('#sysModal').modal({});
                $('#sysModal .body').html(html);
            };

            this.contentModal = function (obj) {
                var $modal = $('#sysModal');
                var $obj = $(obj);

                $modal.modal({});
                $modal.find('.modal-title').html($obj.data('title'));

                var _cb = function (data) {
                    if (data.code) {
                        $modal.find('.modal-body').html(data.data);
                    }
                };

                $.app.ajax(null, $obj.data('content-ajax'), {}, _cb, 'GET', '');
                return false;
            };

            this.videoModal = function (obj) {
                //alert($.app.vars.url);
            };
        };

        // Facebook SDK functions
        this.facebook = new function () {
            this.init = function () {
                window.fbAsyncInit = function () {
                    FB.init({
                        appId: $.app.vars.facebook_appid,
                        xfbml: true,
                        cookie: true,
                        version: 'v2.9'
                    });
                };

                (function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=" + $.app.vars.facebook_appid;
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            };

            this.login = function (callback) {
                FB.login(function (response) {
                    if (response) {
                        if (response.authResponse && response.status === 'connected') {
                            var accessToken = response.authResponse.accessToken;

                            $('#loginModal .form').addClass('hidden');
                            $('#loginModal .process').removeClass('hidden');

                            //FB.api('/me?fields=id,name,email,link', function (response) {
                            FB.api('/me?fields=id,name,email', function (response) {
                                $.ajax({
                                    type: 'POST',
                                    url: $.app.vars.url + 'auth/fblogin?accessToken=' + accessToken,
                                    data: response,
                                    success: function (data) {
                                        if (data.code === 1) {
                                            if (callback) {
                                                callback();
                                            }
                                        } else {
                                            alert(data.msg);
                                        }
                                    }
                                });
                            });
                        } else {
                            // Response error!!!
                        }
                    }
                    //}, {scope: 'email,user_link'});
                }, {
                    scope: 'email'
                });
            };

            this.share = function (shareLink, callback, redirectLink, forceRedirect) {
                var $hastag = '#thuthachdetoxbuiPM2.5';

                if (window.isMobile() || forceRedirect) {
                    window.location.href = 'https://www.facebook.com/sharer.php?' +
                        'u=' + encodeURIComponent(shareLink) +
                        '&app_id=' + $.app.vars.facebook_appid +
                        '&hashtag=' + encodeURIComponent($hastag) +
                        (window.isMobile() ? '&display=touch' : '&display=page') +
                        '&redirect_uri=' + encodeURIComponent($.app.vars.url + redirectLink);
                } else {
                    FB.getLoginStatus(function (response) {
                        if (response.authResponse) {
                            FB.ui({
                                method: 'share',
                                href: shareLink,
                                mobile_iframe: false,
                                display: 'iframe',
                                //quote: 'Cùng tạo Bùa Thơm Comfort với mình để Tết này mặc gì cũng đẹp nhé các bạn!',
                                hashtag: $hastag
                            }, function (response) {
                                if (response) {
                                    if ((response.error_message && $(window).outerWidth() < 768) || !response.error_message) {
                                        if (callback) {
                                            callback();
                                        }
                                    }
                                }
                            });
                        } else {
                            $.app.facebook.login(null);
                        }
                    });
                }
            };

            this.send = function (sendLink) {
                var _cb = function (data) {
                    FB.getLoginStatus(function (response) {
                        if (response.authResponse) {
                            FB.ui({
                                method: 'send',
                                link: sendLink,
                            });
                        }
                    });
                };

                $.app.checkLogin(null, _cb);
                return false;
            };
        };

        // Submit function
        this.contest = new function () {
            this.submitId = null;
            this.modal = $('#voteModal');

            this.vote = function (submitId) {
                $.app.contest.submitId = submitId;

                var _cb = function (data) {
                    $('#voteModal').modal({});
                    $('#voteModal .modal-title').html('Xác nhận Vote');

                    // End vote time
                    if (data.code === 3) {
                        $('#voteModal .alert-message').removeClass('hidden').html('Đã hết thời gian Vote cho bài thi');
                        $('#voteModal .alert-captcha').addClass('hidden');
                    } else {
                        $('#voteModal .alert-message').addClass('hidden');
                        $('#voteModal .alert-captcha').removeClass('hidden');
                        $('.alert-notify').addClass('hidden');

                        // Init vote form
                        var _cbCatpcha = function (captchaRespondCode) {
                            if (captchaRespondCode !== "") {
                                $('#voteModal .alert-message').removeClass('hidden').html('Đang xử lý...');
                                $('#voteModal .alert-captcha').addClass('hidden');

                                var _cbVote = function (resVote) {
                                    $('#voteModal .alert-message').html(resVote.message);

                                    if (resVote.code) {
                                        $('.contest-votes-' + $.app.contest.submitId).html(resVote.count);
                                        $('.alert-notify').removeClass('hidden');
                                    } else {

                                    }
                                };

                                $.app.ajax(null, 'contest/vote', {
                                    id: $.app.contest.submitId,
                                    'g-recaptcha-response': captchaRespondCode
                                }, _cbVote, 'get', '');
                            }
                        };

                        $.app.recaptcha.init('recaptchaVote', _cbCatpcha);
                    }
                };

                // Check login => If not, redirect to facebook => Back to site to vote
                $.app.checkLogin($.app.vars.url + 'contest/' + submitId + '?vote=' + submitId + '&', _cb, submitId);
                return false;
            };

            this.share = function (shareLink, submitId) {
                $.app.contest.submitId = submitId;
                shareLink += '?utm_medium=user_share&utm_source=facebook&utm_campaign=lifebuoy_detox';

                var _cb = function (data) {
                    var _cbShare = function () {
                        $.app.contest.shareForm($.app.contest.submitId);
                    };

                    // For mobile => redirect to facebook to share => Back to site
                    $.app.facebook.share(shareLink, _cbShare, 'contest/' + submitId + '?shareForm=' + submitId + '&');
                };

                // Check login, if not => redirect to facebook => back to site
                $.app.checkLogin($.app.vars.url + 'contest/' + submitId + '?share=' + submitId + '&', _cb, submitId);
                return false;
            };

            this.shareForm = function (submitId) {
                $('#voteModal').modal({});
                $('#voteModal .modal-title').html('Xác nhận Share');
                $('#voteModal .alert-captcha').addClass('hidden');
                $('#voteModal .alert-message').removeClass('hidden').html('Đang xử lý...');

                var _cbShare = function (resShare) {
                    $('#voteModal .alert-message').html(resShare.message);

                    if (resShare.code) {
                        $('.contest-shares-' + submitId).html(resShare.count);

                        $('#voteModal').modal('hide');
                        $('#thanksModal').modal({});
                    }
                };

                $.app.ajax(null, 'contest/share', {
                    id: submitId
                }, _cbShare, 'get', '');
            };
        };

        this.recaptcha = new function () {
            this.object = null;

            this.init = function (initDivId, verifyCallback) {
                if ($.app.recaptcha.object !== null) {
                    grecaptcha.reset($.app.recaptcha.object);
                } else {
                    $.app.recaptcha.object = grecaptcha.render(initDivId, {
                        'sitekey': $.app.vars.captcha_sitekey,
                        'theme': 'light',
                        'callback': verifyCallback
                    });
                }
            }
        };

        this.cookie = new function () {
            this.domain = '';

            this.getCookie = function (name, defaultValue) {
                var nameEQ = name + "=";
                var ca = document.cookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
                }

                return null;
            };

            this.setCookie = function (name, value, days) {
                var expires = "";
                if (days) {
                    var date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    expires = "; expires=" + date.toUTCString();
                }
                document.cookie = name + "=" + (value || "") + expires + "; path=/";
            };

            this.deleteCookie = function (name) {
                document.cookie = name + '=; Max-Age=-99999999;';
            }
        };

        this.countdown = new function () {
            this.countDownSeconds = function (seconds, updateTo, redirectTo) {
                var timeleft = 0;
                var downloadTimer = setInterval(function () {
                    $(updateTo).html('<span style="color:red">' + (seconds - timeleft) + 's</span>');
                    if ((seconds - timeleft) <= 0) {
                        clearInterval(downloadTimer);
                        if (redirectTo) {
                            window.location.href = redirectTo;
                        }
                    }
                    timeleft++;
                }, 1000);
            };
        };

        this.upload = new function () {
            this.fileTypes = ['jpg', 'jpeg', 'png', 'pdf', 'heic'];
            this.fileSizeMax = 10; // Limit size x MB
            this.fileSizeMin = 0; // Limit size x MB

            this.initForm = function (name) {
                if (!$('#ajaxUploadForm' + name).length) {
                    $('body').append('<form id="ajaxUploadForm' + name + '" action="process.php" class="hidden" method="post" enctype="multipart/form-data">\n' +
                        '        <input name="upload-file" id="upload-file" type="file"  />\n' +
                        '    </form>');
                }

                return $('#ajaxUploadForm' + name);
            };

            this.initUpload = function (formName, submitUrl, progressClass, callback, obj) {
                submitUrl = submitUrl || 'upload/uploadImage';
                var $uploadForm = $.app.upload.initForm(formName);

                $(progressClass).html('<div id="progress-wrp"><div class="progress-bar"></div ><div class="status">0%</div></div>').hide();

                $uploadForm.find('#upload-file').unbind('change').bind('change', function () {
                    var file = $uploadForm.find('#upload-file').get(0).files[0],
                        formData = new FormData();

                    // Check file type and extension
                    if (file) {
                        var extension = file.name.split('.').pop().toLowerCase(),
                            isSuccess = $.app.upload.fileTypes.indexOf(extension) > -1,
                            fileSize = parseFloat(file.size / 1024 / 1024),
                            isLimitSize = fileSize > $.app.upload.fileSizeMax || fileSize < $.app.upload.fileSizeMin;

                        if (!isSuccess) { //no
                            $(progressClass).show().html('<div class="alert alert-danger" style="padding:2px; maring:0px;">Kiểu file không hợp lệ, hệ thống chỉ chấp nhận các file: ' + $.app.upload.fileTypes.join(', ') + '</div>');
                            return false;
                        }

                        if (isLimitSize) { //no
                            $(progressClass).show().html('<div class="alert alert-danger" style="padding:2px; maring:0px;">Dung lượng ảnh không hợp lệ, dung lượng ảnh phải nằm trong khoảng: ' + $.app.upload.fileSizeMin + 'MB đến '+$.app.upload.fileSizeMax+'MB </div>');
                            return false;
                        }

                        if (isSuccess) { //yes
                            var reader = new FileReader();
                            reader.onload = function (e) {

                            };
                            //reader.readAsDataURL(file);
                        }
                    }

                    formData.append('upload-file', file);

                    $.ajax({
                        url: $.app.vars.url + submitUrl,
                        type: 'POST',
                        contentType: false,
                        cache: false,
                        processData: false,
                        data: formData,
                        mimeType: "multipart/form-data",
                        xhr: function () {
                            $(progressClass).show();

                            //upload Progress
                            var xhr = $.ajaxSettings.xhr();
                            if (xhr.upload) {
                                xhr.upload.addEventListener('progress', function (event) {
                                    var percent = 0;
                                    var position = event.loaded || event.position;
                                    var total = event.total;
                                    if (event.lengthComputable) {
                                        percent = Math.ceil(position / total * 100);
                                    }

                                    //update progressbar
                                    $("#progress-wrp .progress-bar").css("width", +percent + "%");
                                    $("#progress-wrp .status").text(percent + "%");
                                }, true);
                            }
                            return xhr;
                        },
                        success: function (res) {
                            res = $.parseJSON(res);

                            //Do something success-ish
                            if (!res.code) {
                                $(progressClass).show().html('<div class="alert alert-danger" style="padding:2px; maring:0px;">' + res.message + '</div>');
                            } else {
                                $(progressClass).show().html('<div class="alert alert-success" style="padding:2px; maring:0px;">' + res.message + '</div>');
                            }

                            if (callback) {
                                callback(res);
                            }

                            $(obj).html('<i class="fa fa-upload"></i> Đổi ảnh khác');
                        }
                    });

                    return false;
                });

                $uploadForm.find('#upload-file').val('');
                $uploadForm.find('#upload-file').trigger('click');
            };

            this.uploadFile = function (progressClass, callback) {
                $.app.upload.fileTypes = ['psd', 'ai'];

                this.initUpload('FileForm', 'upload/uploadFile', progressClass, callback);
                return false;
            };

            this.uploadVideo = function (progressClass, callback) {
                $.app.upload.fileTypes = ['mp4', 'mov', 'avi'];
                $.app.upload.fileSizeMax = 100;
                $.app.upload.fileSizeMin = 0;

                this.initUpload('FileForm', 'upload/uploadVideo', progressClass, callback);
                return false;
            };

            this.uploadImage = function (progressClass, callback) {
                $.app.upload.fileTypes = ['jpg', 'jpeg', 'png', 'heic'];

                this.initUpload('Image2Form', 'upload/uploadImage', progressClass, callback);
                return false;
            };
        };

        this.news = new function () {
            this.pages = {};
            this.loadMore = function (btn, url, appendClass, page, replaceClass) {
                if(page) {
                    $.app.news.pages[encodeURI(url)] = page;
                } else {
                    if ($.app.news.pages[encodeURI(url)]) {
                        $.app.news.pages[encodeURI(url)]++;
                    } else {
                        $.app.news.pages[encodeURI(url)] = 2;
                    }
                }

                $(btn).show();
                var _cb = function(res){
                    if(res.code){
                        if(appendClass){
                            $(appendClass).append(res.data);
                        }
                        if(replaceClass){
                            $(replaceClass).html(res.data);
                        }

                    }else{
                        if(replaceClass){
                            $(replaceClass).html(res.data);
                            $(btn).hide();

                        } else {
                            $(btn).html('Không có thêm dữ liệu!').attr('onclick', 'return false;');
                        }
                    }
                };

                $.app.ajax(btn, url + '&page=' + $.app.news.pages[encodeURI(url)], {}, _cb, 'GET', null);
                return false;
            };
        };
    };
})(jQuery);


(function ($) {
    "use strict";
    $.ui = {};

    $.ui.common = new function () {
        this.scrollTo = function (obj) {
            $('html,body').animate({
                scrollTop: $(obj).offset().top
            }, 'slow');
        };
    };

    $.ui.homepage = new function () {
        this.init = function () {
            //$.ui.common.scrollTo();

            $('#expand_tab').click(function () {
                $('.trending-wrapper').removeClass('show');
                $('.menu-mb').toggleClass('act');
                $(this).closest('li').toggleClass('active');
            })
            $('#topnews_menu').click(function () {
                $('.menu-mb').removeClass('act');
                $('.trending-wrapper').toggleClass('show');
                $('#expand_tab').closest('li').removeClass('active');
            })
            $('.expand-icon').click(function () {
                $(this).toggleClass('visibilityToggle expandToggle');
                $('.kmli-menu-expand-wrapper').toggleClass('visibilityToggle');
            });
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
  
    
    $.ui.slick = new function(){
        this.init = function(){
            $(".kol-slick").slick({
                // infinite: true,
                slidesToShow: 5,
                autoplay: false,
                autoplaySpeed: 1500,
                //  centerMode: true,
                arrows: true,
                prevArrow:'<div class="prev"  role="presentation" style="position: absolute; width: 87px;top:45%; left:0%;margin:auto;height:10px;z-index: 1; cursor: pointer"><img src="./assets/images/kol/prev.png" alt="image" width="100%"></div>',
                nextArrow:'<div class="next"  role="presentation" style="position: absolute; width: 87px; top:45%;right:0%;margin:auto;height:10px;z-index: 1; cursor: pointer"><img src="./assets/images/kol/next.png" alt="image" class="image_prev" width="100%"></div>',
                responsive: [
                    {
                        breakpoint: 1500,
                        settings: {
                            slidesToShow: 4,
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                        }
                    },
                    {
                        breakpoint: 485,
                        settings: {
                            arrows: true,
                            prevArrow:'<div class="prev"  role="presentation" style="position: absolute; width: 55px; top:45%; left:0%;margin:auto;height:10px;z-index: 1; cursor: pointer"><img src="./assets/images/kol/prev.png" alt="image" width="100%"></div>',
                            nextArrow:'<div class="next"  role="presentation" style="position: absolute; width: 55px; top:45%;right:0%;margin:auto;height:10px;z-index: 1; cursor: pointer"><img src="./assets/images/kol/next.png" alt="image" class="image_prev" width="100%"></div>',
                            slidesToShow: 2,
                        }
                    }
                ]
            });
        }
    }
    $.modalClose = new function() {
        this.init = function () {
            $('.jquery-modal.blocker.current').off();
        };
    };

    $(window).resize(function () {
        // $(window).resize(function () {
        //     if ($(window).width() <= 768) {
        //         $('#sidenav').removeClass('main-menu');
        //     } else {
        //         $('#sidenav').addClass('main-menu');
        //     }
        // });
    });

    // On ready
    $(document).ready(function () {
        $.ui.slick.init();
        // $(window).resize(function () {
        //     if ($(window).width() <= 768) {
        //         $('#sidenav').removeClass('main-menu');
        //     } else {
        //         $('#sidenav').addClass('main-menu');
        //     }
        // });
        //$.ui.loading.spriteImg();
        //$.ui.loading.set_ele();
    });

    // On ready stage change
    document.onreadystatechange = function(){
        //$.ui.loading.set_ele_readystage();
    }
})(jQuery);
