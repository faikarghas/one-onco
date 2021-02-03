<a class="d-blok h-100">
    <div class="container">
        <div class="row">
            <div class="col-3 d-flex align-items-center justify-content-center">
                <img width="40px" height="40px" src="{{asset("/images/$image_url")}}" alt="" />
            </div>
            <div class="col-7 d-flex flex-column align-items-start justify-content-center">
                <h3 style="color: {{$color}}"><strong>{{$title}}</strong></h3>
                <p class="m-0">{{$description}}</p>
            </div>
            <div class="col-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.6 35.13">
                <path style="fill:{{$color}}" class="a" d="M19.18,4.48,30.53,15h-28a2.56,2.56,0,0,0,0,5.12h28L19.18,30.7a2.56,2.56,0,0,0,3.48,3.74l16.11-15a2.54,2.54,0,0,0,0-3.74L22.67.69a2.55,2.55,0,0,0-3.61.13A2.61,2.61,0,0,0,19.18,4.48Z"/>
                </svg>
            </div>
        </div>
    </div>
</a>