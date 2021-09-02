@extends('components/layouts.layout')
@section('content')
    @include('components/presentational/header',['path'=>''])
    <main>
        <section class="konsultasi__page">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-7 forDesktop">
                        <h1><strong>Jadwal Konsultasi Reguler</strong></h1>
                        <div class="row konsultasi__page-item small">
                            <div class="col-6 col-md-6 tx">Seputar Kanker</div>
                            <div class="col-2 col-md-2 tx text-left">Senin-Minggu</div>
                            <div class="col-2 col-md-2 tx text-left"></div>
                            <div class="col-2 col-md-2 tx text-left">00:00-23:59</div>
                        </div>
                        <div class="row konsultasi__page-item">
                            <div class="col-6 col-md-6 tx">Seputar Penyakit Dalam</div>
                            <div class="col-2 col-md-2 tx text-left">Senin-Minggu</div>
                            <div class="col-2 col-md-2 tx text-left"></div>
                            <div class="col-2 col-md-2 tx text-left">00:00-23:59</div>
                        </div>
                        <div class="row konsultasi__page-item">
                            <div class="col-6 col-md-6 tx">Seputar Psikologi </div>
                            <div class="col-2 col-md-2 tx text-left">Senin-Minggu</div>
                            <div class="col-2 col-md-2 tx text-left"></div>
                            <div class="col-2 col-md-2 tx text-left">00:00-23:59</div>
                        </div>

                        <h1 class="mt-5"><strong>Jadwal Konsultasi Spesialis Onkologi</strong></h1>
                        <div class="row konsultasi__page-item small">
                            <div class="col-6 col-md-6 tx small">dr. David Samuel Kereh, Sp. B (K) Onk</div>
                            <div class="col-2 col-md-2 tx text-left">Bedah Onkologi</div>
                            <div class="col-2 col-md-2 tx text-left">Senin & Kamis</div>
                            <div class="col-2 col-md-2 tx text-left">17:00-18:00</div>
                        </div>
                        <div class="row konsultasi__page-item">
                            <div class="col-6 col-md-6 tx">dr. Dedyanto Henky Saputra, M.Gizi</div>
                            <div class="col-2 col-md-2 tx text-left">Gizi</div>
                            <div class="col-2 col-md-2 tx text-left">Senin-Minggu</div>
                            <div class="col-2 col-md-2 tx text-left">19:00-21:00</div>
                        </div>
                        <div class="row konsultasi__page-item">
                            <div class="col-6 col-md-6 tx">dr. Ericko Ekaputra, Sp. Onk. Rad</div>
                            <div class="col-2 col-md-2 tx text-left">Radiasi Onkologi</div>
                            <div class="col-2 col-md-2 tx text-left">Senin-Jumat</div>
                            <div class="col-2 col-md-2 tx text-left">05:00-07:00</div>
                        </div>
                        <div class="row konsultasi__page-item">
                            <div class="col-6 col-md-6 tx">dr. Gumilang Wiranegara, Sp.OG (K) Onk</div>
                            <div class="col-2 col-md-2 tx text-left">Obgyn Onkologi</div>
                            <div class="col-2 col-md-2 tx text-left">Senin</div>
                            <div class="col-2 col-md-2 tx text-left">11:00-12:00</div>
                        </div>
                        <div class="row konsultasi__page-item">
                            <div class="col-6 col-md-6 tx">dr. Hastarita Lawrenti</div>
                            <div class="col-2 col-md-2 tx text-left">Onkologi</div>
                            <div class="col-2 col-md-2 tx text-left">Selasa, Rabu, & Kamis</div>
                            <div class="col-2 col-md-2 tx text-left">18:30-20:30</div>
                        </div>
                        <div class="row konsultasi__page-item">
                            <div class="col-6 col-md-6 tx">dr. Lucky Taufika Yuhedi, Sp. Onk.Rad</div>
                            <div class="col-2 col-md-2 tx text-left">Radiasi Onkologi</div>
                            <div class="col-2 col-md-2 tx text-left">Selasa</div>
                            <div class="col-2 col-md-2 tx text-left">19:30-21:00</div>
                        </div>
                        <div class="row konsultasi__page-item">
                            <div class="col-6 col-md-6 tx">dr. Reza Musmarliansyah, Sp. B (K) Onk</div>
                            <div class="col-2 col-md-2 tx text-left">Bedah Onkologi</div>
                            <div class="col-2 col-md-2 tx text-left">Selasa & Kamis</div>
                            <div class="col-2 col-md-2 tx text-left">13:00-14:00</div>
                        </div>
                        <div class="row konsultasi__page-item">
                            <div class="col-6 col-md-6 tx">dr. Umi Mangesti Tjiptoningsih, Sp. Onk.Rad</div>
                            <div class="col-2 col-md-2 tx text-left">Radiasi Onkologi</div>
                            <div class="col-2 col-md-2 tx text-left">Senin - Jumat</div>
                            <div class="col-2 col-md-2 tx text-left">16:00-18:00</div>
                            <div class="col-6 col-md-6 tx text-left"></div>
                            <div class="col-2 col-md-2 tx text-left"></div>
                            <div class="col-2 col-md-2 tx text-left">Sabtu - Minggu</div>
                            <div class="col-2 col-md-2 tx text-left">20:00-21:00</div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7 forMobile">
                        <h1><strong>Jadwal Konsultasi Reguler</strong></h1>
                        <div class="row konsultasi__page-item">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12 tx">Seputar Kanker</div>
                                </div>
                            </div>
                            <div class="col-6"> 
                                <div class="col-12 tx text-end">Senin-Minggu</div>
                                <div class="col-12 tx text-end">00:00-23:59</div>
                            </div>
                        </div>
                        <div class="row konsultasi__page-item">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12 tx">Seputar Penyakit Dalam</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="col-12 tx text-end">Senin-Minggu</div>
                                <div class="col-12 tx text-end">00:00-23:59</div>
                            </div>
                        </div>
                        <div class="row konsultasi__page-item">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12 tx">Seputar Psikologi</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="col-12 tx text-end">Senin-Minggu</div>
                                <div class="col-12 tx text-end">00:00-23:59</div>
                            </div>
                        </div>

                        <h1 class="mt-5"><strong>Jadwal Konsultasi Spesialis Onkologi</strong></h1>
                        <div class="row konsultasi__page-item small">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12 tx mb-2">dr. David Samuel Kereh, Sp. B (K) Onk</div>
                                    <div class="col-12 tx mb-2">Bedah Onkologi</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="col-12 tx mb-2 text-end">Senin-Minggu</div>
                                <div class="col-12 tx text-end">17:00-18:00</div>
                            </div>
                        </div>
                        <div class="row konsultasi__page-item">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12 tx mb-2">dr. Dedyanto Henky Saputra, M.Gizi</div>
                                    <div class="col-12 tx mb-2">Gizi</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="col-12 tx mb-2 text-end">Senin-Minggu</div>
                                <div class="col-12 tx text-end">19:00-21:00</div>
                            </div>
                        </div>
                        <div class="row konsultasi__page-item">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12 tx mb-2">dr. Ericko Ekaputra, Sp. Onk. Rad</div>
                                    <div class="col-12 tx mb-2">Radiasi Onkologi</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="col-12 tx mb-2 text-end">Senin-Jumat</div>
                                <div class="col-12 tx text-end">05:00-07:00</div>
                            </div>
                        </div>
                        <div class="row konsultasi__page-item">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12 tx mb-2">dr. Gumilang Wiranegara, Sp.OG (K) Onk</div>
                                    <div class="col-12 tx mb-2">Obgyn Onkologi</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="col-12 tx mb-2 text-end">Senin</div>
                                <div class="col-12 tx text-end">11:00-12:00</div>
                            </div>
                        </div>
                        <div class="row konsultasi__page-item">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12 tx mb-2">dr. Hastarita Lawrenti</div>
                                    <div class="col-12 tx mb-2">Onkologi</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="col-12 tx mb-2 text-end">Selasa, Rabu, & Kamis</div>
                                <div class="col-12 tx text-end">18:30-20:30</div>
                            </div>
                        </div>
                        <div class="row konsultasi__page-item">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12 tx mb-2">dr. Lucky Taufika Yuhedi, Sp. Onk.Rad</div>
                                    <div class="col-12 tx mb-2">Radiasi Onkologi</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="col-12 tx mb-2 text-end">Selasa</div>
                                <div class="col-12 tx text-end">19:30-21:00</div>
                            </div>
                        </div>
                        <div class="row konsultasi__page-item">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12 tx mb-2">dr. Reza Musmarliansyah, Sp. B (K) Onk</div>
                                    <div class="col-12 tx mb-2">Bedah Onkologi</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="col-12 tx mb-2 text-end">Selasa & Kamis</div>
                                <div class="col-12 tx text-end">13:00-14:00</div>
                            </div>
                        </div>
                        <div class="row konsultasi__page-item">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12 tx mb-2">dr. Umi Mangesti Tjiptoningsih, Sp. Onk.Rad</div>
                                    <div class="col-12 tx mb-2">Radiasi Onkologi</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="col-12 tx mb-2 text-end">Senin - Jumat</div>
                                <div class="col-12 tx text-end">16:00-18:00</div>
                                <div class="col-12 tx mb-2 text-end">Sabtu - Minggu</div>
                                <div class="col-12 tx text-end">20:00-21:00</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 rg" style="align-items: flex-start;">
                            <div class="box_jadwal">
                                <div class="row">
                                    <div class="col-12" style="font-size:1.8rem;font-weight:bold">
                                        Konsultasi seputar kesehatan & kanker sekarang!
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

                                    <div class="col-12">
                                        <p class="small pt-3" style="font-size:1rem;"><em>Jadwal dan informasi terkait layanan dapat berubah sewaktu-waktu tanpa pemberitahuan.</em><p>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
