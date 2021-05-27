<footer class="pt-5 pb-5">
    {{-- <div class="container forMobile">
        <div class="row">
            <div class="col-12">
                <div class="newsletter">
                    <p class="text-white text-center">Terhubung dengan e-Newsletter kami</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Email Anda..." aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Berlangganan</button>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div>
                    <p>Hubungi Kami</p>
                    <p>Jl. Rawa Gatel Blok III-S Kav.36, Pulogadung,<br/>Jakarta Timur 13930</p>
                    <p>Telp: 021-4600158*</p>
                    <p>Email: contactus@oneonco.co.id</p>
                </div>
            </div>
            <div class="col-6 mt-4">
                <div class="sosmed">
                    <ul>
                        <li><a href=""><img src="{{asset('/images/fb-logo.png')}}" alt="logo-fb" width="30px" height="30px"/></a></li>
                        <li><a href=""><img src="{{asset('/images/twitter-logo.png')}}" alt="logo-twitter" width="30px" height="30px"/></a></li>
                        <li><a href=""><img src="{{asset('/images/ig-logo.png')}}" alt="logo-ig" width="30px" height="30px"/></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-6 mt-4">
                <img src="{{asset('/images/logo_oneonco.png')}}" width="120px"/>
            </div>
            <div class="col-6 d-flex align-items-end justify-content-end ">
                <p class="text-white mb-0">© Copyright OneOnco 2021</p>
            </div>
        </div>
    </div> --}}
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 d-flex align-items-center">
                <img src="{{asset('/images/logo_oneonco_white.png')}}" width="220px"/>
            </div>
            <div class="col-12 col-lg-4">
                <div class="newsletter">
                    {{-- <form action="{{ url('newsletter/store') }}" method="post"> --}}
                    <form  action="" id="newsletterForm">
                    @csrf
                    <p class="text-white text-end">Dapatkan informasi terkini seputar kanker melalui e-Newsletter kami</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Email Anda..." aria-label="Recipient's username" aria-describedby="button-addon2" name="email"  value="{{ old('email') }}" id="inputEmailNewsletter">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2" disabled>Berlangganan</button>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-lg-6 mt-5">
                <div>
                    <p class="mb-4"><strong>Hubungi Kami</strong></p>
                    <p>Alamat Kami</p>
                    <p>GLOBAL ONKOLAB FARMA<br/>
                        Jl. Jend. Ahmad Yani No.2, RT.3/RW.13,
                        <br>
                        Kayu Putih, Kec. Pulo Gadung, Kota Jakarta
                        <br>
                        Timur, DKI Jakarta 13210
                    </p>
                    <p class="m-0"><span class="fw-bold">Telp:</span> 021-5086 7767</p>
                    <p><span class="fw-bold">Email:</span> contactus@oneonco.co.id</p>
                </div>
            </div>
            <div class="col-12 col-lg-6 mt-5">
                <div class="sitemap">
                    <ul>
                        <li><a href="{{url('/tentang-kami')}}">Tentang Kami</a></li>
                        <li><a href="{{url('/untuk-pasien')}}">Untuk Pasien</a></li>
                        <li><a href="{{url('/untuk-pendamping')}}">Untuk Pendamping</a></li>
                        <li><a href="{{url('/cerita-survivor')}}">Cerita Inspiratif</a></li>
                        <li><a href="{{url('/berita-terkini')}}">Artikel & Berita Terkini</a></li>
                        <li><a href="{{url('/partner-kami')}}">Partner Kami</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-6 mt-5">
                <div class="sitemap2">
                    <ul class="m-0  d-flex align-items-center">
                        <li><a href="{{url('/syaratdanketentuan')}}">Syarat & Ketentuan</a></li>
                        <li><a href="{{url('/syaratdanketentuan/kebijakan-privasi')}}">Kebijakan Privasi</a></li>
                        <li><a href="{{url('/syaratdanketentuan/faq')}}">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-6 mt-5">
                <div class="sosmed d-flex align-items-center">
                    <p class="m-0">Temukan kami di</p>
                    <ul class="m-0">
                        <li><a href=""><img src="{{asset('/images/facebook_logo.png')}}" alt="logo-fb" width="30px" height="30px"/></a></li>
                        <li><a href=""><img src="{{asset('/images/email_logo.png')}}" alt="logo-mail" width="30px" height="30px"/></a></li>
                        <li><a href=""><img src="{{asset('/images/youtube_logo.png')}}" alt="logo-youtube" width="30px" height="30px"/></a></li>
                        <li><a href=""><img src="{{asset('/images/instagram_logo.png')}}" alt="logo-ig" width="30px" height="30px"/></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 mt-5">
                <p class="text-white mb-0 ">Copyright © 2021 ONEOnco | ALL RIGHTS RESERVED</p>
                <p class="text-white text-sm">ONEOnco adalah sebuah unit kerja, hak cipta dan kepemilikan dari PT. Global Onkolab Farma dan Kalbe Group. Media dan konten didalam website ini adalah kepemilikan ONEOnco dan masing-masing partnernya.</p>
            </div>
        </div>
    </div>
</footer>