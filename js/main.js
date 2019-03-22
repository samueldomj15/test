$(function(){
    // Muestra el menu en version movil
    $('.navbar__toggle-menu').click(function () {
        $('.navbar__menu').toggleClass('show');
    
        if ($('.navbar__menu').hasClass('show')) {
            $('.navbar__toggle-menu i').removeClass('fa-bars');
            $('.navbar__toggle-menu i').addClass('fa-times');
        } else {
            $('.navbar__toggle-menu i').removeClass('fa-times');
            $('.navbar__toggle-menu i').addClass('fa-bars');
        }
    });
    
    // Muestra el submenu en version movil
    $('.navbar__toggle-dropdown').click(function () {
        $('.navbar__dropdown').toggleClass('show');
    
        if ($('.navbar__dropdown').hasClass('show')) {
            $('.navbar__toggle-dropdown').addClass('rotate');
        } else {
            $('.navbar__toggle-dropdown').removeClass('rotate');
        }
    });
});

// accordion
$(function(){
    var Accordion = function(el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;

        var accordionHeader = this.el.find('.accordion__header');

        // eventos
        accordionHeader.on('click', {el: this.el, multiple: this.multiple}, this.dropdown);
    }

    Accordion.prototype.dropdown = function(e) {
        var $el = e.data.el;
            $this = $(this),
            $next = $this.next();
        
        $next.slideToggle();
        $this.parent().toggleClass('show');

        if (!e.data.multiple) {
            $el.find('.accordion__body').not($next).slideUp().parent().removeClass('show');
        };
    }

    var accordion = new Accordion($('.accordion'), false);
});

// plugin Swipebox
$( '.swipebox' ).swipebox();

// plugins owlcarousel s-testimonials
$('.testimonials__carousel').owlCarousel({
    loop:true,
    margin:20,
    // nav:true,
    autoPlay:true,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:2
        }
    }
})

// plugins owlcarousel s-our-brands
$('.s-our-brands__carousel').owlCarousel({
    loop:false,
    margin:20,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:2
        }
    }
})
