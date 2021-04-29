@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>'/'])
    <main>
        @include('components/presentational/boxHeaderDirectoryDesktop',['path'=>'direktori'])
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
                    <div class="col-12 mb-1">
                        <p style="color:#c3c2c2;">Segala konten yang diterbitkan/ publikasikan hanya ditujukan untuk kepentingan penyampaian informasi kepada public. Jadwal dan informasi terkait layanan dapat berubah sewaktu-waktu tanpa pemberitahuan. Seluruh pengguna diharapkan untuk mengkonfirmasi jadwal dengan layanan sebelumnya.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row listFaskes2">
                </div>
            </div>
        </section>
        <section class="direktori__menuTabM bg-color_lightGrey pt-3 pb-4 forMobile">
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