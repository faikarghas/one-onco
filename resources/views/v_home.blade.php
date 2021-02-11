<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        @laravelPWA
    </head>
    <body>
        <header class="homeHeader">
            @include('components/presentational.menuShowcase')
            <div class="container-fluid headerDesktop forDesktop">
                <div class="row">
                    <div class="col-2"><img class="img-fluid" src="{{ asset('/images/logo_oneonco.png') }}" width="200px" alt="one-onco logo"/></div>
                    <div class="col-8">
                        <nav>
                            <ul>
                                <li><a href="">Tentang Kami</a></li>
                                <li><a href="">Untuk Pasien</a></li>
                                <li><a href="">Untuk Pendamping</a></li>
                                <li><a href="">Cerita Inspiratif Survivor</a></li>
                                <li><a href="">Berita Terkini & Jurnal</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-2">
                        <ul class="userAction">
                            <li><img src="{{ asset('/images/search.png') }}" alt="search" width="15px"/></li>
                            <li><a href="/login"><img src="{{ asset('/images/user.png') }}" alt="search" width="15px"/></a></li>
                            <li><a href="/login">LOGIN</a></li>
                            <li><a><img src="{{ asset('/images/setting.png') }}" alt="search" width="15px"/></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container-fluid headerMobile forMobile">
                <div class="menuOverlay"></div>

                <div class="row headerNavBox">
                    <div class="col-6">
                        <div class="user">
                            <ul>
                                <li><a href="/login"><img src="{{ asset('/images/user.png') }}" alt="search" width="15px"/></a></li>
                                <li><a href="/login">LOGIN</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="menu">
                            <ul>
                                <li><img src="{{ asset('/images/search.png') }}" alt="search" width="15px"/></li>
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
                <div class="row mt-2">
                    <div class="col-12">
                        <div class="d-flex justify-content-center"><img class="img-fluid" src="{{ asset('/images/logo_oneonco_white.png') }}" width="160px" alt="one-onco logo"/></div>
                    </div>
                </div>
                <div class="box__welcome">
                    <h4 class="text-white text-center">"Selamat pagi, jangan menyerah!"</h4>
                    <p class="text-white text-center mb-4"><i>Angelina Ong, cancer sruvivor 2019</i></p>
                    <a class="boxReadStory" href="">Baca ceritanya<img class="img-fluid" width="8px" src="{{asset('/images/arrow-black.png')}}" alt="arrow"></a>
                </div>
                <div class="halfBoxRounded"></div>
            </div>
        </header>

        <main>
            <section class="first__section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="box__rec">
                                @include('components/presentational.boxRec',array(
                                    'image_url'=>'perkanker.png',
                                    'title'=>'Perawatan Kanker',
                                    'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                                    'color'=>'#80bc41;',
                                    'path'=>'perawatan-kanker'
                                ))
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="box__rec">
                                @include('components/presentational.boxRec',array(
                                    'image_url'=>'dirkanker.png',
                                    'title'=>'Direktori Kanker',
                                    'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                                    'color'=>'#32A48E;',
                                    'path'=>'direktori'
                                ))
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="box__rec">
                                @include('components/presentational.boxRec',array(
                                    'image_url'=>'beliobat.png',
                                    'title'=>'Beli Obat',
                                    'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                                    'color'=>'#00A2E3;',
                                    'path'=>'login'
                                ))
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="box__rec">
                                @include('components/presentational.boxRec',array(
                                    'image_url'=>'live-chat.png',
                                    'title'=>'Live Chat',
                                    'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                                    'color'=>'#C6CB57;',
                                    'path'=>'login'
                                ))
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="second__section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img class="img-fluid mb-4" src="{{asset('/images/logo_oneonco.png')}}" width="200px" alt="logo oneonco" srcset="">
                            <h2 class="mb-4"><strong>SOLUSI TOTAL ONCOLOGY</strong></h2>
                            <p class="mb-5">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam velit quod natus doloremque necessitatibus, totam aliquam omnis aut voluptatibus consequuntur mollitia dolores similique modi aspernatur rem? Dolores tempora magni sequi magnam soluta nihil officiis iusto molestiae sint incidunt! Aliquid accusamus provident natus excepturi in fuga error nostrum soluta asperiores quidem recusandae quod consectetur dolore maiores doloremque minima quaerat eaque quam, ipsa sunt temporibus eos. Veniam maxime eos totam dolores quis et iste quaerat voluptate sequi, porro voluptatibus aut fuga voluptates repellat nihil, illo amet est voluptatem quisquam nulla distinctio. Hic, libero laboriosam quod recusandae eius explicabo aliquam quisquam ducimus laborum!
                            </p>
                            @include('components/presentational.boxReadMore',array('title'=>'Baca Selengkapnya'))
                        </div>
                        <div class="col-12 mt-4"><hr></div>
                        <div class="col-12">
                            <div class="boxSearchKanker">
                                <h3 class="text-center mb-4"><strong>CARI KATEGORI KANKER<br/>SESUAI SISTEM TUBUH</strong></h3>
                                <div class="cari_kanker">
                                    <a href="/sistem-tubuh">
                                        <ul>
                                            <li>Pilih...</li>
                                            <li> <img src="{{asset('/images/arrow-white.png')}}" alt="arrow" width="10px"></li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="third__section pt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center mb-5"><strong>JOURNAL ONKOLOGI</strong></h2>
                        </div>
                        <div class="col-12 col-md-4">
                            @include('components/presentational.boxNews',array(
                                'date'=>'24 Nov 2020',
                                'title'=>'Perbandingan biaya kemotrapi antara indonesia & Malaysia 2020',
                                'image_url'=>'https://source.unsplash.com/random'
                            ))
                        </div>
                        <div class="col-12 col-md-4">
                            @include('components/presentational.boxNews',array(
                                'date'=>'24 Nov 2020',
                                'title'=>'Perbandingan biaya kemotrapi antara indonesia & Malaysia 2020',
                                'image_url'=>'https://source.unsplash.com/random'
                            ))
                        </div>
                        <div class="col-12 col-md-4">
                            @include('components/presentational.boxNews',array(
                                'date'=>'24 Nov 2020',
                                'title'=>'Perbandingan biaya kemotrapi antara indonesia & Malaysia 2020',
                                'image_url'=>'https://source.unsplash.com/random'
                            ))
                        </div>
                        <div class="col-12 text-center mt-5">
                            @include('components/presentational.boxShowMore',array(
                                'title'=>'Tampilkan lainnya'
                            ))
                        </div>
                    </div>
                </div>
            </section>

            <section class="berita__section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center"><strong>BERITA TERKINI</strong></h2>
                            <p class="text-center mb-5"><i>Yang terbaru mengenai dunia onkologi</i></p>
                        </div>
                        <div class="col-12 col-md-4">
                            @include('components/presentational.boxNews',array(
                                'date'=>'24 Nov 2020',
                                'title'=>'Perbandingan biaya kemotrapi antara indonesia & Malaysia 2020',
                                'image_url'=>'https://source.unsplash.com/random',
                                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam perspiciatis dolor rem blanditiis. Vitae veniam, aliquid molestias non nostrum'
                            ))
                        </div>
                        <div class="col-12 col-md-4">
                            @include('components/presentational.boxNews',array(
                                'date'=>'24 Nov 2020',
                                'title'=>'Perbandingan biaya kemotrapi antara indonesia & Malaysia 2020',
                                'image_url'=>'https://source.unsplash.com/random',
                                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam perspiciatis dolor rem blanditiis. Vitae veniam, aliquid molestias non nostrum'
                            ))
                        </div>
                        <div class="col-12 text-center mt-5">
                            @include('components/presentational.boxShowMore',array(
                                'title'=>'Tampilkan lainnya'
                            ))
                        </div>
                    </div>
                </div>
            </section>
        </main>








        @include('components/presentational/footer')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="{{ asset('/js/app.js') }}"></script>
    </body>
</html>
