<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ONE ONCO</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css">
        @laravelPWA
    </head>
    <body>
        <header class="homeHeader">
            @include('components/presentational.menuShowcase')
            <div class="container-fluid headerDesktop forDesktop" style="background-image:url({{asset('/images/imagebanner_desktop.jpg')}})">
                <div class="headOverlay" style="background-color:#00a3e398;"></div>
                <div class="row">
                    <div class="col-2 position-relative"><img class="img-fluid" src="{{ asset('/images/logo_oneonco_white.png') }}" width="200px" alt="one-onco logo"/></div>
                    <div class="col-8 position-relative">
                        <nav>
                            <ul>
                                <li><a href="/tentang-kami">Tentang Kami</a></li>
                                <li><a href="/untuk-pasien">Untuk Pasien</a></li>
                                <li><a href="/untuk-pendamping">Untuk Pendamping</a></li>
                                <li><a href="/cerita-survivor">Cerita Inspiratif</a></li>
                                <li class="show_menu">
                                    <a href="/berita-terkini">Artikel & Berita Terkini</a>
                                    <div class="sub_menu">
                                        <ul>
                                            <li><a href="/berita-terkini">Berita Terkini</a></li>
                                            <li><a href="/artikel-kanker">Artikel Kanker</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-2 position-relative">
                        <nav>
                            <ul class="userAction">
                                <li class="search_act"><img src="{{ asset('/images/search.png') }}" alt="search" width="15px"/></li>
                                <li><a href="/login"><img src="{{ asset('/images/user.png') }}" alt="user" width="15px"/></a></li>                                
                                @if (Auth::check())
                                    <li><a href='/logout'>LOGOUT</a></li>
                                    <li><a href="/pengaturan"><img src="{{ asset('/images/setting.png') }}" alt="search" width="15px"/></a></li>
                                @else 
                                    <li><a href='/login'>LOGIN</a></li>
                                    <li></li>
                                @endif
                            
                            </ul>
                        <nav>
                    </div>
                </div>
                <div class="box__welcomeHome forDesktop">
                    <h1 class="text-white text-center">{!! $titleStory !!}</h1>
                    <p class="text-white text-center mb-5"><i>{!! $shortStory !!}</i></p>
                    <a class="boxReadStory" href="cerita-survivor/{{ $slug }}">Baca ceritanya<img class="img-fluid" width="12px" src="{{asset('/images/arrow-white.png')}}" alt="arrow"></a>
                </div>
                <div class="row ps">
                    <div class="col-12 col-md-6">
                            @include('components/presentational.boxRec',array(
                                'image_url'=>'perkanker.png',
                                'title'=>'Perawatan Kanker',
                                'description'=>'Cari tau mengenai kanker dan perawatannya',
                                'color'=>'#80bc41;',
                                'colorPar'=>'#808080;',
                                'path'=>'perawatan-kanker'
                            ))
                    </div>
                    <div class="col-12 col-md-6">
                        @include('components/presentational.boxRec',array(
                            'image_url'=>'beliobat.png',
                            'title'=>'Belanja Sehat',
                            'description'=>'Beli langsung suplemen dan nutrisi di sini',
                            'color'=>'#00A2E3;',
                            'colorPar'=>'#808080;',
                            'path'=>'login'
                        ))
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="forMobile">
                            @include('components/presentational.boxRec',array(
                                'image_url'=>'dirkanker.png',
                                'title'=>'Direktori Layanan',
                                'description'=>'Temukan rumah sakit, dokter, dan layanan kanker terdekat',
                                'color'=>'#00A2E3;',
                                'colorPar'=>'#808080;',
                                'path'=>'direktori'
                            ))
                        </div>
                        <div class="forDesktop">
                            @include('components/presentational.boxRec',array(
                                'image_url'=>'dirkanker.png',
                                'title'=>'Direktori Layanan',
                                'description'=>'Temukan rumah sakit, dokter, dan layanan kanker terdekat',
                                'color'=>'#00A2E3;',
                                'colorPar'=>'#808080;',
                                'path'=>'direktori-dokter'
                            ))
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        @include('components/presentational.boxRec',array(
                            'image_url'=>'live-chat.png',
                            'title'=>'Konsultasi Online',
                            'description'=>'Konsultasi online dengan dokter seputar kanker',
                            'color'=>'#C6CB57;',
                            'colorPar'=>'#808080;',
                            'path'=>'login'
                        ))
                    </div>
                </div>
                <div class="halfBoxRounded"></div>
            </div>

            <div class="container-fluid headerMobile forMobile" style="background-image:url({{asset('/images/imagebanner_mobile.jpg')}}), linear-gradient(to right, #6DB3F2, #6DB3F2);">
                <div class="headOverlay" style="background-color:#00a3e398;"></div>
                <div class="menuOverlay"></div>
                <div class="row headerNavBox position-relative">
                    <div class="col-6">
                        <div class="user">
                            <ul>
                                <li><a href="/login"><img src="{{ asset('/images/user.png') }}" alt="user" width="15px"/></a></li>
                                <li>{!! $statusLogin !!}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="menu">
                            <ul>
                                <li class="search_act"><img src="{{ asset('/images/search.png') }}" alt="search" width="15px"/></li>
                                <li class="open_menu">
                                    <div id="menu-hamburger" class="">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mt-2 position-relative">
                    <div class="col-12">
                        <div class="d-flex justify-content-center"><img class="img-fluid" src="{{ asset('/images/logo_oneonco_white.png') }}" width="160px" alt="one-onco logo"/></div>
                    </div>
                </div>
                <div class="box__welcome">
                    <h4 class="text-white text-center">"Selamat pagi, jangan menyerah!"</h4>
                    <p class="text-white text-center mb-4"><i>Angelina Ong, cancer sruvivor 2019</i></p>
                    <a class="boxReadStory" href="cerita-survivor/{{ $slug }}">Baca ceritanya<img class="img-fluid" width="8px" src="{{asset('/images/arrow-black.png')}}" alt="arrow"></a>
                </div>
                <div class="halfBoxRounded"></div>
            </div>
        </header>
        <main page="home">
            <section class="first__section forMobile">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            @include('components/presentational.boxRec',array(
                                'image_url'=>'perkanker.png',
                                'title'=>'Perawatan Kanker',
                                'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                                'color'=>'#80bc41;',
                                'colorPar'=>'#808080;',
                                'path'=>'perawatan-kanker'
                            ))
                        </div>
                        <div class="col-12 col-md-6">
                            @include('components/presentational.boxRec',array(
                                'image_url'=>'dirkanker.png',
                                'title'=>'Direktori Kanker',
                                'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                                'color'=>'#00A2E3;',
                                'colorPar'=>'#808080;',
                                'path'=>'direktori'
                            ))
                        </div>
                        <div class="col-12 col-md-6">
                            @include('components/presentational.boxRec',array(
                                'image_url'=>'beliobat.png',
                                'title'=>'Beli Obat',
                                'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                                'color'=>'#00A2E3;',
                                'colorPar'=>'#808080;',
                                'path'=>'login'
                            ))
                        </div>
                        <div class="col-12 col-md-6">
                            @include('components/presentational.boxRec',array(
                                'image_url'=>'live-chat.png',
                                'title'=>'Live Chat',
                                'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                                'color'=>'#C6CB57;',
                                'colorPar'=>'#808080;',
                                'path'=>'login'
                            ))
                        </div>
                    </div>
                </div>
            </section>

            <section class="second__section">
                <div class="container">
                    <div class="row">
                        <div class="col-6 text-center">
                            <img id="img-one" class="img-fluid mb-4" src="{{asset('/images/logo_oneonco_black.png')}}" width="300px" alt="logo oneonco" srcset="">
                        </div>
                        <div class="col-6">
                            <h3><strong>Mengapa perawatan kanker harus menjadi rumit?</strong></h3>
                            <p class="mb-5">
                            {{ $contentAbout }}
                            </p>
                            @include('components/presentational.boxReadMore',array('title'=>'Baca Selengkapnya','path'=>'/tentang-kami'))
                        </div>
                    </div>
                </div>
            </section>

            <section class="exSecondSection">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="boxSearchKanker">
                                <h3 class="text-center mb-5"><strong>CARI TAU LEBIH LANJUT TENTANG KANKER</strong></h3>
                                <div class="row">
                                    @foreach($listingKankers as $row)
                                        <div class="col-6 col-md-3 text-center d-flex align-items-center flex-column boxSearchKanker_wrapper">
                                            <a href="{{ url("$row->slug") }}">
                                                <div class="boxSearchKanker_wrapper-boxImg">
                                                    <img src="{{ asset("data_kanker/$row->image") }}" alt="kankerpayudara" width="100%" height="100%">
                                                </div>
                                                <?php $titleName = preg_replace("/[\s_]/", "<br>", $row->title, 1); ?>
                                                <h4>{!! $titleName !!}</h4>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="third__section pt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between mb-5">
                            <h2 class="text-center"><strong>ARTIKEL KANKER</strong></h2>
                            @include('components/presentational.boxShowMore',array(
                                'title'=>'Lihat semua',
                                'path'=>'artikel-kanker'
                            ))
                        </div>
                        @foreach($listingJurnal as $row)
                        <div class="col-12 col-md-4">
                            <?php 
                                $yearCurrent  = date('Y');
                                $dateNews =  date('Y', strtotime($row->publishDate));
                                if ($yearCurrent === $dateNews ){
                                   $date =  date('d-M', strtotime($row->publishDate));
                                } else {
                                   $date =  date('d-M-Y',strtotime($row->publishDate));
                                }
                            ?>
                            @include('components/presentational.boxNews',array(
                                'date'=> $date,
                                'title'=>$row->title ,
                                'image_url'=>$row->imgDesktop,
                                'description'=>$row->shortContent,
                                'path'=>'artikel-kanker/'.$row->slug
                            ))
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <section class="berita__section">
                @include('/components/presentational.newsList',[])
            </section>
            <div class="hrdiv">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <hr>
                        </div>
                    </div>
                </div>
            </div>

            <section class="partnerKami__section">
                @include('/components/presentational.partnerList',[])
            </section>
            {{-- @include('components/presentational/boxPartner') --}}
        </main>
        @include('components/presentational/footer')
        <div class="searchpop">
            <input type="text" class="form-control searchinputact" placeholder="Kata Kunci..." aria-label="search" aria-describedby="button-addon2">
            <div class="close-search">X</div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script src="{{ asset('/js/app.js') }}"></script>
        
    </body>
</html>
