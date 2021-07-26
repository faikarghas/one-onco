<div class="col-cs-8">
    <div class="tentangKami__page-intro mb-5">
        {{-- <git --}}
        <h3>{!! $titleContentPages !!}</h3>
        <p>{!! $contentPages !!}<p>
    </div>
    <div class="share_sosmed forDesktop-dflex">
        <div class="share_sosmed-link">
            <p>Apabila informasi ini berguna untuk Anda, <br>bagikan ke keluarga, kerabat, dan teman Anda.</p>
            <a href="https://facebook.com/sharer/sharer.php?u={{url()->full()}}" target="_blank" rel="noopener"">
                <img src="{{asset('/images/fb2-logo.png')}}" alt="fb-logo" width="30px">
            </a>
            <a href="https://twitter.com/intent/tweet/?text={{$titleContentPages}}&url={{url()->full()}}" target="_blank" rel="noopener" aria-label="">
                <img src="{{asset('/images/twitter2-logo.png')}}" alt="twitter-logo" width="30px">
            </a>
            <a href="https://wa.me/?text={{url()->full()}}" target="_blank" rel="noopener">
                <img src="{{asset('/images/wa-logo.png')}}" alt="fb-logo" width="30px">
            </a>
        </div>
        <div class="share_sosmed-act">
            <ul>
                <li>
                    <a href="{{url('/belanja-sehat')}}"><img src="{{asset('/images/belanja_sehat_icon.png')}}" alt="logo belanja sehat"></a>
                    <a href="{{url('/konsultasi-online')}}"><img src="{{asset('/images/konsultasi_online_icon.png')}}" alt="logo konsultasi online"></a>
                    <a href="{{url('/deteksi-kanker')}}"><img src="{{asset('/images/deteksi_dini_kanker_icon.png')}}" alt="logo deteksi kanker"></a>
                </li>
            </ul>
        </div>
    </div>
</div>