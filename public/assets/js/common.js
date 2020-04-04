(function ($, app) {

    var commonCls = function () {
        // Class variables
        var vars = {};

        // Class elements
        var ele = {};

        this.run = function () {
            this.init();
            this.bindEvents();
        };

        this.init = function () {
        };

        this.bindEvents = function () {
            sendMail();
        };

        this.resize = function () {

        };

        var sendMail = function () {
            $('.btn-email').on('click', function () {

                let input_data = $('.email-input').val();

                var _cbEmail = function (res) {
                    if (res.code) {

                    }
                };

                $.app.ajax(null, 'contact', {email: input_data}, _cbEmail, 'POST', '.alert-email');
            });
        }

    };

    $(document).ready(function () {
        var commonObj = new commonCls();
        commonObj.run();
    });
}(jQuery, $.app));