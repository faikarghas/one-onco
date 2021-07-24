@extends('components/layouts.layout')
@section('content')
    @include('components/presentational/header',['path'=>''])
    <main>
        <section class="konsultasi__page">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <h1><strong>Konsultasi spesialis onkologi</strong></h1>
                        <div class="row konsultasi__page-item">
                            <div class="col-4 col-md-4 tx">Dr. Faikar Ghassan</div>
                            <div class="col-4 col-md-4 tx text-center">Senin</div>
                            <div class="col-4 col-md-4 tx text-end">14.00-17.00</div>
                        </div>
                        <div class="row konsultasi__page-item">
                            <div class="col-4 col-md-4 tx">Dr. Faikar Ghassan</div>
                            <div class="col-4 col-md-4 tx text-center">Senin</div>
                            <div class="col-4 col-md-4 tx text-end">14.00-17.00</div>
                        </div>
                        <div class="row konsultasi__page-item">
                            <div class="col-4 col-md-4 tx">Dr. Faikar Ghassan</div>
                            <div class="col-4 col-md-4 tx text-center">Senin</div>
                            <div class="col-4 col-md-4 tx text-end">14.00-17.00</div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7 rg">
                            <div class="box_jadwal">
                                <div class="row">
                                    <div class="col-3" style="font-size:1.8rem;font-weight:bold">Jadwal</div>
                                    <div class="col-9">
                                        <ul>
                                            <li>lorem ipsum dolor sit amet</li>
                                            <li>lorem ipsum dolor sit amet</li>
                                            <li>lorem ipsum dolor sit amet</li>
                                            <li>lorem ipsum dolor sit amet</li>
                                        </ul>
                                    </div>
                                    <div class="col-12 mt-5">
                                        <div class="box__rec">
                                            <a href="/konsultasi-online/chat" class="d-block h-100">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-3 d-flex align-items-center justify-content-center">
                                                            <img width="40px" height="40px" src="/images/live-chat.png" alt="">
                                                        </div>
                                                        <div class="col-7 d-flex flex-column align-items-start justify-content-center">
                                                            <h3 style="color: #C6CB57;"><strong>Konsultasi Online</strong></h3>
                                                                                    <p class="m-0" style="color: #808080;">Cari tau mengenai perawatan kanker yang diderita</p>
                                                                            </div>
                                                        <div class="col-2 d-flex align-items-center justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.6 35.13">
                                                            <path style="fill:#C6CB57;" class="a" d="M19.18,4.48,30.53,15h-28a2.56,2.56,0,0,0,0,5.12h28L19.18,30.7a2.56,2.56,0,0,0,3.48,3.74l16.11-15a2.54,2.54,0,0,0,0-3.74L22.67.69a2.55,2.55,0,0,0-3.61.13A2.61,2.61,0,0,0,19.18,4.48Z"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
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
