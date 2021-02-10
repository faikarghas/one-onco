require('./bootstrap');

// CONTENT FOR SPECIFIC TIME PERIOD

window.setInterval(() => {
    const d = new Date();
    const h = d.getHours()

    // pagi
    // 24-12
    // siang
    // 12-15
    // sore
    // 15-18
    // malam
    // 18-24

    if (h > 24 && h < 12) {
        // console.log('pagi');
        $('.box__welcome').css('background-color','#E55A24')
    } else if(h > 12 && h <= 15) {
        // console.log('siang');
        $('.box__welcome').css('background-color','#E55A24')
    } else if(h > 15  && h <= 18){
        // console.log('sore');
        $('.box__welcome').css('background-color','#E55A24')
    } else if(h > 18 && h <= 24){
        $('.box__welcome').css('background-color','#32338E')
        // console.log('malam');
    }

    // console.log(h);

}, 3000);


// MENU HAMBURGER

$('#menu-hamburger').click(function (params) {
    $('#menu-hamburger').toggleClass('open')
    $('.menuShowcase').toggleClass('open')
    $('.menuOverlay').toggleClass('open')
})

// MENU SHOWCASE

$(window).on('scroll', function() {
    var scrollPos = $(this).scrollTop();
    if (scrollPos > 5) {
        $('.headerNavBox').addClass('topScroll')
    } else {
        $('.headerNavBox').removeClass('topScroll')
    }
});


$( document ).ready(function() {
    console.log($('.pagi-init').text().split(' ').length);
});
