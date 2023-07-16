jQuery(document).ready(function($) {

/*------------------------------------------------
            DECLARATIONS
------------------------------------------------*/

    var loader                  = $('#loader');
    var loader_container        = $('#preloader');
    var scroll                  = $(window).scrollTop();  
    var scrollup                = $('.backtotop');
    var primary_menu_toggle     = $('#masthead .menu-toggle');
    var top_menu_toggle         = $('#top-navigation .menu-toggle');
    var dropdown_toggle         = $('button.dropdown-toggle');
    var primary_nav_menu        = $('#masthead .main-navigation');
    var top_nav_menu            = $('#top-navigation .main-navigation');
    var breaking_news_slider    = $('.breaking-news-slider');
    var featured_slider         = $('.featured-slider');
    var filtering               = $('.filtering-posts');

/*------------------------------------------------
            PRELOADER
------------------------------------------------*/

    loader_container.delay(1000).fadeOut();
    loader.delay(1000).fadeOut("slow");
    
/*------------------------------------------------
            BACK TO TOP
------------------------------------------------*/

    $(window).scroll(function() {
        if ($(this).scrollTop() > 1) {
            scrollup.css({bottom:"25px"});
        } 
        else {
            scrollup.css({bottom:"-100px"});
        }
    });

    scrollup.click(function() {
        $('html, body').animate({scrollTop: '0px'}, 800);
        return false;
    });

/*------------------------------------------------
            MAIN NAVIGATION
------------------------------------------------*/
    $('#top-bar').click(function(){
        $('#top-bar .wrapper').slideToggle();
        $('#top-bar').toggleClass('top-menu-active');
    });

    primary_menu_toggle.click(function(){
        primary_nav_menu.slideToggle();
        $(this).toggleClass('active');
        $('.menu-overlay').toggleClass('active');
        $('#masthead .main-navigation').toggleClass('menu-open');
    });

    top_menu_toggle.click(function(){
        top_nav_menu.slideToggle();
        $(this).toggleClass('active');
        $('.menu-overlay').toggleClass('active');
        $('#top-navigation .main-navigation').toggleClass('menu-open');

        if( $('#masthead .menu-toggle').hasClass('active') ) {
            primary_nav_menu.slideUp();
            $('#masthead .main-navigation').removeClass('menu-open');
            $('#masthead .menu-toggle').removeClass('active');
            $('.menu-overlay').toggleClass('active');
        }
    });

    dropdown_toggle.click(function() {
        $(this).toggleClass('active');
       $(this).parent().find('.sub-menu').first().slideToggle();
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() > 210) {
            $('#masthead').addClass('nav-shrink');
        } 
        else {
            $('#masthead').removeClass('nav-shrink');
        }
    });

    $(document).click(function (e) {
        var container = $("#masthead, #top-navigation");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            primary_nav_menu.slideUp();
            $(this).removeClass('active');
            $('.menu-overlay').removeClass('active');
            $('#masthead .main-navigation').removeClass('menu-open');
            $('.menu-toggle').removeClass('active');

            top_nav_menu.slideUp();
            $(this).removeClass('active');
            $('.menu-overlay').removeClass('active');
            $('#top-navigation .main-navigation').removeClass('menu-open');
        }
    });

/*--------------------------------------------------------------
 Keyboard Navigation
----------------------------------------------------------------*/

    if( $(window).width() < 1024 ) {
        $('#primary-menu').find("li").last().bind( 'keydown', function(e) {
            if( e.which === 9 ) {
                e.preventDefault();
                $('#masthead').find('.menu-toggle').focus();
            }
        });

        $('#secondary-menu').find("li").last().bind( 'keydown', function(e) {
            if( e.which === 9 ) {
                e.preventDefault();
                $('#top-navigation').find('.menu-toggle').focus();
            }
        });

        $('#primary-menu > li:last-child button:not(.active)').bind( 'keydown', function(e) {
            if( e.which === 9 ) {
                e.preventDefault();
                $('#masthead').find('.menu-toggle').focus();
            }
        });

        $('#secondary-menu > li:last-child button:not(.active)').bind( 'keydown', function(e) {
            if( e.which === 9 ) {
                e.preventDefault();
                $('#top-navigation').find('.menu-toggle').focus();
            }
        });

        $('#search').find("button").unbind('keydown');

    }
    else {
        $('#primary-menu').find("li").unbind('keydown');

        $('#secondary-menu').find("li").unbind('keydown');

        $('#search').find("button").bind( 'keydown', function(e) {
            var tabKey              = e.keyCode === 9;
            var shiftKey            = e.shiftKey;

            if( tabKey ) {
                e.preventDefault();
                $('#search').hide();
                $('.search-menu > a').removeClass('search-active').focus();
            }

            if( shiftKey && tabKey ) {
                e.preventDefault();
                $('#search').show();
                $('.main-navigation .search-field').focus();
                $('.search-menu > a').addClass('search-active');
            }
        });

        $('.search-menu > a').on('keydown', function (e) {
            var tabKey              = e.keyCode === 9;
            var shiftKey            = e.shiftKey;
            
            if( $('.search-menu > a').hasClass('search-active') ) {
                if ( shiftKey && tabKey ) {
                    e.preventDefault();
                    $('#search').hide();
                    $('.search-menu > a').removeClass('search-active').focus();
                }
            }
        });
    }

    primary_menu_toggle.on('keydown', function (e) {
        var tabKey    = e.keyCode === 9;
        var shiftKey  = e.shiftKey;

        if( primary_menu_toggle.hasClass('active') ) {
            if ( shiftKey && tabKey ) {
                e.preventDefault();
                primary_nav_menu.slideUp();
                $('.main-navigation').removeClass('menu-open');
                $('.menu-overlay').removeClass('active');
                primary_menu_toggle.removeClass('active');
            };
        }
    });

    top_menu_toggle.on('keydown', function (e) {
        var tabKey    = e.keyCode === 9;
        var shiftKey  = e.shiftKey;

        if( top_menu_toggle.hasClass('active') ) {
            if ( shiftKey && tabKey ) {
                e.preventDefault();
                top_nav_menu.slideUp();
                $('.main-navigation').removeClass('menu-open');
                $('.menu-overlay').removeClass('active');
                top_menu_toggle.removeClass('active');
            };
        }
    });


    $(window).resize(function() {
        if( $(window).width() < 1024 ) {
            $('#primary-menu').find("li").last().bind( 'keydown', function(e) {
                if( e.which === 9 ) {
                    e.preventDefault();
                    $('#masthead').find('.menu-toggle').focus();
                }
            });

            $('#secondary-menu').find("li").last().bind( 'keydown', function(e) {
                if( e.which === 9 ) {
                    e.preventDefault();
                    $('#top-navigation').find('.menu-toggle').focus();
                }
            });

            $('#primary-menu > li:last-child button:not(.active)').bind( 'keydown', function(e) {
                if( e.which === 9 ) {
                    e.preventDefault();
                    $('#masthead').find('.menu-toggle').focus();
                }
            });

            $('#secondary-menu > li:last-child button:not(.active)').bind( 'keydown', function(e) {
                if( e.which === 9 ) {
                    e.preventDefault();
                    $('#top-navigation').find('.menu-toggle').focus();
                }
            });

            $('#search').find("button").unbind('keydown');
        }
        else {
            $('#primary-menu').find("li").unbind('keydown');
            $('#secondary-menu').find("li").unbind('keydown');

            $('#search').find("button").bind( 'keydown', function(e) {
                var tabKey              = e.keyCode === 9;
                var shiftKey            = e.shiftKey;

                if( tabKey ) {
                    e.preventDefault();
                    $('#search').hide();
                    $('.search-menu > a').removeClass('search-active').focus();
                }

                if( shiftKey && tabKey ) {
                    e.preventDefault();
                    $('#search').show();
                    $('.main-navigation .search-field').focus();
                    $('.search-menu > a').addClass('search-active');
                }
            });

            $('.search-menu > a').on('keydown', function (e) {
                var tabKey              = e.keyCode === 9;
                var shiftKey            = e.shiftKey;

                if( $('.search-menu > a').hasClass('search-active') ) {
                    if ( shiftKey && tabKey ) {
                        e.preventDefault();
                        $('#search').hide();
                        $('.search-menu > a').removeClass('search-active').focus();
                    }
                }
            });
        }
    });
    primary_menu_toggle.on('keydown', function (e) {
        var tabKey    = e.keyCode === 9;
        var shiftKey  = e.shiftKey;

        if( primary_menu_toggle.hasClass('active') ) {
            if ( shiftKey && tabKey ) {
                e.preventDefault();
                primary_nav_menu.slideUp();
                $('.main-navigation').removeClass('menu-open');
                $('.menu-overlay').removeClass('active');
                primary_menu_toggle.removeClass('active');
            };
        }
    });

    top_menu_toggle.on('keydown', function (e) {
        var tabKey    = e.keyCode === 9;
        var shiftKey  = e.shiftKey;

        if( top_menu_toggle.hasClass('active') ) {
            if ( shiftKey && tabKey ) {
                e.preventDefault();
                top_nav_menu.slideUp();
                $('.main-navigation').removeClass('menu-open');
                $('.menu-overlay').removeClass('active');
                top_menu_toggle.removeClass('active');
            };
        }
    });


/*------------------------------------------------
            Sliders
------------------------------------------------*/
$('.hero-banner-slider').slick({
    customPaging : function(slider, i) {
        var category = $(slider.$slides[i]).data('category');
        var title = $(slider.$slides[i]).data('title');
        var posted_on = $(slider.$slides[i]).data('posted_on');
        var min_read = $(slider.$slides[i]).data('min_read');
        return '<div class="slider-nav"><span class="slide-category">'+category+'</span><span class="slide-title">'+title+'</span><span class="slide-posted-on">'+posted_on+'</span><span class="slide-min-read">'+min_read+'</span></span>';
    }
});

$('.slidder-news-post').slick();

$('.testimonial-slider').slick();

$('#newstation_pro_featured_slider_section').slick();

$('#newstation_pro_restaurant_slider_section').slick();

$('.breaking-news-slider').slick({
    responsive: [
    {
        breakpoint: 1024,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1
        }
    },
    {
        breakpoint: 767,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1
        }
    }
    ]
});

$('.top-politician-slider').slick({
    responsive: [
    {
        breakpoint: 1024,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1
        }
    },
    {
        breakpoint: 767,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1
        }
    }
    ]
});
$('.world-news-slider').slick({
    responsive: [
    {
        breakpoint: 767,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1
        }
    }
    ]
});


$('.featured-news-match-height').matchHeight();

/*------------------------------------------------
                MAGNIFIC POPUP
------------------------------------------------*/

$('.popup-video').magnificPopup({
    type: 'iframe',
    mainClass: 'mfp-fade',
    preloader: true,
});


$('.gallery-popup').magnificPopup( {
    delegate:'.popup', type:'image', tLoading:'Loading image #%curr%...', 
    gallery: {
        enabled: true, navigateByImgClick: true, preload: [0, 1]
    }
    , image: {
        tError:'<a href="%url%">The image #%curr%</a> could not be loaded.', titleSrc:function(item) {
            return item.el.attr('title');
        }
    }
});

/*------------------------------------------------
            Sticky Sidebar
------------------------------------------------*/



/*------------------------------------------------
            Tab Filter
------------------------------------------------*/

$('ul.tabs li').on('click', function(event) {
    event.preventDefault();

    if(!$(this).hasClass('active')) {
        $(this).parent().parent().find('.active').removeClass('active');
    }

    $(this).addClass('active');

    if(!$(this).parent().parent().next().find('.tab-content').eq($(this).index()).hasClass('active')) {
        $(this).parent().parent().next().find('.active').removeClass('active');
    }  

    $(this).parent().parent().next().find('.tab-content').eq($(this).index()).addClass('active');
});

/*------------------------------------------------
            PACKERY
------------------------------------------------*/
$('.grid').packery({
    itemSelector: '.grid-item'
});


/*------------------------------------------------
            PRODUCTS FILTERING
------------------------------------------------*/

$('ul.product-nav li a').click(function(event) {
    event.preventDefault();

    var tab_id = $(this).attr('data-tab');

    $('ul.product-nav li').removeClass('active');
    $(this).addClass('active');

    $('.tab-content').removeClass('active');
    $('.tab-content').hide();

    $("#"+tab_id).show();

});


/*------------------------------------------------
            Tab Filter
------------------------------------------------*/




$('.tabs li').click(function( event ) {
    event.preventDefault();

   var ajax_tab_id = $(this).attr('data-tab');

   var data_url = $(this).attr('data-url');
   var data_name = $(this).attr('data-name');

   $(this).parent().find('li').removeClass('active');
   $(this).parent().parent().parent().find('.tab-content' ).removeClass('active');

   $(this).addClass('active');
   $(this).parent().parent().parent().find('.tab-content#' + ajax_tab_id ).addClass('active');

});

/*------------------------------------------------
                END JQUERY
------------------------------------------------*/

});