<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="box__rec3">
                <div class="container p-0">
                    <div class="row">
                        <div class="col-3 d-flex align-items-center justify-content-center">
                            <div class="rounded_img">
                                <img width="100%" height="100%" src="{{ asset("/images/doctor.svg") }}" alt="dokter" />
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
        <div class="col-12">
            <div class="jadwal_list">
                <h4><strong>Jadwal Praktik</strong></h4>
            </div>
        </div>
        <div class="col-12 col-md-6">
            @foreach($dokterPraktek as $row)
            <div class="box__rec3">
                <a href="/direktori-care/{{ $row->faskesId }}">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-3 d-flex align-items-center justify-content-center">
                                <div class="rounded_img">
                                    <img width="100%" height="100%" src="{{asset("/images/care_center.svg")}}" alt="dokter" />
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
            @endforeach
        </div>
    </div>
</div>