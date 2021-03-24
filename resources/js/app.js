require('./bootstrap');
var html = require('./html')
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


});

// CARI KANKER

var kankerData = {
    lokasi:'',
    jenis:''
}

// DESKTOP
$('#selectLokasiKanker').change(function(){
    let data = $(this).val();
    let namaLokasiKanker = $('#selectLokasiKanker option:selected').text().toLowerCase().split(' ').filter((e, i, a) => i != 0).join('-')

    kankerData['lokasi'] = namaLokasiKanker;

    if (data !== "null") {
        $('#selectJenisKanker').removeAttr( "disabled" )
            axios.get(`/jenisKanker/get/${data}`).then(function (response) {
            // handle success
            $('select[name="jenisKanker"]').empty();
            kankerData['jenis'] =  Object.values(response.data)[0].toLowerCase().split(' ').join('-');
            console.log(Object.values(response.data)[0].toLowerCase().split(' ').join('-'))


            $.each(response.data, function(key, value){
                // console.log('finish');
                $('select[name="jenisKanker"]').append(`<option value="${key}">${value}</option>`);
            });
        })
    } else if (data === "null") {
        $('#selectJenisKanker').attr("disabled","disabled")
        $('#selectJenisKanker option').empty().remove()
    }
});

$('#selectJenisKanker').change(function(){
    let namaJenisKanker = $('#selectJenisKanker option:selected').text().toLowerCase().split(' ').join('-')
    kankerData['jenis'] = namaJenisKanker;

    console.log(namaJenisKanker);
})

$('.boxReadMore').click(function (params) {
    console.log(kankerData);
    location.href = `/sistem-tubuh/${kankerData['lokasi']}/${kankerData['jenis']}`
})


//MOBILE


// END CARI KANKER



// DOKTER
$('#selectCities').change(function(){
    let data= $(this).val();
    // console.log(data);
    if (data !== "null") {
        $('.direktori__list .listDokter').append(html.direktoriLoader())
        console.log('ganti');
        $('#selectFasekes').attr( "disabled","disabled")
        $('#selectFasekes option').empty().remove()
        axios.get(`/cities/get/${data}`).then(function (response) {
            $('select[name="faskes"]').empty();
            $('select[name="faskes"]').append('<option value=""> Pilih Kabupaten</option>');
            $.each(response.data, function(key, value){
                // $('select[name="faskes"]').append(`<option value=""> Pilih Kabupaten</option><option value="${key}">${value}</option>`);
                $('select[name="faskes"]').append(new Option(value, key));
            });

            axios.get(`/dokter/get/${data}`).then(function (response) {
                // console.log(data);
                $('.direktori__list .listDokter').empty();
                i = 0;
                $.each(response.data, function(i, dokter ){
                    display = response.data;
                    html.direktoriDoktorBox(display[i]['dokterId'],display[i]['NamaDokterDenganGelar'],display[i]['unit'],display[i]['dokterId'])
                });
            });


        });
    } else if (data === "null") {
        $('#selectFasekes').attr( "disabled","disabled")
        $('#selectFasekes option').empty().remove()
    }
});

$('#selectFaskes').change(function(){
    $('.direktori__list .listDokter').empty();
    let data= $(this).val();
    if (data !== "null") {
        axios.get(`/dokterWithKabupaten/get/${data}`).then(function (response) {
          $.each(response.data, function(i, dokter ){
            display = response.data;
            html.direktoriDoktorBox(display[i]['dokterId'],display[i]['NamaDokterDenganGelar'],display[i]['unit'],display[i]['dokterId'])

          });

        })

    } else if (data === "null") {
        // $('#selectFasekes').attr( "disabled","disabled")
        // $('#selectFasekes option').empty().remove()
    }
});

// LAB
$('#selectProvinces2').change(function(){
  let data= $(this).val();
  // console.log(data);
  if (data !== "null") {
      axios.get(`/faskesWithPropinsi/get/${data}`).then(function (response) {
          $('select[name="faskes2"]').empty();
          $('select[name="faskes2"]').append('<option value=""> Pilih Rumah Sakit</option>');
          $.each(response.data, function(key, value){
              // $('select[name="faskes"]').append(`<option value=""> Pilih Kabupaten</option><option value="${key}">${value}</option>`);
              $('select[name="faskes2"]').append(new Option(value, key));
          });
          html.direktoriLabBox()
      });
  } else if (data === "null") {
      $('#selectFaskes2').attr( "disabled","disabled")
      $('#selectFaskes2 option').empty().remove()
  }
});

$('#selectFaskes2').change(function(){
  $('.direktori__list .listFaskes2').empty();
  let data= $(this).val();
  if (data !== "null") {
      axios.get(`/faskesWithKabupaten/get/${data}`).then(function (response) {
        $.each(response.data, function(i, dokter ){
          display = response.data;
          html.direktoriLabBox()
        });

      })

  } else if (data === "null") {

  }
});

// CARE
$('#selectProvinces3').change(function(){
  let data= $(this).val();
  // console.log(data);
  if (data !== "null") {
      axios.get(`/cities/get/${data}`).then(function (response) {
          $('select[name="cities3"]').empty();
          $('select[name="cities3"]').append('<option value=""> Pilih Kabupaten</option>');
          $.each(response.data, function(key, value){
              // $('select[name="faskes"]').append(`<option value=""> Pilih Kabupaten</option><option value="${key}">${value}</option>`);
              $('select[name="cities3"]').append(new Option(value, key));
          });

          axios.get(`/faskes/get/${data}`).then(function (response) {
              $('.direktori__list .listFaskes').empty();
              i = 0;
              $.each(response.data, function(i, dokter ){
                display = response.data;
                html.direktoriCareBox(display[0]["NamaFaskes"],display[0]["alamat"],display[0]["website"],display[0]["website"])

              });
          });


      });
  } else if (data === "null") {
      $('#selectCities3').attr( "disabled","disabled")
      $('#selectCities3 option').empty().remove()
  }
});

$('#selectCities3').change(function(){
  $('.direktori__list .listFaskes').empty();
  let data= $(this).val();
  if (data !== "null") {
      axios.get(`/faskesWithKabupaten/get/${data}`).then(function (response) {
        $.each(response.data, function(i, dokter ){
            display = response.data;
            html.direktoriCareBox(display[i]["NamaFaskes"],display[i]["alamat"],display[i]["website"],display[i]["website"])

        });

      })

  } else if (data === "null") {
      // $('#selectFasekes').attr( "disabled","disabled")
      // $('#selectFasekes option').empty().remove()
  }
});

// search

$('.search_act').click(function (params) {
    console.log('test');
    $('.searchpop').toggleClass('show')
})

$('.searchinputact').on('keypress', function (e) {
    if(e.which === 13){

       //Disable textbox to prevent multiple submit
       $(this).attr("disabled", "disabled");

       //Do Stuff, submit, etc..
        location.href = '/search'
       //Enable the textbox again if needed.
       $(this).removeAttr("disabled");
    }
});

$('.close-search').click(function (params) {
    $('.searchpop').removeClass('show')
})

$('#showpass').click(function (params) {
    var x = document.getElementById("ipss");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
})
