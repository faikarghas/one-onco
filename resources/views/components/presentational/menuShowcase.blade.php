<div class="menumMobile forMobile">
    <div class="menuShowcase">
        <div class="container h-100">
            <div class="row align-items-stretch h-100">
                <div class="col-12">
                    <ul class="listmenu">
                        <li><a href="/">Beranda</a></li>
                        <li><a href="/tentang-kami">Tentang Kami</a></li>
                        <li><a href="/untuk-pasien">Untuk Pasien</a></li>
                        <li><a href="/untuk-pendamping">Untuk Pedamping</a></li>
                        <li><a href="/cerita-survivor">Cerita Inspiratif</a></li>
                        <li><a href="/berita-terkini">Berita Terkini</a></li>
                        <li><a href="/artikel-kanker">Artikel Kanker</a></li>
                    </ul>
                </div>
                <div class="col-12">
                    <div class="box__rec" style="height: 60px">
                        @include('components/presentational.boxRecMenu',array(
                            'image_url'=>'perkanker.png',
                            'title'=>'Perawatan Kanker',
                            'color'=>'#80bc41;',
                            'path'=>'perawatan-kanker'
                        ))
                    </div>
                    <div class="box__rec" style="height: 60px">
                        @include('components/presentational.boxRecMenu',array(
                            'image_url'=>'dirkanker.png',
                            'title'=>'Direktori Layanan',
                            'color'=>'#33A58F;',
                            'path'=>'direktori'
                        ))
                    </div>
                    <div class="box__rec" style="height: 60px">
                        @include('components/presentational.boxRecMenu',array(
                            'image_url'=>'beliobat.png',
                            'title'=>'Belanja Sehat',
                            'color'=>'#00A2E3;',
                            'path'=>'login'
                        ))
                    </div>
                    <div class="box__rec" style="height: 60px">
                        @include('components/presentational.boxRecMenu',array(
                            'image_url'=>'live-chat.png',
                            'title'=>'Konsultasi Online',
                            'color'=>'#C6CB57;',
                            'path'=>'login'
                        ))
                    </div>
                </div>
                <div class="col-12">
                    <ul class="setting">
                        <li>
                            <a href="/pengaturan" class="d-flex align-items-center">
                                <img class="me-4" src="{{asset('/images/setting.png')}}" alt="" width="15px">
                                Pengaturan Akun
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
