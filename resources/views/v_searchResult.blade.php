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
                                <h2><strong>Pencarian Kata Sandi: "Kampung"</strong></h2>
                                <h2 class="mb-5" style="color: lightgray">Menampilkan 10 dari 800 artikel</h2>

                                <ul class="list_artikelSearch">
                                    <li>
                                        <a href="">
                                            <span class="title d-block">lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, labore aut. Tenetur porro commodi fugiat.</span>
                                            <span class="content d-block">LOREM, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae nemo nam distinctio voluptates tempora nobis repellendus asperiores, fugit ipsa. Accusantium?</span>
                                            <span class="date d-block">Sun Dec, 2011<span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="title d-block">lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, labore aut. Tenetur porro commodi fugiat.</span>
                                            <span class="content d-block">LOREM, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae nemo nam distinctio voluptates tempora nobis repellendus asperiores, fugit ipsa. Accusantium?</span>
                                            <span class="date d-block">Sun Dec, 2011<span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="title d-block">lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, labore aut. Tenetur porro commodi fugiat.</span>
                                            <span class="content d-block">LOREM, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae nemo nam distinctio voluptates tempora nobis repellendus asperiores, fugit ipsa. Accusantium?</span>
                                            <span class="date d-block">Sun Dec, 2011<span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <h2><strong>Pencarian Kata Sandi: "Kampung"</strong></h2>
                                <h2 class="mb-5" style="color: lightgray">Menampilkan 10 dari 800 artikel</h2>
                                <div class="container g-0">
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <div class="box__rec2">
                                                <a href="https://oneonco.co.id/dokter-detail/f0a74300-eab0-11eb-8ac6-00505692a8e6" class="d-block h-100">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-3 d-flex align-items-center justify-content-center">
                                                                <div class="rounded_img">
                                                                    <img width="100%" height="100%" src="https://oneonco.co.id/data_dokter/202104061001_A._A._A._Susraini.jpg" alt="202104061001_A._A._A._Susraini.jpg">
                                                                </div>
                                                            </div>
                                                            <div class="col-7 d-flex flex-column align-items-start justify-content-center">
                                                                <div class="title_wrapper">
                                                                    <h3><strong>dr. A. A. A. Susraini, Sp.PA (K)</strong></h3>
                                                                </div>
                                                                <ul>
                                                                    <li class="pt-2 pb-2 spes">
                                                                        <p><strong>Patologi Anatomi</strong></p>
                                                                    </li>
                                                                    <li class="pt-2">
                                                                        <p><strong>Lokasi Praktek</strong></p>
                                                                    </li>
                                                                    <li><p>RSUP Sanglah</p></li>
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
                                        <div class="col-12 col-lg-6">
                                            <div class="box__rec2">
                                                <a href="https://oneonco.co.id/direktori-care/31731001" class="d-block h-100">
                                                    <div class="container">
                                                       <div class="row">
                                                          <div class="col-3 d-flex align-items-center justify-content-center">
                                                             <div class="rounded_img">
                                                                                            <img width="100%" height="100%" src="https://oneonco.co.id/data_faskes/care_center.svg" alt="care_center">
                                                              </div>
                                                          </div>
                                                          <div class="col-7 d-flex flex-column align-items-start justify-content-center">
                                                             <div class="title_wrapper">
                                                                <h3><strong>RS Puri Indah</strong></h3>
                                                             </div>
                                                             <ul>
                                                                <li>
                                                                   <p style="font-size:1.2rem;">Jl. Puri Indah raya Blok KJ No 2 RT 1 RW 2 kembangan</p>
                                                                </li>
                                                                <li>
                                                                    <p style="font-size:1.2rem;">(021) 25695222</p>
                                                                 </li>
                                                                <li>
                                                                   <p style="font-size:1.2rem;color:#00A2E3;">www.rspondokindah.co.id</p>
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