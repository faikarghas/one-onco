<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;400;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <div class="container-fluid headerHome forDesktop">
                <div class="row">
                    <div class="col-2"><img class="img-fluid" src="{{ asset('/images/oneonco-logo.png') }}" width="200px" alt="one-onco logo"/></div>
                    <div class="col-8">
                        <nav>
                            <ul>
                                <li><a href=""> Tentang Kami</a></li>
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
                            <li><a><img src="{{ asset('/images/user.png') }}" alt="search" width="15px"/></a></li>
                            <li><a>LOGIN</a></li>
                            <li><a><img src="{{ asset('/images/setting.png') }}" alt="search" width="15px"/></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container-fluid headerMobile forMobile">
                <div class="row">
                    <div class="col-6">
                        <div class="user">
                            <ul>
                                <li><a><img src="{{ asset('/images/user.png') }}" alt="search" width="15px"/></a></li>
                                <li><a>LOGIN</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="menu">
                            <ul>
                                <li><img src="{{ asset('/images/search.png') }}" alt="search" width="15px"/></li>
                                <li class="van">
                                    <div>nav</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex justify-content-center"><img class="img-fluid" src="{{ asset('/images/oneonco-logo.png') }}" width="170px" alt="one-onco logo"/></div>
                    </div>
                </div>
                <div class="box__welcome"></div>
                <div class="halfBoxRounded"></div>
            </div>
        </header>

        <main>
            <section class="first__section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="box__rec">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-3 d-flex align-items-center justify-content-center"><img width="40px" height="40px" src="{{asset('/images/perkanker.png')}}" alt="" /></div>
                                        <div class="col-7 d-flex flex-column align-items-start justify-content-center">
                                            <h3>Perawatan Kanker</h3>
                                            <p class="m-0">Cari tau mengenai perawatan kanker yang diderita</p>
                                        </div>
                                        <div class="col-2 d-flex align-items-center justify-content-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.6 35.13">
                                            <path style="fill: #80bc41;" class="a" d="M19.18,4.48,30.53,15h-28a2.56,2.56,0,0,0,0,5.12h28L19.18,30.7a2.56,2.56,0,0,0,3.48,3.74l16.11-15a2.54,2.54,0,0,0,0-3.74L22.67.69a2.55,2.55,0,0,0-3.61.13A2.61,2.61,0,0,0,19.18,4.48Z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="box__rec">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-3 d-flex align-items-center justify-content-center"><img width="40px" height="40px" src="{{asset('/images/dirkanker.png')}}" alt="" /></div>
                                        <div class="col-7 d-flex flex-column align-items-start justify-content-center">
                                            <h3>Direktori Kanker</h3>
                                            <p class="m-0">Cari tau mengenai perawatan kanker yang diderita</p>
                                        </div>
                                        <div class="col-2 d-flex align-items-center justify-content-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.6 35.13">
                                            <path style="fill: #80bc41;" class="a" d="M19.18,4.48,30.53,15h-28a2.56,2.56,0,0,0,0,5.12h28L19.18,30.7a2.56,2.56,0,0,0,3.48,3.74l16.11-15a2.54,2.54,0,0,0,0-3.74L22.67.69a2.55,2.55,0,0,0-3.61.13A2.61,2.61,0,0,0,19.18,4.48Z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="box__rec">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-3 d-flex align-items-center justify-content-center"><img width="40px" height="40px" src="{{asset('/images/beliobat.png')}}" alt="" /></div>
                                        <div class="col-7 d-flex flex-column align-items-start justify-content-center">
                                            <h3>Beli Obat</h3>
                                            <p class="m-0">Cari tau mengenai perawatan kanker yang diderita</p>
                                        </div>
                                        <div class="col-2 d-flex align-items-center justify-content-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.6 35.13">
                                            <path style="fill: #80bc41;" class="a" d="M19.18,4.48,30.53,15h-28a2.56,2.56,0,0,0,0,5.12h28L19.18,30.7a2.56,2.56,0,0,0,3.48,3.74l16.11-15a2.54,2.54,0,0,0,0-3.74L22.67.69a2.55,2.55,0,0,0-3.61.13A2.61,2.61,0,0,0,19.18,4.48Z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="box__rec">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-3 d-flex align-items-center justify-content-center"><img width="40px" height="40px" src="{{asset('/images/live-chat.png')}}" alt="" /></div>
                                        <div class="col-7 d-flex flex-column align-items-start justify-content-center">
                                            <h3>Live Chat</h3>
                                            <p class="m-0">Cari tau mengenai perawatan kanker yang diderita</p>
                                        </div>
                                        <div class="col-2 d-flex align-items-center justify-content-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.6 35.13">
                                            <path style="fill: #80bc41;" class="a" d="M19.18,4.48,30.53,15h-28a2.56,2.56,0,0,0,0,5.12h28L19.18,30.7a2.56,2.56,0,0,0,3.48,3.74l16.11-15a2.54,2.54,0,0,0,0-3.74L22.67.69a2.55,2.55,0,0,0-3.61.13A2.61,2.61,0,0,0,19.18,4.48Z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>








        @include('components/presentational/footer')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="{{ asset('/js/app.js') }}"></script>
        @env('local')
        <script src="http://localhost:35729/livereload.js"></script>
        @endenv
    </body>
</html>
