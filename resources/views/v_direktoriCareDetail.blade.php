@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>'direktori-care'])
    <main>
        <section class="direktori__menuTab forDesktop" style="background-color: white">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="box__rec">
                            <?php
                                $currentUrl = $_SERVER['REQUEST_URI'];
                                $bgColor = $currentUrl == '/direktori-care' ? '#00A2E3;' : 'white';
                                $color = $currentUrl == '/direktori-care' ? 'white' : '#00A2E3;';
                                $image_url = $currentUrl == '/direktori-care' ? 'dir-care_white.png' : 'dir-care.png';
                            ?>
                            @include('components/presentational.boxRec',[
                                'image_url'=>$image_url,
                                'title'=>'Direktori Dokter',
                                'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                                'color'=>$color,
                                'colorPar'=>$color,
                                'path'=>'direktori-dokter',
                                'bgColor'=> $bgColor
                            ])
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="box__rec">
                            @include('components/presentational.boxRec',[
                                'image_url'=>'dir-lab.png',
                                'title'=>'Direktori Lab',
                                'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                                'color'=>'#00A2E3;',
                                'colorPar'=>'#808080;',
                                'path'=>'direktori-lab',
                                'bgColor'=>'white'
                            ])
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="box__rec">
                                @include('components/presentational.boxRec',[
                                'image_url'=>'dir-care_white.png',
                                'title'=>'Direktori Care Center',
                                'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                                'color'=>'white',
                                'colorPar'=>'white',
                                'path'=>'direktori-care',
                                'bgColor'=>'#00A2E3;'
                            ])
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="direktori__list-detail">
            <div class="container mb-5 forDesktop">
                <div class="row">
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <h3 class="text-start"> <strong>Cari dokter Onkologi di daerahmu:</strong></h3>
                        </div>
                    </div>
                    <div class="col-12">
                        <form action="">
                            <div class="row">
                                <div class="col">
                                    <select class="form-select mb-2" aria-label="Default select example">
                                        <option selected>Pilih Kota</option>
                                        <option value="1">One</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select mb-3" aria-label="Default select example">
                                        <option selected>Pilih Rumah Sakit</option>
                                        <option value="1">One</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
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
                                            <li><p>{{ $address }}<br>Tangerang Selatan</p></li>
                                            <li class="mt-3"><p>{{ $phone }}</p></li>
                                            <li><p>{{ $fax }}</p></li>
                                        </ul>
                                        <a class="mt-3" href="" style="color: #00A2E3">{{ $website }}</a>
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
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="jadwal_list">
                            <h4><strong>Dokter Praktik</strong></h4>
                        </div>
                    </div>
                    @foreach ($viewDokter as $row)
                    <div class="col-12 col-md-6">
                        <div class="box__rec3">
                            <a href="{{url('/dokter-detail')}}/{{ $row->uuid }}">
                                <div class="container p-0">
                                    <div class="row">
                                        <div class="col-3 d-flex align-items-center justify-content-center">
                                            <div class="rounded_img">

                                                <img width="100%" height="100%" src="{{asset("/images/doctor.svg")}}" alt="dokter" />
                                            
                                            </div>
                                        </div>
                                        <div class="col-7 d-flex flex-column align-items-start">
                                            <div class="title_wrapper">
                                                <h3 style="color: #00A2E3;"><strong>{{ $row->fullname }}</strong></h3>
                                            </div>
                                            <p><strong>Jadwal Praktik</strong></p>
                                            <p>{{ $row->jadwal }}</p>
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
        </section>
        <section class="direktori__menuTabM bg-color_lightGrey pt-3 forMobile">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @include('components/presentational.boxRec',[
                            'image_url'=>'dir-lab.png',
                            'title'=>'Direktori Lab',
                            'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                            'color'=>'#00A2E3;',
                            'colorPar'=>'#808080;',
                            'path'=>'direktori-lab',
                            'bgColor'=> 'white'
                        ])
                        @include('components/presentational.boxRec',[
                            'image_url'=>'dir-care.png',
                            'title'=>'Direktori Care Center',
                            'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                            'color'=>'#00A2E3;',
                            'colorPar'=>'#808080;',
                            'path'=>'direktori-care',
                            'bgColor'=> 'white'
                        ])
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection