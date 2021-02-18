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

    if (h <= 12) {
        // console.log('pagi');
        $('.box__welcome').css('background-color','#E55A24')
    } else if(h > 12 && h <= 15) {
        console.log('siang');
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


const d = new Date();
const h = d.getHours()

if (h <= 12) {
    // console.log('pagi');
    $('.box__welcome').css('background-color','#E55A24')
} else if(h > 12 && h <= 15) {
    console.log('siang');
    $('.box__welcome').css('background-color','#E55A24')
} else if(h > 15  && h <= 18){
    // console.log('sore');
    $('.box__welcome').css('background-color','#E55A24')
} else if(h > 18 && h <= 24){
    $('.box__welcome').css('background-color','#32338E')
    // console.log('malam');
}

console.log(h);

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
    let data = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda sapiente sunt fugiat quis molestias, expedita asperiores, eaque laudantium necessitatibus incidunt recusandae perferendis libero non? Nobis dolorum aperiam est esse tenetur a qui ab quos odit totam rerum, quis perspiciatis porro nihil tempora sequi ex repellendus et quisquam. Quia quidem eum qui, blanditiis aperiam, nobis maxime maiores ratione quis corrupti ipsam consequuntur iure quisquam possimus at voluptatem alias? Qui veniam magnam suscipit officiis et quod officia necessitatibus atque corrupti odio accusantium optio laudantium possimus, dicta consequuntur blanditiis quos ipsam vero nam veritatis eum! Architecto id reprehenderit sit facere eaque placeat iure in similique vero, totam ipsum repellat pariatur dolorum natus itaque tenetur laboriosam iste hic corporis, deleniti qui? Voluptatibus voluptates commodi praesentium molestiae pariatur eius, dolores fugiat! Asperiores est alias tempore sunt aperiam reprehenderit provident quo a. Nostrum commodi vero labore ad molestias consectetur minus. Repellendus illum tenetur excepturi facere voluptatem fugiat praesentium sapiente, corporis enim, minima ipsa consequuntur ad repellat esse? Magnam accusamus exercitationem repellat laudantium ut sint numquam reiciendis neque quo harum excepturi tempore hic commodi minima molestias, alias voluptatibus ipsa"
    let pageLength = $('.pagi-init').text().split(' ').length
    let page1 = $('.pagi-init').text().split(' ').slice(0,150).join(' ')
    let lengthPerPage = Math.ceil(pageLength/150)

    $('.pagi-init').html(page1)


    for (let index = 0; index < lengthPerPage; index++) {
        $('.pagination__wrapper .pagination__wrapper-button .page_number').append(`<div class="page_numberButton" data-id=${index+1}>${index+1}</div>`)
    }


    $('.pagination__wrapper .pagination__wrapper-button .page_number .page_numberButton').each(function (index) {
        $(this).click(function () {
            console.log( $(this).data('id'));
            if ($(this).data('id') === 2) {
                $('.pagi-init').html(data.split(' ').slice(150,pageLength).join(' '))
                $(window).scrollTop(0);
            } else {
                $('.pagi-init').html(data.split(' ').slice(0,150).join(' '))
                $(window).scrollTop(0);
            }
        })
    })

    $('.show_all').click(function (params) {
        $('.pagi-init').html(data)
    })

    // $('.pagi-init').html(page1)

});
