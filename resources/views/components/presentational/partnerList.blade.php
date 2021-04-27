<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="mb-5"><strong>PARTNER KAMI</strong></h2>
            <ul class="partner-slider mb-0">
                @foreach($listingPartners as $row)
                    <li class="ps-3 pe-3">
                        <a href="{{ $row->partnerWebsite }}"><img src="{{ asset("data_partner/".$row->images) }}" width="100%" height="200px" alt=""></a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>