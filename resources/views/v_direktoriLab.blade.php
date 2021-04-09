@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>'/'])
    <main>
        <section class="direktori__menuTab forDesktop">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4">
                            <?php
                                $currentUrl = $_SERVER['REQUEST_URI'];
                                $bgColor = $currentUrl == '/direktori-lab' ? '#00A2E3;' : 'white';
                                $color = $currentUrl == '/direktori-lab' ? 'white' : '#00A2E3;';
                                $image_url = $currentUrl == '/direktori-lab' ? 'dir-lab_white.png' : 'directori_komunitas.svg';
                            ?>
                            @include('components/presentational.boxRec',[
                                'image_url'=>'directori_dokter2.svg',
                                'title'=>'Direktori Dokter',
                                'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                                'color'=>'#00A2E3;',
                                'colorPar'=>'#808080;',
                                'path'=>'direktori-dokter',
                                'bgColor'=> 'white'
                            ])
                    </div>
                    <div class="col-12 col-lg-4">
                            @include('components/presentational.boxRec',[
                                'image_url'=>$image_url,
                                'title'=>'Direktori Lab',
                                'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                                'color'=>$color,
                                'colorPar'=>$color,
                                'path'=>'direktori-lab',
                                'bgColor'=>$bgColor
                            ])
                    </div>
                    <div class="col-12 col-lg-4">
                        @include('components/presentational.boxRec',[
                            'image_url'=>'directori_care_center.svg',
                            'title'=>'Direktori Care Center',
                            'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                            'color'=>'#00A2E3;',
                            'colorPar'=>'#808080;',
                            'path'=>'direktori-care',
                            'bgColor'=>'white'
                        ])
                    </div>
                </div>
            </div>
        </section>
        <section class="direktoriLab__list pt-5">
            <div class="container mb-5 forDesktop">
                <div class="row">
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <h3 class="text-start"> <strong>Cari dokter Onkologi di daerahmu:</strong></h3>
                        </div>
                    </div>
                    <div class="col-12">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-12 mb-4 mt-4">
                                    <input style="border-radius: 12px;" type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Ketik kata kunci">
                                </div>
                                <div class="col">
                                    <select class="form-select mb-2" aria-label="Default select example" id="selectProvinces2" name="provinces2">
                                        <option selected>Pilih Kota</option>
                                        @foreach ($provinces as $province => $value)
                                            <option value="{{ $province }}"> {{ $value }}</option>   
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select mb-3" aria-label="Default select example" id="selectFaskes2" name="faskes2">
                                        <option value="">Pilih Rumah Sakit</option>
                                    </select>
                                </div>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row listFaskes2">
                    {{-- <div class="col-12 col-md-6">
                        <div class="direktoriLab__list-item mb-4">
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <h4><strong>KALGen INNOLAB</strong></h4>
                                </div>
                                <div class="col-5">
                                    <img src="{{asset('/images/kalgen.png')}}" width="100px" alt="kalgen">
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
                    <div class="col-12 col-md-6">
                        <div class="direktoriLab__list-item mb-4">
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <h4><strong>KALGen INNOLAB</strong></h4>
                                </div>
                                <div class="col-5">
                                    <img src="{{asset('/images/kalgen.png')}}" width="100px" alt="kalgen">
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
                    </div> --}}
                </div>
            </div>
        </section>
        <section class="bg-color_lightGrey pt-3 pb-4 forMobile">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @include('components/presentational.boxRec',array(
                            'image_url'=>'directori_dokter2.svg',
                            'title'=>'Direktori Dokter',
                            'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                            'color'=>'#00A2E3;',
                            'colorPar'=>'#808080;',
                            'path'=>'direktori-dokter',
                            'bgColor'=> 'white'
                        ))
                        @include('components/presentational.boxRec',array(
                            'image_url'=>'directori_care_center.svg',
                            'title'=>'Direktori Care Center',
                            'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                            'color'=>'#00A2E3;',
                            'colorPar'=>'#808080;',
                            'path'=>'direktori-care',
                            'bgColor'=> 'white'
                        ))
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection