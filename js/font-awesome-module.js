(function ($) {
    $.entwine(function ($) {

        /**
         * Class: .icp-auto
         *
         * Load the icon picker
         */
        $('.icp-auto').entwine({
            onmatch: function () {
                $('.icp-auto').iconpicker({
                    hideOnSelect: true,
                    inputSearch: true
                });
            }
        });
    });
})(jQuery);
