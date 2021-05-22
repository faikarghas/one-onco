<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="box__rec3">
                <div class="container p-0">
                    <div class="row">
                        <div class="col-3 d-flex align-items-center justify-content-center">
                            <?php 
                                   $path = public_path('data_dokter\\'.$foto);
                                    $isExists = file_exists($path);
                                    if ($isExists) {
                                        $fotoDokter = $foto;
                                    } else {
                                        $fotoDokter = 'doctor.svg';
                                    }    
                                ?>
                            <div class="rounded_img">
                                
                                <img width="100%" height="100%" src="{{ asset("/data_dokter/$foto") }}" alt="dokter" />
                            </div>
                        </div>
                        <div class="col-7 d-flex flex-column align-items-start">
                            <div class="title_wrapper">
                                <h3><strong>{{ $fullname }}</strong></h3>
                            </div>
                            <ul>
                                <li><p><strong>Unit Operasional :  {{ $layanan }}</strong></p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-5">
            <div class="jadwal_list">
                <h4><strong>Jadwal Praktik</strong></h4>
            </div>
        </div>
        @foreach($dokterPraktek as $row)
        <div class="col-12 col-md-6">
            <div class="box__rec3 box-sh">
                <a href="/direktori-care/{{ $row->faskesId }}">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-3 d-flex align-items-center justify-content-center">
                                <?php
                                    $foto = $row->foto;
                                    $path = public_path('/data_faskes/'.$foto);
                                    $isExists = file_exists($path);
                                    if ($isExists) {
                                            $fotoDokter = $foto;
                                    } else {
                                            $fotoDokter = 'care_center.svg';
                                    }
                                ?>
                                <div class="rounded_img">
                                    <img width="100%" height="100%" src="{{asset("/data_faskes/$fotoDokter")}}" alt="dokter" />
                                </div>
                            </div>
                            <div class="col-7 d-flex flex-column align-items-start">
                                <div class="title_wrapper">
                                    <h3 style="color: #00A2E3;"><strong>{{ $row->namaFaskes }}</strong></h3>
                                </div>
                                <p><strong>{{ $row->phone }}</strong></p>
                                <p><strong>{{ $row->alamat }}</strong></p>
                                <p>{{ $row->website }}</p>
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