"use strict";


(function($) {
    var preloaderSrc = llswlStrings.preloader;
    var imageCollections = $( 'img' );

    for (var i = 0; i < $(imageCollections).length; i++) {

        //get data from attribute src and set it to data-src
        var dataSrc = $( imageCollections[i] ).attr( 'src' );

        // set src tag value = preloaderSrc
        $(imageCollections[i]).attr( 'src', preloaderSrc);


        //set original image url to data-src attr
        $(imageCollections[i]).attr( 'data-src', dataSrc);

        //set vd_lazy_load class to image
        $(imageCollections[i]).addClass('llswl_lazy_load');

    }

})(jQuery);
