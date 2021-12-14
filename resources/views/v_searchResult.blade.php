@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>'/'])
    <main>
        <section class="pb-5 pt-5 search__page">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Artikel</button>
                              <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Direktori Layanan</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                                
                                <h2><strong>Pencarian Kata Sandi: {{ $titleResult }}</strong></h2>
                                
                                {{-- <h2 class="mb-5" style="color: lightgray">Menampilkan 10 dari 800 artikel</h2> --}}

                                <ul class="list_artikelSearch">

                                   
                                    @foreach ($resultArtikel as $row )
                                    

                                    <li>
                                        <a href="{{ url($row->slug2.'/'.$row->slug1) }}">
                                            <span class="title d-block">{{ $row->title }}</span>
                                            <span class="content d-block">{{ $row->shortContent  }}</span>
                                            <span class="date d-block">{{ $row->publishDate }}<span>
                                        </a>
                                    </li>
                                    
                                    @endforeach

                                    
                                    
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <h2><strong>Pencarian Kata Sandi: {{ $titleResult }}</strong></h2>
                                {{-- <h2 class="mb-5" style="color: lightgray">Menampilkan 10 dari 800 artikel</h2> --}}
                                <div class="container g-0">
                                    <div class="row">
                                        @foreach ( $resultDokter as $row )
                                        <div class="col-12 col-lg-6">
                                            <div class="box__rec2">
                                                <a href="dokter-detail/f0a74300-eab0-11eb-8ac6-00505692a8e6" class="d-block h-100">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-3 d-flex align-items-center justify-content-center">
                                                                <div class="rounded_img">
                                                                    <img width="100%" height="100%" src="/data_dokter/{{ $row->Image }}" alt="{{ $row->Image }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-7 d-flex flex-column align-items-start justify-content-center">
                                                                <div class="title_wrapper">
                                                                    <h3><strong>{{ $row-> fullname }}</strong></h3>
                                                                </div>
                                                                <ul>
                                                                    <li class="pt-2 pb-2 spes">
                                                                        <p><strong>{{ $row->subSpesialist }}</strong></p>
                                                                    </li>
                                                                    <li class="pt-2">
                                                                        <p><strong>Lokasi Praktek</strong></p>
                                                                    </li>
                                                                    <li><p>{{ $row->namafaskes }}</p></li>
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
                                        @foreach ( $resultFaskes as $row )
                                        <?php
                                            $foto = $row->foto;
                                            $path = public_path('/data_faskes/'.$foto);
                                            $isExists = file_exists($path);
                                            if ($isExists) {
                                                $fotoFaskes = $foto;
                                            } else {
                                                echo $fotoFaskes = "care_center.svg";
                                            }
                                        ?>
                                        <div class="col-12 col-lg-6">
                                            <div class="box__rec2">
                                                <a href="{{ url('direktori-komunitas/'.$row->slug) }}" class="d-block h-100">
                                                    <div class="container">
                                                       <div class="row">
                                                          <div class="col-3 d-flex align-items-center justify-content-center">
                                                             <div class="rounded_img">
                                                                <img width="100%" height="100%" src="{{asset("/data_faskes/$fotoFaskes")}}" alt="care_center">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection