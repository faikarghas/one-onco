@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>'direktori'])
    <main>
        <section class="direktoriDet__header forMobile">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <h3 class="text-center"> <strong>Cari dokter Onkologi di daerahmu:</strong></h3>
                        </div>
                    </div>
                    <div class="col-12">
                        <form action="" method="POST">
                            <div class="col-12 mb-4 mt-4">
                                <input style="border-radius: 12px;" type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Ketik kata kunci">
                            </div>
                            <select class="form-select mb-2" aria-label="Default select example" id="selectCitiesM" name="cities">
                                <option selected>Specialisasi - Kualifikasi Dokter</option>
                                @foreach ($cities as $citie => $value)
                                    <option value="{{ $citie }}"> {{ $value }}</option>   
                                @endforeach
                            </select>
                            <select class="form-select mb-3" aria-label="Default select example" id="selectFaskesM" name="faskes">
                                <option value="">Provinsi Rumah Sakit</option>
                            </select>
                            <select class="form-select mb-3" aria-label="Default select example" id="selectFaskesM" name="faskes">
                                <option value="">Pilih Kabupaten</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="direktori__menuTab forDesktop">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4">
                            <?php
                                $currentUrl = $_SERVER['REQUEST_URI'];
                                $bgColor = $currentUrl == '/direktori-dokter' ? '#00A2E3;' : 'white';
                                $color = $currentUrl == '/direktori-dokter' ? 'white' : '#00A2E3;';
                                $image_url = $currentUrl == '/direktori-dokter' ? 'dir-dokter_white.png' : 'directori_dokter2.svg';
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
                    <div class="col-12 col-lg-4">
                            @include('components/presentational.boxRec',[
                                'image_url'=>'directori_komunitas.svg',
                                'title'=>'Direktori Lab',
                                'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                                'color'=>'#00A2E3;',
                                'colorPar'=>'#808080;',
                                'path'=>'direktori-lab',
                                'bgColor'=>'white'
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
        <section class="direktori__list">
            <div class="container mb-5 forDesktop">
                <div class="row">
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <h3 class="text-start mb-0"> <strong>Cari dokter Onkologi di daerahmu:</strong></h3>
                        </div>
                    </div>
                    <div class="col-12">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-12 mb-4 mt-4">
                                    <input style="border-radius: 12px;" type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Ketik kata kunci">
                                </div>
                                <div class="col">
                                    <select class="form-select mb-2" aria-label="Default select example" id="selectCities" name="cities">
                                        <option selected>Specialisasi - Kualifikasi Dokter</option>
                                        @foreach ($cities as $citie => $value)
                                            <option value="{{ $citie }}"> {{ $value }}</option>   
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select mb-3" aria-label="Default select example" id="selectFaskes" name="faskes">
                                        <option value="">Provinsi Rumah Sakit</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select mb-3" aria-label="Default select example" id="selectFaskes" name="faskes">
                                        <option value="">Pilih Kabupaten</option>
                                    </select>
                                </div>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row listDokter">
                    {{-- @for ($i = 0; $i < 3; $i++)
                    <div class="col-12 col-lg-6">
                        <div class="box__rec2">
                            @include('components/presentational.boxRec2',array(
                                'image_url'=>'directori_dokter2.svg',
                                'title'=>'dr. Rajesh Kahwani, Sp PD-KHOM, FINASIM',
                                'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                                'color'=>'#4172CB;',
                                'path'=>'direktori-dokter/faikar',
                                'rounded'=>'rounded_img'
                            ))
                        </div>
                    </div>
                    @endfor --}}
                </div>
            </div>
        </section>
        <section class="direktori__menuTabM bg-color_lightGrey pt-3 pb-4 forMobile">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @include('components/presentational.boxRec',[
                            'image_url'=>'directori_komunitas.svg',
                            'title'=>'Direktori Lab',
                            'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                            'color'=>'#00A2E3;',
                            'colorPar'=>'#808080;',
                            'path'=>'direktori-lab',
                            'bgColor'=> 'white'
                        ])
                        @include('components/presentational.boxRec',[
                            'image_url'=>'directori_care_center.svg',
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