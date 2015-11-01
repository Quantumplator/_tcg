jQuery(function($){
    var $content      = $('.site');
    var $window = $(window).on('resize', function(){
        var contentheight = $(window).height();
        $content.height(contentheight + 'px');
    }).trigger('resize'); //on page load
});