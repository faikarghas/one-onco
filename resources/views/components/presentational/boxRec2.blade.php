<a href="/{{$path}}" class="d-blok h-100">
    <div class="container">
        <div class="row">
            <div class="col-3 d-flex align-items-center justify-content-center">
                <div class="{{$rounded}}">
                    <img width="100%" height="100%" src="{{asset("/images/$image_url")}}" alt="{{$image_url}}" />
                </div>
            </div>
            <div class="col-9 d-flex flex-column align-items-start justify-content-center">
                <h3 style="color: {{$color}}"><strong>{{$title}}</strong></h3>
                <ul>
                    <li><img src="{{asset('/images/stetoskop.png')}}" width="12px" alt="stetoskop"></li>
                    <li><p>Dokter Onkologi</p></li>
                </ul>
                <ul>
                    <li><img src="{{asset('/images/stetoskop.png')}}" width="12px" alt="stetoskop"></li>
                    <li><p>RSU Bunda Jakarta (Menteng, Jakarta)</p></li>
                </ul>
            </div>
        </div>
    </div>
</a>