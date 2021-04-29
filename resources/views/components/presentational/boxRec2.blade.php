<a href="/{{$path}}" class="d-block h-100">
    <div class="container">
        <div class="row">
            <div class="col-3 d-flex align-items-center justify-content-center">
                <div class="{{$rounded}}">
                    <img width="100%" height="100%" src="{{asset("/images/$image_url")}}" alt="{{$image_url}}" />
                </div>
            </div>
            <div class="col-7 d-flex flex-column align-items-start">
                <div class="title_wrapper">
                    <h3><strong>{{$title}}</strong></h3>
                </div>
                <ul>
                    <li class="pt-2 pb-2 spes">
                        <p><strong>{{ $spesialis  }}</strong></p>
                    </li>
                    <li class="pt-2">
                        <p><strong>Lokasi Praktek</strong></p>
                    </li>
                    <li><p>{!! $praktek !!}</p></li>
                </ul>
            </div>
            <div class="col-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.6 35.13">
                <path style="fill:{{$color}}" class="a" d="M19.18,4.48,30.53,15h-28a2.56,2.56,0,0,0,0,5.12h28L19.18,30.7a2.56,2.56,0,0,0,3.48,3.74l16.11-15a2.54,2.54,0,0,0,0-3.74L22.67.69a2.55,2.55,0,0,0-3.61.13A2.61,2.61,0,0,0,19.18,4.48Z"/>
                </svg>
            </div>
        </div>
    </div>
</a>