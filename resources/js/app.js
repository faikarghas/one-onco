require('./bootstrap');
const { default: axios } = require('axios');
var html = require('./html')
// CONTENT FOR SPECIFIC TIME PERIOD
let baseUrl = window.location.origin;


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

// PAGINATION ARTIKEL

$(document).ready(function() {
    let maxPerPage = 150
    let data = $('.pagi-init').html()
    let pageLength = $('.pagi-init').html().split(' ').length
    let page1 = $('.pagi-init').html().split(' ').slice(0,maxPerPage).join(' ')
    let lengthPerPage = Math.ceil(pageLength/maxPerPage)

    $('.pagi-init').html(page1)


    for (let index = 0; index < lengthPerPage; index++) {
        $('.pagination__wrapper .pagination__wrapper-button .page_number').append(`<div class="page_numberButton" data-id=${index+1}>${index+1}</div>`)
    }


    $('.pagination__wrapper .pagination__wrapper-button .page_number .page_numberButton').each(function (index) {
        $(this).click(function () {
            if ($(this).data('id') === 1) {
                $('.pagi-init').html(data.split(' ').slice(0,maxPerPage).join(' '))
                $(window).scrollTop(0);
                $('.page_numberButton').removeClass('active')
                $(this).addClass('active')
            } else if ($(this).data('id') === 2){
                $('.pagi-init').html(data.split(' ').slice(maxPerPage,maxPerPage*2).join(' '))
                $(window).scrollTop(0);
                $('.page_numberButton').removeClass('active')
                $(this).addClass('active')
            } else if($(this).data('id') === 3){
                $('.pagi-init').html(data.split(' ').slice(maxPerPage*2,maxPerPage*3).join(' '))
                $(window).scrollTop(0);
                $('.page_numberButton').removeClass('active')
                $(this).addClass('active')
            } else if ($(this).data('id') === 4){
                $('.pagi-init').html(data.split(' ').slice(maxPerPage*3,maxPerPage*4).join(' '))
                $(window).scrollTop(0);
                $('.page_numberButton').removeClass('active')
                $(this).addClass('active')
            }
        })
    })

    $('.page_numberButton').first().addClass('active')


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
            axios.get(`${baseUrl}/jenisKanker/get/${data}`).then(function (response) {
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

        $('.direktori__list .listDokter').empty();
        $('.direktori__list .listDokter').append(html.direktoriLoader())

        $('#selectFasekes').attr( "disabled","disabled")
        $('#selectFasekes option').empty().remove()

        axios.get(`${baseUrl}/cities/get/${data}`).then(function (response) {
            $('select[name="faskes"]').empty();
            $('select[name="faskes"]').append('<option value=""> Pilih Kabupaten</option>');
            $.each(response.data, function(key, value){
                // $('select[name="faskes"]').append(`<option value=""> Pilih Kabupaten</option><option value="${key}">${value}</option>`);
                $('select[name="faskes"]').append(new Option(value, key));
            });

            axios.get(`${baseUrl}/dokter/get/${data}`).then(function (response) {
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
        $('.direktori__list .listDokter').empty();
        $('.direktori__list .listDokter').append(html.direktoriLoader())

        axios.get(`${baseUrl}/dokterWithKabupaten/get/${data}`).then(function (response) {
            $('.direktori__list .listDokter').empty();
            if (response.data.length != 0) {
                $.each(response.data, function(i, dokter ){
                    display = response.data;
                    html.direktoriDoktorBox(display[i]['dokterId'],display[i]['NamaDokterDenganGelar'],display[i]['unit'],display[i]['dokterId'])
                });
            } else {
                $('.direktori__list .listDokter').empty();
            }
        })

    } else if (data === "null") {
        // $('#selectFasekes').attr( "disabled","disabled")
        // $('#selectFasekes option').empty().remove()
    }
});

$('#selectCitiesM').change(function(){
    let data= $(this).val();
    // console.log(data);
    if (data !== "null") {

        $('.direktori__list .listDokter').empty();
        $('.direktori__list .listDokter').append(html.direktoriLoader())

        $('#selectFasekes').attr( "disabled","disabled")
        $('#selectFasekes option').empty().remove()

        axios.get(`${baseUrl}/cities/get/${data}`).then(function (response) {
            $('select[name="faskes"]').empty();
            $('select[name="faskes"]').append('<option value=""> Pilih Kabupaten</option>');
            $.each(response.data, function(key, value){
                // $('select[name="faskes"]').append(`<option value=""> Pilih Kabupaten</option><option value="${key}">${value}</option>`);
                $('select[name="faskes"]').append(new Option(value, key));
            });

            axios.get(`${baseUrl}/dokter/get/${data}`).then(function (response) {
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

$('#selectFaskesM').change(function(){
    $('.direktori__list .listDokter').empty();
    let data= $(this).val();
    if (data !== "null") {
        $('.direktori__list .listDokter').empty();
        $('.direktori__list .listDokter').append(html.direktoriLoader())

        axios.get(`${baseUrl}/dokterWithKabupaten/get/${data}`).then(function (response) {
            $('.direktori__list .listDokter').empty();
            if (response.data.length != 0) {
                $.each(response.data, function(i, dokter ){
                    display = response.data;
                    html.direktoriDoktorBox(display[i]['dokterId'],display[i]['NamaDokterDenganGelar'],display[i]['unit'],display[i]['dokterId'])
                });
            } else {
                $('.direktori__list .listDokter').empty();
            }
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
      axios.get(`${baseUrl}/faskesWithPropinsi/get/${data}`).then(function (response) {
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
      axios.get(`${baseUrl}/faskesWithKabupaten/get/${data}`).then(function (response) {
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
    $('.direktori__list .listFaskes').empty();
    $('.direktori__list .listFaskes').append(html.direktoriLoader())
      axios.get(`${baseUrl}/cities/get/${data}`).then(function (response) {
          $('select[name="cities3"]').empty();
          $('select[name="cities3"]').append('<option value=""> Pilih Kabupaten</option>');
          $.each(response.data, function(key, value){
              // $('select[name="faskes"]').append(`<option value=""> Pilih Kabupaten</option><option value="${key}">${value}</option>`);
              $('select[name="cities3"]').append(new Option(value, key));
          });

          console.log(response.data);

          axios.get(`${baseUrl}/faskes/get/${data}`).then(function (response) {
              $('.direktori__list .listFaskes').empty();
            // //   i = 0;
            //   $.each(response.data, function(i, dokter ){
            //     display = response.data;

            //     html.direktoriCareBox(display[1]["NamaFaskes"],display[1]["alamat"],display[1]["website"],display[1]["faskesId"])

            //   });

            $.each(response.data, function(i, dokter ){
                display = response.data;
                html.direktoriCareBox(display[i]["NamaFaskes"],display[i]["alamat"],display[i]["website"],display[i]["faskesId"])
                i++;
            })

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
    $('.direktori__list .listFaskes').empty();
    $('.direktori__list .listFaskes').append(html.direktoriLoader())
    axios.get(`${baseUrl}/faskesWithKabupaten/get/${data}`).then(function (response) {
        $('.direktori__list .listFaskes').empty();
        if (response.data.length != 0) {
            $.each(response.data, function(i, dokter ){
                display = response.data;
                html.direktoriCareBox(display[i]["NamaFaskes"],display[i]["alamat"],display[i]["website"],display[i]["faskesId"])
            });
        } else {
            $('.direktori__list .listFaskes').empty();
        }
    })

  } else if (data === "null") {
      // $('#selectFasekes').attr( "disabled","disabled")
      // $('#selectFasekes option').empty().remove()
  }
});

$('#selectProvinces4').change(function(){
    let data= $(this).val();
    // console.log(data);
    if (data !== "null") {
      $('.direktori__list .listFaskes').empty();
      $('.direktori__list .listFaskes').append(html.direktoriLoader())
        axios.get(`${baseUrl}/cities/get/${data}`).then(function (response) {
            $('select[name="cities3"]').empty();
            $('select[name="cities3"]').append('<option value=""> Pilih Kabupaten</option>');
            $.each(response.data, function(key, value){
                // $('select[name="faskes"]').append(`<option value=""> Pilih Kabupaten</option><option value="${key}">${value}</option>`);
                $('select[name="cities3"]').append(new Option(value, key));
            });

            console.log(response.data);

            axios.get(`${baseUrl}/faskes/get/${data}`).then(function (response) {
                $('.direktori__list .listFaskes').empty();
                //i = 0;
                $.each(response.data, function(i, dokter ){
                  display = response.data;

                  html.direktoriCareBox(display[i]["NamaFaskes"],display[i]["alamat"],display[i]["website"],display[i]["faskesId"])
                    i++;
                });
            });


        });
    } else if (data === "null") {
        $('#selectCities3').attr( "disabled","disabled")
        $('#selectCities3 option').empty().remove()
    }
});

$('#selectCities4').change(function(){
$('.direktori__list .listFaskes').empty();
let data= $(this).val();
if (data !== "null") {
    $('.direktori__list .listFaskes').empty();
    $('.direktori__list .listFaskes').append(html.direktoriLoader())
    axios.get(`${baseUrl}/faskesWithKabupaten/get/${data}`).then(function (response) {
        $('.direktori__list .listFaskes').empty();
        if (response.data.length != 0) {
            $.each(response.data, function(i, dokter ){
                display = response.data;
                html.direktoriCareBox(display[i]["NamaFaskes"],display[i]["alamat"],display[i]["website"],display[i]["faskesId"])
                i++;
            });
        } else {
            $('.direktori__list .listFaskes').empty();
        }
    })

} else if (data === "null") {
    // $('#selectFasekes').attr( "disabled","disabled")
    // $('#selectFasekes option').empty().remove()
}
});

// search

$('.search_act').click(function (params) {
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

$('.partner-slider').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 5,
    autoplay:true,
    autoplaySpeed: 2000,
    prevArrow: $('.prev'),
    nextArrow: $('.next'),
    responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            arrows:false
          }
        }
      ]
});



// SELECT API REGISTER FORM

axios.get(`https://dev.farizdotid.com/api/daerahindonesia/provinsi`).then(function (response) {

    $('#register_form select[name="provinsi"]').append('<option value=""> Pilih Kabupaten</option>');
    $.each(response.data.provinsi, function(key, value){
        $('#register_form select[name="provinsi"]').append(`<option value="${value.id}" data-id="${value.id}">${value.nama}</option>`);
    });

});

$('#select_provinsi').change(function(){
    let data= $(this).val();

    if (data !== "null") {

        axios.get(`https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=${data}`).then(function (response) {
            console.log(response);
            $.each(response.data.kota_kabupaten, function(key, value){
                $('#register_form select[name="kota"]').append(`<option value="${value.id}" data-id="${value.id}">${value.nama}</option>`);
            });
        });

    } else if (data === "null") {
        $('#selectFasekes').attr( "disabled","disabled")
        $('#selectFasekes option').empty().remove()
    }
});

$('#select_kota').change(function(){
    let data= $(this).val();

    if (data !== "null") {

        axios.get(`https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=${data}`).then(function (response) {
            console.log(response);
            $.each(response.data.kecamatan, function(key, value){
                $('#register_form select[name="kecamatan"]').append(`<option value="${value.id}" data-id="${value.id}">${value.nama}</option>`);
            });
        });

    } else if (data === "null") {
        $('#selectFasekes').attr( "disabled","disabled")
        $('#selectFasekes option').empty().remove()
    }
});

$(document).ready(function() {

    const form = document.getElementById('newsletterForm');
    const formData = new FormData(form);
    $('#inputEmailNewsletter').keyup(function() {
        if($(this).val() != '') {
           $('#button-addon2').prop('disabled', false);
           $("#button-addon2").click(function() {
            $(this).prop("disabled", true);
            $("#inputEmailNewsletter").prop('disabled', true);
            $(this).html(
              '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>'
            );

            formData.append('email', $('#inputEmailNewsletter').val());
            axios.post(`${baseUrl}/newsletter/store`, formData).then(function (response) {
              //console.log(formData);

              $('#exampleModal').modal('show');
              window.setTimeout(function () {
                $("#exampleModal").modal("hide");
                location.reload();
            }, 5000);
            });

          });
        }
     });

    // LOAD MORE

    let offestLoad = 5
    offestLoad = isNaN(offestLoad) ? 0 : offestLoad;
    let idKat = location.pathname
    switch (idKat) {
        case '/berita-terkini':
            idKat = 1
            break;
        case '/cerita-survivor':
            idKat = 3
            break;
        case '/artikel-kanker':
            idKat = 5
            break;
        default:
            break;
    }

    $('#loadMoreNews').on('click',function () {
        let thisGlob = $(this)
        $(this).html('<div class="lds-dual-ring"></div>')
        axios.get(`${baseUrl}/beritaload/${offestLoad}/${idKat}`).then(function (response) {
            console.log(response);
            response.data.forEach(element => {
                console.log(element);
                html.boxNews(element.title,element.imgDesktop,element.shortContent,element.slug,element.publishDate)
            });
            if (location.pathname === '/cerita-survivor') {
                thisGlob.html('Cerita Inspiratif Lainnya')
            } else {
                thisGlob.html('Berita Lainnya')
            }
        });
        offestLoad+=8
    })

    $("#belanja_sehat_iframe").on("load", function() {
        let head = $("#belanja_sehat_iframe").contents().find("head");
        let css = '<style>nav{background-color:red;}</style>';
        $(head).append(css);
    });
    

});



