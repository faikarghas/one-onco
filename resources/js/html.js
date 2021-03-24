export function direktoriCareBox(rs,alamat,website,link) {
    $('.direktori__list .listFaskes').append(`<div class="col-12 col-lg-6"><div class="box__rec2">
    <a href="/direktori-care/${link}" class="d-block h-100">
       <div class="container">
          <div class="row">
             <div class="col-3 d-flex align-items-center justify-content-center">
                <div class="rounded_img">
                   <img width="100%" height="100%" src="http://127.0.0.1:8000/images/care_center.svg" alt="dir-dokter.png">
                </div>
             </div>
             <div class="col-7 d-flex flex-column align-items-start">
                <div class="title_wrapper">
                   <h3><strong>${rs}</strong></h3>
                </div>
                <ul>
                   <li>
                      <p style="font-size:1.2rem;">${alamat}</p>
                   </li>
                   <li>
                      <p style="font-size:1.2rem;color:#00A2E3;">${website}</p>
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
}

export function direktoriLabBox(image,alamat,website,link) {
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
}

export function direktoriDoktorBox(link,dokter,unit,desc) {
    $('.direktori__list .listDokter').append(`<div class="col-12 col-lg-6"><div class="box__rec2">
    <a href="/dokter-detail/${link}" class="d-block h-100">
       <div class="container">
          <div class="row">
             <div class="col-3 d-flex align-items-center justify-content-center">
                <div class="rounded_img">
                   <img width="100%" height="100%" src="http://127.0.0.1:8000/images/doctor.svg" alt="dir-dokter.png">
                </div>
             </div>
             <div class="col-7 d-flex flex-column align-items-start">
                <div class="title_wrapper">
                   <h3><strong>${dokter}</strong></h3>
                </div>
                <ul>
                   <li>
                      <p><strong>Unit Operasional : ${unit}</strong></p>
                   </li>
                   <li>
                      <p>${desc}</p>
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
}

export function direktoriLoader() {
   let loader = `<div class="col-12 col-lg-6">
   <div class="box__rec2">
      <a href="/dokter-detail/21011058" class="d-block h-100">
         <div class="container">
            <div class="row">
               <div class="col-3 d-flex align-items-center justify-content-center">
                  <div class="rounded_img" style="
                     background-color: lightgrey;
                     ">
                  </div>
               </div>
               <div class="col-9 d-flex flex-column align-items-center" style="
                  justify-content: center;
                  ">
                  <div class="title_wrapper" style="
                     background-color: lightgrey;
                     ">
                  </div>
                  <div class="title_wrapper" style="
                     background-color: lightgrey;
                     margin-bottom: 0;
                     ">
                  </div>
               </div>
            </div>
         </div>
      </a>
   </div>
   </div>
   <div class="col-12 col-lg-6">
   <div class="box__rec2">
      <a href="/dokter-detail/21011058" class="d-block h-100">
         <div class="container">
            <div class="row">
               <div class="col-3 d-flex align-items-center justify-content-center">
                  <div class="rounded_img" style="
                     background-color: lightgrey;
                     ">
                  </div>
               </div>
               <div class="col-9 d-flex flex-column align-items-center" style="
                  justify-content: center;
                  ">
                  <div class="title_wrapper" style="
                     background-color: lightgrey;
                     ">
                  </div>
                  <div class="title_wrapper" style="
                     background-color: lightgrey;
                     margin-bottom: 0;
                     ">
                  </div>
               </div>
            </div>
         </div>
      </a>
   </div>
   </div>
   `
   return loader
}