var User = (function() {
    'use strict';

    /**
     * User class
     */
    var user = {};

    /**
     * Variables
     */

    /**
     * ============================================================
     * Functions
     * ============================================================
     */

    /**
     * User login request
     */
    user.login = function(input) {
        var alertDiv = $('.alert-login');

        $.ajax({
            url: '/api/v1/users/login',
            type: 'post',
            data: input,
            beforeSend: '',
            success: function(data) {
                console.log(data);
                alertDiv
                    .addClass('alert-success')
                    .removeClass('alert-danger')
                    .html('You\'ve successfully logged in')
                    .show();

                setTimeout(function() {
                    location.href = data.link;
                }, 2000);
            },
            error: function(data) {
                console.log(data.responseJSON);
                var errors = data.responseJSON;

                var message = Helper.getErrorMessages(errors.message);

                alertDiv
                    .addClass('alert-danger')
                    .removeClass('alert-success')
                    .html(message)
                    .show();
            }
        });
    };

    /**
     * User registration request
     */
    user.register = function(input) {
        var alertDiv = $('.alert-register');

        $.ajax({
            url: '/api/v1/users/create',
            type: 'post',
            data: input,
            beforeSend: '',
            success: function(data) {
                console.log(data);
                alertDiv
                    .addClass('alert-success')
                    .removeClass('alert-danger')
                    .html('Registration successful')
                    .show();
            },
            error: function(data) {
                console.log(data.responseJSON);
                var errors = data.responseJSON;

                var message = Helper.getErrorMessages(errors.message);

                alertDiv
                    .addClass('alert-danger')
                    .removeClass('alert-success')
                    .html(message)
                    .show();
            }
        });
    };

    /**
     * ============================================================
     * Event listeners
     * ============================================================
     */

    /**
     * User login
     */
    $('#loginForm').on('submit', function(e) {
        e.preventDefault();
        // Call the user login request
        user.login($(this).serialize());
    });

    /**
     * User registration
     */
    $('#registerForm').on('submit', function(e) {
        e.preventDefault();
        // Call the user registration request
        user.register($(this).serialize());
    });

    return user;
})();