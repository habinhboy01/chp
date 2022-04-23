var Logo = document.querySelector('.logo');
var img = document.querySelector('.img_logo');
var imgSrc =  img.getAttribute('data-src');
var homeUrl = document.querySelector('.home-url').href;

$('.bar-button ').on('click',function(){
	$('.menu-mobile').slideToggle();
});

// slider home
$('.carousel_1').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='display-arrow'><i class='fas fa-angle-left'></i></div>","<div class='display-arrow'><i class='fas fa-angle-right'></i></div>"],

    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

$('.carousel_2').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev'><i class='fas fa-angle-left'></i></div>","<div class='btn-next'><i class='fas fa-angle-right'></i></div>"],

    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})

$('.carousel_3').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev2'><i class='fas fa-angle-left'></i></div>","<div class='btn-next2'><i class='fas fa-angle-right'></i></div>"],

    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

$('.carousel_4').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev2'><i class='fas fa-angle-left'></i></div>","<div class='btn-next2'><i class='fas fa-angle-right'></i></div>"],

    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})

$('.carousel_5').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev3'><i class='fas fa-angle-left'></i></div>","<div class='btn-next3'><i class='fas fa-angle-right'></i></div>"],

    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})


$('.carousel_6').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-projects1'><i class='fas fa-angle-left'></i></div>","<div class='btn-projects2'><i class='fas fa-angle-right'></i></div>"],

    autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})


// add id slider tin tức

// var subClass = document.querySelectorAll('div.content-introNews > a > img');
// subClass.forEach(function (element) {
// 	element.id = 'sub-menu2'
// })


