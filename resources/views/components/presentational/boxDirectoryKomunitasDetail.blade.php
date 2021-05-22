<div class="container mb-5 forDesktop">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="box__rec3">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-3 d-flex align-items-start justify-content-center">
                                <div class="rounded_img">
                                    <img width="100%" height="100%" src="{{asset("/images/care_center.svg")}}" alt="dokter" />
                                </div>
                            </div>
                            <div class="col-9 d-flex flex-column align-items-start">
                                <h3><strong>{{ $name }}</strong></h3>
                                <ul>
                                    <li class="d-flex align-items-start">
                                        <img class="me-4" src="{{asset('images/placeholder.svg')}}" width="14px" alt="icon web">
                                        <p>{{ $address }}<br></p>
                                    </li>
                                    <li class="mt-3 d-flex align-items-start">
                                        <img class="me-4" src="{{asset('images/phone-call.svg')}}" width="14px" alt="icon web">
                                        <p>{{ $phone }}</p>
                                    </li>
                                    <li class="d-flex align-items-start mb-4">
                                        <img class="me-4" src="{{asset('images/phone-call.svg')}}" width="14px" alt="icon web">
                                        <p>{{ $fax }}</p>
                                    </li>
                                    <li class="d-flex align-items-start">
                                        <img class="me-4" src="{{asset('images/global.svg')}}" width="14px" alt="icon web">
                                        <a href="" style="color: #00A2E3">{{ $website }}</a>
                                    </li>
                                </ul>
                                {{-- <img src="{{asset('images/global.svg')}}" alt=""> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="jam_op-title">
                    <p>Layanan Terkait Kanker</p>
                </div>
                <div class="row jam_op-sch">
                    <div class="col-12">
                        <ul class="list-unstyled">
                            @if ($status1==1)
                                <li>Skrining Dan Diagnotis</li>
                            @endif
                            @if ($status2==1)
                                <li>Onkologi Medis & Kemoterapi</li>
                            @endif
                            @if ($status3==1)
                                <li>Radiasi Onkologi</li>
                            @endif
                            @if ($status4==1)
                                <li>Onkologi Bedah</li>
                            @endif
                            @if ($status5==1)
                                <li>Perawatan Paliatif</li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-5">
                <div class="jadwal_list">
                    <h4><strong>Dokter Praktik</strong></h4>
                </div>
            </div>
            @foreach ($viewDokter as $row)
            <div class="col-12 col-md-6">
                <div class="box__rec3 box-sh">
                    <a href="/dokter-detail/{{ $row->dokterId }}">
                        <div class="container p-0">
                            <div class="row">
                                <div class="col-3 d-flex align-items-center justify-content-center">
                                    <div class="rounded_img">
                                        <img width="100%" height="100%" src="{{asset("/images/doctor.svg")}}" alt="dokter" />
                                    </div>
                                </div>
                                <div class="col-7 d-flex flex-column align-items-start justify-content-center">
                                    <div class="title_wrapper">
                                        <h3 style="color: #00A2E3;"><strong>{{$row->fullname}}</strong></h3>
                                    </div>
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
</div>
