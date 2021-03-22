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

    // $('.pagi-init').html(page1)

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
            // console.log('start');
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


// DOKTER

$('#selectCities').change(function(){
    let data= $(this).val();
    // console.log(data);
    if (data !== "null") {
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


                    console.log(data);
                    display = response.data;

                    // console.log(display[i]['dokterId']);

                    $('.direktori__list .listDokter').append(`<div class="col-12 col-lg-6"><div class="box__rec2">
            <a href="/dokter-detail/${display[i]['dokterId']}" class="d-block h-100">
               <div class="container">
                  <div class="row">
                     <div class="col-3 d-flex align-items-center justify-content-center">
                        <div class="rounded_img">
                           <img width="100%" height="100%" src="http://127.0.0.1:8000/images/dir-dokter.png" alt="dir-dokter.png">
                        </div>
                     </div>
                     <div class="col-7 d-flex flex-column align-items-start">
                        <div class="title_wrapper">
                           <h3><strong>${display[i]['NamaDokterDenganGelar']}</strong></h3>
                        </div>
                        <ul>
                           <li>
                              <p><strong>Unit Operasional : ${display[i]['unit']}</strong></p>
                           </li>
                           <li>
                              <p>Kemoterapi</p>
                           </li>
                        </ul>
                     </div>
                     <div class="col-2 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.6 35.13">
                           <path style="fill:#4172CB;" class="a" d="M19.18,4.48,30.53,15h-28a2.56,2.56,0,0,0,0,5.12h28L19.18,30.7a2.56,2.56,0,0,0,3.48,3.74l16.11-15a2.54,2.54,0,0,0,0-3.74L22.67.69a2.55,2.55,0,0,0-3.61.13A2.61,2.61,0,0,0,19.18,4.48Z"></path>
                        </svg>
                     </div>
                  </div>
               </div>
            </a>
            </div></div>`);

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
            $('.direktori__list .listDokter').append(`<div class="col-12 col-lg-6"><div class="box__rec2">
            <a href="/dokter/dokter-detail/${display[i]['dokterId']}" class="d-block h-100">
               <div class="container">
                  <div class="row">
                     <div class="col-3 d-flex align-items-center justify-content-center">
                        <div class="rounded_img">
                           <img width="100%" height="100%" src="http://127.0.0.1:8000/images/dir-dokter.png" alt="dir-dokter.png">
                        </div>
                     </div>
                     <div class="col-7 d-flex flex-column align-items-start">
                        <div class="title_wrapper">
                           <h3><strong>${display[i]['NamaDokterDenganGelar']}</strong></h3>
                        </div>
                        <ul>
                           <li>
                              <p><strong>Unit Operasional Onkologi</strong></p>
                           </li>
                           <li>
                              <p>Kemoterapi</p>
                           </li>
                        </ul>
                     </div>
                     <div class="col-2 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.6 35.13">
                           <path style="fill:#4172CB;" class="a" d="M19.18,4.48,30.53,15h-28a2.56,2.56,0,0,0,0,5.12h28L19.18,30.7a2.56,2.56,0,0,0,3.48,3.74l16.11-15a2.54,2.54,0,0,0,0-3.74L22.67.69a2.55,2.55,0,0,0-3.61.13A2.61,2.61,0,0,0,19.18,4.48Z"></path>
                        </svg>
                     </div>
                  </div>
               </div>
            </a>
         </div></div>`);

          });

        })

    } else if (data === "null") {
        // $('#selectFasekes').attr( "disabled","disabled")
        // $('#selectFasekes option').empty().remove()
    }
});

// lab
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
          $('.direktoriLab__list .listFaskes2').append(`<div class="col-12 col-md-12">
          <div class="direktoriLab__list-item mb-4">
              <div class="row">
                  <div class="col-12 mb-4">
                      <h4><strong>KALGen INNOLAB</strong></h4>
                  </div>
                  <div class="col-5">
                      <img src="http://127.0.0.1:8000/images/kalgen.png" width="100px" alt="kalgen">
                  </div>
                  <div class="col-7">
                      <ul>
                          <li>
                              <img src="{{asset('/images/addr-icon.png')}}" width="15px" alt="">
                              <p>Jl. Yos Sudarso Kav 85, RT.10/RW.11, Sunter Jaya, Tj. Priok, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14360</p>
                          </li>
                          <li>
                              <img src="{{asset('/images/phone-icon.png')}}" width="15px" alt="">
                              <p>(021) 21882388</p>
                          </li>
                          <li>
                              <img src="{{asset('/images/web-icon.png')}}" width="15px" alt="">
                              <p>www.kalgeninnolab.co.id</p>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
          `);
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
          $('.direktori__list .listFaskes').append(``);
        });

      })

  } else if (data === "null") {

  }
});

// care

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
              // console.log(data);
              $('.direktori__list .listFaskes').empty();
              i = 0;
              $.each(response.data, function(i, dokter ){


                  console.log(data);
                  display = response.data;

                  // console.log(display[i]['dokterId']);

                  $('.direktori__list .listFaskes').append(`<div class="col-12 col-md-6">
                  <div class="box__rec3">
                      <div class="container p-0">
                          <div class="row">
                              <div class="col-3 d-flex align-items-start justify-content-center">
                                  <div class="rounded_img">
                                      <img width="100%" height="100%" src="http://127.0.0.1:8000/images/dir-dokter.png" alt="dokter" />
                                  </div>
                              </div>
                              <div class="col-9 d-flex flex-column align-items-start">
                                  <h3><strong>${display[i]['NamaFaskes']}</strong></h3>
                                  <ul>
                                      <li><p>${display[i]['alamat']}<br>${display[i]['propinsi']}</p></li>
                                      <li class="mt-3"><p>${display[i]['fax']}</p></li>
                                      <li><p>${display[i]['phone']}</p></li>
                                  </ul>
                                  <a class="mt-3" href="" style="color: #00A2E3">${display[i]['website']}</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-12 col-md-6">
                  <div class="jam_op-title">
                      <p>Jam Operasional</p>
                  </div>
                  <div class="row">
                      <div class="col-6">
                          <ul class="jam_op-sch">
                              <li><span>Senin</span>09.00 - 15.00</li>
                              <li><span>Selasa</span>09.00 - 15.00</li>
                              <li><span>Rabu</span>09.00 - 15.00</li>
                          </ul>
                      </div>
                      <div class="col-6">
                          <ul class="jam_op-sch">
                              <li><span>Kamis</span>09.00 - 15.00</li>
                              <li><span>Jumat</span>09.00 - 15.00</li>
                              <li><span>Sabtu</span>09.00 - 15.00</li>
                          </ul>
                      </div>
                  </div>
              </div>`);

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
          $('.direktori__list .listFaskes').append(`<div class="col-12 col-md-6">
          <div class="box__rec3">
              <div class="container p-0">
                  <div class="row">
                      <div class="col-3 d-flex align-items-start justify-content-center">
                          <div class="rounded_img">
                              <img width="100%" height="100%" src="http://127.0.0.1:8000/images/dir-dokter.png" alt="dokter" />
                          </div>
                      </div>
                      <div class="col-9 d-flex flex-column align-items-start">
                          <h3><strong>${display[i]['NamaFaskes']}</strong></h3>
                          <ul>
                              <li><p>${display[i]['alamat']}<br>${display[i]['propinsi']}</p></li>
                              <li class="mt-3"><p>${display[i]['fax']}</p></li>
                              <li><p>${display[i]['phone']}</p></li>
                          </ul>
                          <a class="mt-3" href="" style="color: #00A2E3">${display[i]['website']}</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-12 col-md-6">
          <div class="jam_op-title">
              <p>Jam Operasional</p>
          </div>
          <div class="row">
              <div class="col-6">
                  <ul class="jam_op-sch">
                      <li><span>Senin</span>09.00 - 15.00</li>
                      <li><span>Selasa</span>09.00 - 15.00</li>
                      <li><span>Rabu</span>09.00 - 15.00</li>
                  </ul>
              </div>
              <div class="col-6">
                  <ul class="jam_op-sch">
                      <li><span>Kamis</span>09.00 - 15.00</li>
                      <li><span>Jumat</span>09.00 - 15.00</li>
                      <li><span>Sabtu</span>09.00 - 15.00</li>
                  </ul>
              </div>
          </div>
      </div>`);

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