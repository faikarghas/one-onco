<div class="col-cs-4">
    <div class="list__component">
    @foreach($listingKatArtikel as $key => $row)
        <div class="row list__component-list--item">
            <div class="col-1">
                <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
            </div>
            <div class="col-11 ps-4">
                @if (!empty(Request::segment(2)))
                    <a class="{{ Request::segment(2) == $row->slug ? 'active' : '' }}" href="/{{ $slugKat }}/{{ $row->slug }}">{{ $row->title }}</a>
                    <div class="tab_line {{ Request::segment(2) == $row->slug ? '' : 'd-none' }}"></div>   
                @else 
                <a class="{{$key == 0 ? 'active' : ''}}" href="{{url($slugKat)}}/{{ $row->slug }}">{{ $row->title }}</a>
                @if ($key == 0 )
                    <div class="tab_line "></div>
                @endif
                @endif
            </div>
        </div>
    @endforeach
    </div>
</div>