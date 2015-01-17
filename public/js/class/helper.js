var Helper = (function() {
    'use strict';

    var helper = {};

    /**
     * Get the error message in string
     *
     * @param data
     * @returns {string}
     */
    helper.getErrorMessages = function(data) {
        var message = '';

        // Iterate through each messages
        for (var i = 0; i < data.length; i++) {
            message += data[i] + '<br/>';
        }

        return message;
    };

    return helper;
})();