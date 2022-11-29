// sets scroll to top 
let scroll = $(window).scrollTop();
let scrollUp = $('.to-top');

$(window).scroll(function() {
    if($(this).scrollTop() > 1){
        scrollUp.css({bottom:"25px"});
    }
    else {
        scrollUp.css({bottom:"-100px"});
    }
});

scrollUp.click(function() {
    $('html, body').animate({scrollTop: '0px'}, 800);
    return false;
});

//responsive menu
$('.menu-toggle').click(function() {
    $(this).toggleClass('active');
    $(this).parent().find('ul.sidebar-menu').slideToggle();
    $(this).parent().find('div.sidebar-menu > ul').slideToggle();
});

/* $('.dropdown-toggle').click(function() {
    $(this).toggleClass('active');
    $(this).parent().find('.sub-menu').first().slideToggle();
    $(this).parent().find('.children').first().slideToggle();
}); */

if($(window).width() < 1024) {
    $('#site-navigation .sidebar-menu').find("li").last().bind('keydown', function(e) {
        if(!e.shiftKey && e.which === 9) {
            e.preventDefault();
            $('.content-menu-sidebar').find('.menu-toggle').focus();
        }
    });
}
else {
    $('#site-navigation .sidebar-menu').find('.menu-toggle').focus();
}

$(window).resize(function() {
    if($(window).width < 1024) {
        $('#site-navigation .sidebar-menu').find("li").last().bind('keydown', function(e){
            if(!e.shiftKey && which === 9) {
                e.preventDefault();
                $('.content-menu-sidebar').find('.menu-toggle').focus();
            }
        });
    }
    else {
        $('#site-navigation .sidebar-menu').find("li").unbind('keydown');
    }
});

$('.menu-toggle').on('keydown', function (e) {
    var tabKey    = e.keyCode === 9;
    var shiftKey  = e.shiftKey;

    if( $('.menu-toggle').hasClass('active') ) {
        if (shiftKey && tabKey) {
            e.preventDefault();
            $('#site-navigation .sidebar-menu').find("li:last-child > a").focus();
            $('#site-navigation .sidebar-menu').find("li").last().bind( 'keydown', function(e) {
                if(!e.shiftKey && e.which === 9) {
                    e.preventDefault();
                    $('.content-menu-sidebar').find('.menu-toggle').focus();
                }
            });
        };
    }
});

/* $('#icon-bars').addEventListener('click', function(e) {
    e.preventDefault();
    menu.classList.add('nav-open');
    menu.classList.remove('nav-close');
});
$('#icon-close').addEventListener('click', function(e) {
    e.preventDefault();
    menu.classList.remove('nav-open');
    menu.classList.add('nav-close');
}); */

