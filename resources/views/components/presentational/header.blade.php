<header class="otherHeader">
    @include('components/presentational.menuShowcase')
    <div class="container-fluid headerDesktop forDesktop">
        <div class="row">
            <div class="col-2">
                <a href="/">
                    <img class="img-fluid" src="{{ asset('/images/logo_oneonco_white.png') }}" width="200px" alt="one-onco logo"/>
                </a>
            </div>
            <div class="col-8">
                <nav>
                    <ul>
                        <li><a href="/tentang-kami">Tentang Kami</a></li>
                        <li><a href="/untuk-pasien">Untuk Pasien</a></li>
                        <li><a href="/untuk-pendamping">Untuk Pendamping</a></li>
                        <li><a href="/cerita-survivor">Cerita Inspiratif Survivor</a></li>
                        <li><a href="/berita-terkini">Berita Terkini & Jurnal</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-2">
                <ul class="userAction">
                    <li><img src="{{ asset('/images/search.png') }}" alt="search" width="15px"/></li>
                    <li><a><img src="{{ asset('/images/user.png') }}" alt="search" width="15px"/></a></li>
                    <li><a href="/login">LOGIN</a></li>
                    <li><a href="/pengaturan"><img src="{{ asset('/images/setting.png') }}" alt="search" width="15px"/></a></li>
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
                        <li><a href="/"><img src="{{ asset('/images/arrow-left.png') }}" alt="search" width="14px" style="object-fit:contain;"/></a></li>
                        <li><a href="/{{$path}}">Kembali</a></li>
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
    </div>
</header>

