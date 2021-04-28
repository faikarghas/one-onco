<div class="box__banner">
        @switch(Request::segment(1))
        @case('tentang-kami')
            <img src="{{asset('/images/tentang_kami.jpg')}}" alt="tentang kami one once" width="100%" height="100%" alt="">
            @break
        @case('untuk-pasien')
            <img src="{{asset('/images/menghadapi_kangker.jpg')}}" alt="mengahadapi kanker one once" width="100%" height="100%" alt="">
            @break
        @case('untuk-pendamping')
            <img src="{{asset('/images/perPendamping.jpg')}}" width="100%" height="100%" alt=""> 
            @break
        @case('partner-kami')
            <img src="{{asset('/images/perPendamping.jpg')}}" width="100%" height="100%" alt="">
            @break
        @default
            <img src="{{asset('/images/perkankerbanner.jpg')}}" width="100%" height="100%" alt="">
        @endswitch
        <div class="box__banner-desc">
        @if (!empty(Request::segment(2)))  
            <h2>{{ $titleHeader }}</h2>
            <p>{!! $introTitle !!}</p>
        @else
            <h2>{{ $titleHeader }}</h2>
            <p>{!! $introTitle !!}<p>
        @endif
    </div>
</div>