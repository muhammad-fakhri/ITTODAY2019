$(document).ready(function() {
    var scroll_pos = 0;
    $(document).scroll(function() {
        scroll_pos = $(this).scrollTop();
        if (scroll_pos > 100) {
            $("header").css('background', 'linear-gradient(90deg, #F67E7D 0%, #FFB997 100%)');
            $(".nav-menu-1").css('color', 'white');
        } else {
            $("header").css('background', '');
            $(".nav-menu-1").css('color', '#F67E7D');
        }
    });
});
