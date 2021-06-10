<div class="container">
    <div class="row listFaskes" id="faskes_data">
        @foreach ($faskes as $row)
        <div class="col-12 col-lg-6">
            <div class="box__rec2">
                <a href="{{url('/direktori-lab')}}/{{ $row->faskesId }}" class="d-block h-100">
                    <div class="container">
                       <div class="row">
                          <div class="col-3 d-flex align-items-center justify-content-center">
                             <div class="rounded_img">
                                <?php
                                    $foto = $row->foto;
                                    $path = public_path('/data_faskes/'.$foto);
                                    $isExists = file_exists($path);
                                    if ($isExists && !empty($foto)) {
                                          $fotoDokter = $foto;
                                    } else {
                                          $fotoDokter = 'care_center.svg';
                                    }
                                ?>
                                <img width="100%" height="100%" src="{{asset("/data_faskes/$fotoDokter")}}" alt="care_center">
                              </div>
                          </div>
                          <div class="col-7 d-flex flex-column align-items-start justify-content-center">
                             <div class="title_wrapper">
                                <h3><strong>{{ $row->namaFaskes }}</strong></h3>
                             </div>
                             <ul>
                                <li>
                                   <p style="font-size:1.2rem;">{{ $row->alamat }}</p>
                                </li>
                                <li>
                                    <p style="font-size:1.2rem;">{{ $row->phone }}</p>
                                 </li>
                                <li>
                                   <p style="font-size:1.2rem;color:#00A2E3;">{{ $row->website }}</p>
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
            </div>
        </div>
        @endforeach
    </div>
</div>