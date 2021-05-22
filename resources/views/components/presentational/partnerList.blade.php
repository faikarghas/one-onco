<div class="container">
    <div class="row">
        <div class="col-12 contentSlider">
            <h2 class="mb-5"><a href="/partner-kami"><strong>PARTNER KAMI</strong></a></h2>
            <ul class="partner-slider mb-0">
                @foreach($listingPartners as $row)
                    <li class="ps-3 pe-3">
                        <a href="{{ $row->partnerWebsite }}"><img src="{{ asset("data_partner/".$row->images) }}" width="100%" height="100px" alt=""></a>
                    </li>
                @endforeach
            </ul>
            <ul class="arrow_slider">
                <li class="prev"><img src="{{asset('images/rarrow.png')}}" width="17px" alt="arrow"></li>
                <li class="next"><img src="{{asset('images/rarrow.png')}}" width="17px" alt="arrow"></li>
            </ul>
        </div>
    </div>
</div>