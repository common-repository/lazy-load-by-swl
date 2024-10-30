"use strict";

jQuery(document).ready(function($) {

$('.llswl_lazy_load').Lazy({
    scrollDirection: 'vertical',
    effect: 'fadeIn',
    visibleOnly: true,
    onError: function(element) {
        console.log('error loading ' + element.data('src'));
    }
});

});

