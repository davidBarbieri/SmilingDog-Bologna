(function() {
    'use strict';

    //MENU
    $('[data-menu-trigger]').on('click', function() {
        $('[data-menu-wrapper]').toggleClass('open');
    });
})();
