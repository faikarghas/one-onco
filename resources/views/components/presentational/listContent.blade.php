<div class="list__component">
    <div class="row list__component-list--item">
        <div class="col-1">
            <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
        </div>
        <div class="col-11 ps-4">
            <a href="">Jenis olahraga</a>
            @if(empty($description))
            @else
                <p>{{$description}}</p>
            @endif
        </div>
    </div>
    <div class="row list__component-list--item">
        <div class="col-1">
            <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
        </div>
        <div class="col-11 ps-4">
            <a href="">Pola olahraga dirumah</a>
            @if(empty($description))
            @else
                <p>{{$description}}</p>
            @endif
        </div>
    </div>
    <div class="row list__component-list--item">
        <div class="col-1">
            <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
        </div>
        <div class="col-11 ps-4">
            <a href="">Referensi</a>
            @if(empty($description))
            @else
                <p>{{$description}}</p>
            @endif
        </div>
    </div>
    <div class="row list__component-list--item">
        <div class="col-1">
            <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
        </div>
        <div class="col-11 ps-4">
            <a href="">FAQ</a>
            @if(empty($description))
            @else
                <p>{{$description}}</p>
            @endif
        </div>
    </div>
</div>