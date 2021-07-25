<header class="otherHeader">
    @include('components/presentational.menuShowcase')
    <div class="container-fluid headerDesktop forDesktop">
        <div class="row">
            <div class="col-2">
                <a href="{{url('')}}">
                    <img class="img-fluid" src="{{ asset('/images/logo_oneonco_white.png') }}" width="200px" alt="one-onco logo"/>
                </a>
            </div>
            <div class="col-8">
                <nav>
                    <ul>
                        <li><a class="{{Request::segment(1) == 'tentang-kami' ? 'active' : '' }}" href="{{url('/tentang-kami')}}">Tentang Kami</a></li>
                        <li><a class="{{Request::segment(1) == 'untuk-pasien' ? 'active' : '' }}" href="{{url('/untuk-pasien')}}">Untuk Pasien</a></li>
                        <li><a class="{{Request::segment(1) == 'untuk-pendamping' ? 'active' : '' }}" href="{{url('/untuk-pendamping')}}">Untuk Pendamping</a></li>
                        <li><a class="{{Request::segment(1) == 'cerita-survivor' ? 'active' : '' }}" href="{{url('/cerita-survivor')}}">Cerita Inspiratif</a></li>
                        <li class="show_menu">
                            <a class="{{Request::segment(1) == 'berita-terkini' ? 'active' : '' }}" href="{{url('/berita-terkini')}}">Artikel & Berita Terkini</a>
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
            <div class="col-2">
                <ul class="userAction">
                    <li class="search_act"><img src="{{ asset('/images/search.png') }}" alt="search" width="15px"/></li>
                    <li><a><img src="{{ asset('/images/user.png') }}" alt="search" width="15px"/></a></li>
                    @if (Auth::check())
                        <li><a href='{{url('/logout')}}'>LOGOUT</a></li>
                        <li><a href="{{url('/pengaturan')}}"><img src="{{ asset('/images/setting.png') }}" alt="search" width="15px"/></a></li>
                    @else 
                        <li><a href='{{url('/logout')}}'>LOGIN</a></li>
                        <li></li>
                    @endif
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
                        <li><a href="{{url($path)}}"><img src="{{ asset('/images/arrow-left.png') }}" alt="search" width="14px" style="object-fit:contain;"/></a></li>
                        <li><a href="{{url($path)}}">Kembali</a></li>
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
    </div>
</header>

