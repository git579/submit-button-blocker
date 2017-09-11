(function ($) {
    'use strict';

    /**
     * Time of button's disabling
     * @type {number}
     */
    var DISABLE_TIMEOUT = 1000;
    /**
     * Button object
     */
    var button;
    /**
     * Class of button
     */
    var buttonClass = '.disable-before-validate';
    /**
     * Form object
     */
    var form;

    var init = function () {
        button = $(buttonClass);
        form = button.closest('form');
    };

    var disable = function () {
        button.prop('disabled', true);
    };

    var activate = function () {
        button.prop('disabled', false);
    };

    var handle = function () {
        if (form.length === 0) {
            return false;
        }
        form
            .on('beforeValidate', function () {
                disable();
            })
            .on('afterValidate', function (event, messages, errorAttributes) {
                if (errorAttributes.length === 0) {
                    setTimeout(activate, DISABLE_TIMEOUT);
                } else {
                    activate();
                }
            });
    };

    init();
    handle();

})(jQuery);