<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ONE ONCO</title>

        {{-- Favicon --}}
        <link rel="shortcut icon" href="{{asset('/images/oneonco_icon.jpg')}}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
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
            <div class="container-fluid headerDesktop forDesktop">
                <div class="headOverlay"></div>
                <div class="row">
                    <div class="col-2 position-relative"><img class="img-fluid" src="{{ asset('/images/logo_oneonco_white.png') }}" width="200px" alt="one-onco logo"/></div>
                    <div class="col-8 position-relative">
                        <nav>
                            <ul>
                                <li><a href="{{url('/tentang-kami')}}">Tentang Kami</a></li>
                                <li><a href="{{url('/untuk-pasien')}}">Untuk Pasien</a></li>
                                <li><a href="{{url('/untuk-pendamping')}}">Untuk Pendamping</a></li>
                                <li><a href="{{url('/cerita-survivor')}}">Cerita Inspiratif</a></li>
                                <li class="show_menu">
                                    <a href="/berita-terkini">Artikel & Berita Terkini</a>
                                    <div class="sub_menu">
                                        <ul>
                                            <li><a href="{{url('/berita-terkini')}}">Berita Terkini</a></li>
                                            <li><a href="{{url('/artikel-kanker')}}">Artikel Kanker</a></li>
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
                                <li><img src="{{ asset('/images/user.png') }}" alt="user" width="15px"/></li>
                                @if (Auth::check())
                                    <li><a href='{{url('/logout')}}'>LOGOUT</a></li>
                                    <li><a href="{{url('/pengaturan')}}"><img src="{{ asset('/images/setting.png') }}" alt="search" width="15px"/></a></li>
                                @else
                                    <li><a href='{{url('/login')}}'>LOGIN</a></li>
                                @endif
                            </ul>
                        <nav>
                    </div>
                </div>
                <div class="box__welcomeHome forDesktop">
                    <h1 class="text-white text-center" id="titleSur"></h1>
                    <p class="text-white text-center mb-5" id="shortSur"><i></i></p>
                    <a class="boxReadStory" id="linkSlider">Baca ceritanya<img class="img-fluid" width="12px" src="{{asset('/images/arrow-white.png')}}" alt="arrow"></a>
                </div>
                <div class="row ps">
                    <div class="col-12 col-md-6">
                        @include('components/presentational.boxRec',array(
                            'image_url'=>'deteksidini.png',
                            'title'=>'Deteksi Dini Kanker',
                            'description'=>'Cari tes skrining untuk pendeteksian dini',
                            'color'=>'#80bc41;',
                            'colorPar'=>'#808080;',
                            'path'=>'deteksi-kanker'
                        ))
                    </div>
                    <div class="col-12 col-md-6">
                        @include('components/presentational.boxRec',array(
                            'image_url'=>'beliobat.png',
                            'title'=>'Belanja Sehat',
                            'description'=>'Beli langsung suplemen dan nutrisi di sini',
                            'color'=>'#00A2E3;',
                            'colorPar'=>'#808080;',
                            'path'=>'belanja-sehat'
                        ))
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="forMobile">
                            @include('components/presentational.boxRec',array(
                                'image_url'=>'dirkanker.png',
                                'title'=>'Direktori Layanan',
                                'description'=>'Temukan rumah sakit, dokter, dan layanan kanker terdekat',
                                'color'=>'#33A58F;',
                                'colorPar'=>'#808080;',
                                'path'=>'direktori'
                            ))
                        </div>
                        <div class="forDesktop">
                            @include('components/presentational.boxRec',array(
                                'image_url'=>'dirkanker.png',
                                'title'=>'Direktori Layanan',
                                'description'=>'Temukan rumah sakit, dokter, dan layanan kanker terdekat',
                                'color'=>'#33A58F;',
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
                            'path'=>'konsultasi-online'
                        ))
                    </div>
                </div>
                <div class="halfBoxRounded"></div>
            </div>

            <div class="container-fluid headerMobile forMobile">
                <div class="headOverlay"></div>
                <div class="menuOverlay"></div>
                <div class="row headerNavBox">
                    <div class="col-6 position-relative">
                        <div class="user">
                            <ul>
                                <li><img src="{{ asset('/images/user.png') }}" alt="user" width="15px"/></li>
                                @if (Auth::check())
                                    <li><a href='{{url('/logout')}}'>LOGOUT</a></li>
                                @else
                                    <li><a href='{{url('/login')}}'>LOGIN</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 position-relative">
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
                    <h4 class="text-white text-center" id="titleSurM">"Selamat pagi, jangan menyerah!"</h4>
                    <p class="text-white text-center mb-4" id="shortSurM"><i>Angelina Ong, cancer sruvivor 2019</i></p>
                    {{-- <a class="boxReadStory" href="cerita-survivor/{{ $slug }}">Baca ceritanya<img class="img-fluid" width="8px" src="{{asset('/images/arrow-black.png')}}" alt="arrow"></a> --}}
                    <a class="boxReadStory" id="linkSliderM" >Baca ceritanya<img class="img-fluid" width="8px" src="{{asset('/images/arrow-black.png')}}" alt="arrow"></a>
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
                                'image_url'=>'deteksidini.png',
                                'title'=>'Deteksi Dini Kanker',
                                'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                                'color'=>'#80bc41;',
                                'colorPar'=>'#808080;',
                                'path'=>'deteksi-kanker'
                            ))
                        </div>
                        <div class="col-12 col-md-6">
                            @include('components/presentational.boxRec',array(
                                'image_url'=>'dirkanker.png',
                                'title'=>'Direktori Layanan',
                                'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                                'color'=>'#33A58F;',
                                'colorPar'=>'#808080;',
                                'path'=>'direktori'
                            ))
                        </div>
                        <div class="col-12 col-md-6">
                            @include('components/presentational.boxRec',array(
                                'image_url'=>'beliobat.png',
                                'title'=>'Belanja Sehat',
                                'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                                'color'=>'#00A2E3;',
                                'colorPar'=>'#808080;',
                                'path'=>'belanja-sehat'
                            ))
                        </div>
                        <div class="col-12 col-md-6">
                            @include('components/presentational.boxRec',array(
                                'image_url'=>'live-chat.png',
                                'title'=>'Konsultasi Online',
                                'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                                'color'=>'#C6CB57;',
                                'colorPar'=>'#808080;',
                                'path'=>'konsultasi-online'
                            ))
                        </div>
                    </div>
                </div>
            </section>

            <section class="second__section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6 text-center d-flex align-items-center justify-content-center">
                            <img id="img-one" class="img-fluid mb-4" src="{{asset('/images/logo_oneonco_black.png')}}" width="300px" alt="logo oneonco" srcset="">
                        </div>
                        <div class="col-12 col-lg-6">
                            <h3><strong>Mengapa perawatan kanker harus menjadi rumit?</strong></h3>
                            <p class="mb-5">
                                Tugas seorang pasien kanker adalah untuk beristirahat dan sembuh, bukan stress memikirkan proses perawatan. Karena itu, One Onco hadir untuk mendampingi Anda melawati ragamnya perawatan kanker dan mendapatkan yang terbaik. 
                            </p>
                            @include('components/presentational.boxReadMore',array('title'=>'Baca selengkapnya','path'=>'/tentang-kami'))
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
                                <div class="row justify-content-center">
                                    @foreach($listingKankers as $row)
                                        <div class="col-6 col-md-2 text-center d-flex align-items-center flex-column boxSearchKanker_wrapper">
                                            <a href="{{ url("$row->slug") }}">
                                                <div class="boxSearchKanker_wrapper-boxImg">
                                                    <img src="{{ asset("data_artikel/$row->icon") }}" alt="kankerpayudara" width="100%" height="100%">
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
                        @foreach($listingArtikelKanker as $row)
                        <div class="col-12 col-md-4">
                            <?php
                                $yearCurrent  = date('Y');
                                $dateNews =  date('Y', strtotime($row->publishDate));
                                $date =  date('d-M-Y',strtotime($row->publishDate));
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
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between mb-5">
                            <div>
                                <h2 class="text-center"><strong>BERITA TERKINI</strong></h2>
                            </div>
                            @include('components/presentational.boxShowMore',array(
                                'title'=>'Lihat semua',
                                'path'=>'berita-terkini'
                            ))
                        </div>
                        @foreach($listingNews as $row)
                                <?php
                                    $yearCurrent  = date('Y');
                                    $dateNews =  date('Y', strtotime($row->publishDate));
                                    $date =  date('d-M-Y', strtotime($row->publishDate));
                                ?>
                                <div class="col-12 col-lg-4">
                                    @include('components/presentational.boxNews',array(
                                            'date'=>$date,
                                            'title'=>$row->title,
                                            'image_url'=>$row->imgDesktop,
                                            'description'=>$row->shortContent,
                                            'path'=>'/berita-terkini/'.$row->slug
                                    ))
                                </div>
                        @endforeach
                    </div>
                </div>
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
        </main>

        <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body" style="text-align: center;padding:3rem">
                        <img class="mb-4" src="{{asset('/images/email-marketing.svg')}}" width="70px" alt="mail" srcset="">
                        <h1 style="color: #00A2E3;font-weight:bold;" class="modal-title text-center mb-4" id="exampleModalLabel">Terima Kasih!</h1>
                        <h3 style="color: rgb(173, 173, 173)">Selamat bergabung dalam grup newletter One Onco. Nantikan berita dan informasi menarik dari kami! Mari kita lawan kanker Bersama!</h3>
                    </div>
                </div>
                </div>
            </div>
         <!-- End Modal -->

        @include('components/presentational/footer')
        <div class="searchpop">
            <form class="card-body" action="/search" method="GET" role="search">
                <input type="text" class="form-control searchinputact" placeholder="Kata Kunci..." aria-label="search" aria-describedby="button-addon2" name="textInput">
                <input type="submit" style="position: absolute; left: -9999px; width: 1px; height: 1px;"tabindex="-1" />
            </form>
            <div class="close-search">X</div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"  ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script src="{{ asset('/js/app.js') }}"></script>

        <script nonce="{{ csp_nonce() }}">
            var intro = @json($introSlider);
            var title = @json($titleSlider);
            var image = @json($imageSlider);
            var colours = @json($colorSlider);
            var links = @json($linkSlider);

            var counter = 0;
            var backgroundImgD = document.querySelector('.headerDesktop');
            var overlayImgD = document.querySelector(".headOverlay");
            var titleD = document.querySelector("#titleSur");
            var shortDescD = document.querySelector("#shortSur");
            var link = document.querySelector("#linkSlider");

            var backgroundImgM = document.querySelector('.headerMobile');
            var overlayImgM = document.querySelector(".headerMobile .headOverlay");
            var titleM = document.querySelector("#titleSurM");
            var shortDescM = document.querySelector("#shortSurM");
            var box = document.querySelector(".box__welcome");
            var linkM = document.querySelector("#linkSliderM");


            var inst = setInterval(change, 1000 * 60 * 60);

            backgroundImgD.style.backgroundImage = 'url(' + image[0] + ')';;
            titleD.innerHTML = title[0];
            shortDescD.innerHTML = intro[0];
            overlayImgD.style.backgroundColor = colours[0];
            // $('.boxReadStory').attr('a',`cerita-survivor/${slug[0]}`)

            backgroundImgM.style.backgroundImage = 'url(' + image[0] + ')';;
            titleM.innerHTML = title[0];
            shortDescM.innerHTML = intro[0];
            overlayImgM.style.backgroundColor = colours[0];
            box.style.backgroundColor = colours[0];

            function change() {
                backgroundImgD.style.backgroundImage = 'url(' + image[counter] + ')';
                titleD.innerHTML = title[counter];
                shortDescD.innerHTML = intro[counter];
                overlayImgD.style.backgroundColor = colours[counter];
                link.setAttribute("href", links[counter]);

                box.style.backgroundColor = colours[counter];
                backgroundImgM.style.backgroundImage = 'url(' + image[counter] + ')';
                titleM.innerHTML = title[counter];
                shortDescM.innerHTML = intro[counter];
                overlayImgM.style.backgroundColor = colours[counter];
                box.style.backgroundColor = colours[counter];
                linkM.setAttribute("href", links[counter]);


                // $('.boxReadStory').attr('a',`cerita-survivor/${slug[counter]}`)
                counter++;
                if (counter >= title.length) {
                    counter = 0;
                }

            }

            change()
        </script>
    </body>
</html>
