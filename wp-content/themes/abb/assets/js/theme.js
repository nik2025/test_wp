jQuery(function($) {
    $('.mobile-menu span').on('click' , function(e){
        $('.mobile-menu-container').css('right' , '0');
    });

    $('.mobile-menu-close span').on('click' , function(e){
        $('.mobile-menu-container').css('right' , '-100%');
    });
});
