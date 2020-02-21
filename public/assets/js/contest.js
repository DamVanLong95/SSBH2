//(function ($, app) {
var contestCls = function () {
    // Class variables
    var vars = {};

    // Class elements
    var ele = {};

    this.run = function (shareLink) {
        vars.shareLink = shareLink;
        vars.catId = 0;

        this.init();
        this.bindEvents();
    };

    this.init = function () {
        vars.id = 0;
        vars.pages = {};

        ele.uploadForm = $('.formUpload');
    };

    this.bindEvents = function () {
        upload();
        submit();
        share();
        sort();
        search();
        viewMore();
        getNumberRandom();
        navLink();
    };

    this.resize = function () {

    };

    var upload = function () {
        $(function () {
            if ($('#image-upload').length) {
                $.uploadPreview({
                    input_field: "#image-upload",   // Default: .image-upload
                    preview_box: "#image-preview",  // Default: .image-preview
                    label_field: "#image-label",    // Default: .image-label
                    label_default: "Choose File",   // Default: Choose File
                    label_selected: "<i class='fa fa-camera'></i> Chọn ảnh khác",  // Default: Change File
                    no_label: false                 // Default: false
                });
            }
        });
    };




    function getNumberRandom() {
        $('.btn-random').on('click', function () {
            var random_number = Math.floor(100000 + Math.random() * 900000);
            $('input[name=lucky_number]').val(random_number);
        });
    }

    var submit = function () {
        var $form = ele.uploadForm;

        $('.btn-send').on('click', function () {
            var _cbSubmitForm = function (res) {
                if (res.code) {
                    fbq('track', 'NgocChau-Chiasetrainghiem-Submit');
                    window.location.href = $.app.vars.url + 'pages/contest-detail';
                }
            };
            $.app.ajax(null, 'contest?step=1', $form.serialize(), _cbSubmitForm, 'POST', '.alert-form');
        });
    };

    var share = function () {
        $('.btn-share').on('click', function () {
            var _cbShare = function () {
                $('#voteModal').modal({});
                $('#voteModal .modal-title').html('Xác nhận Share');
                $('#voteModal .alert-captcha').addClass('hidden');
                $('#voteModal .alert-message').removeClass('hidden').html('Đang xử lý...');
                $('#voteModal .alert-message').html('Cảm ơn bạn đã chia sẻ');
            };
            $.app.facebook.share($(this).data('link'), _cbShare, 'pages/contest-list', false);
        });
    }

    this.cbUpload = function (res) {
        if (res.code) {
            $('input[name=image]', ele.uploadForm).val(res.resize_value);
            $('#image-preview', ele.uploadForm).css('background-image', 'url(' + res.resize_link + ')');
            $('#image-label', ele.uploadForm).hide();
        }
    };

    function navLink() {
        $('.nav-link').on('click', function () {
            vars.catId = $(this).data('catid');

            vars.pages[vars.catId] = 1;
            filter(vars.catId, 0);
        });
    }

    function sort() {
        $('.select-sort').on('change', function () {
            vars.pages[vars.catId] = 1;
            filter(vars.catId, 0);
        });
    }

    var search = function () {
        $('.btn-search').on('click', function () {
            vars.pages[vars.catId] = 1;
            filter(vars.catId, 0);
        });

        $('input[name=keyword]').on('keypress', function (event) {
            if (event.which === 13) {
                event.preventDefault();

                vars.pages[vars.catId] = 1;
                filter(vars.catId, 0);
            }
        });
    };

    var viewMore = function () {
        $('.btn-view-more').on('click', function () {

            if (vars.pages[vars.catId]) {
                vars.pages[vars.catId]++;
            } else {
                vars.pages[vars.catId] = 2;
            }

            filter(vars.catId, 1);
        });
    };

    var filter = function (catId, isAppend) {
        isAppend = isAppend || 0;
        $data = {};
        $data.catid = catId;
        $data.page = vars.pages[catId];
        $data.type = $('.select-sort').val();
        $data.keyword = $('.keyword-input').val();

        function _cbSort(res) {
            if (res.code) {
                var $btn_more = $('.btn-view-more');
                if (isAppend) {
                    $('.tab-pane-content').append(res.data.html);
                    if (res.data.items.current_page >= res.data.items.last_page) {
                        $btn_more.hide();
                    }

                } else {
                    $('.tab-pane-content').html(res.data.html);
                    $btn_more.show();
                    if (res.data.items.total <= 9) {
                        $btn_more.hide();
                    }
                }
            }
        }

        $.app.ajax(null, 'contest/category', $data, _cbSort, 'GET', '');
    };
};
//}(jQuery, $.app));