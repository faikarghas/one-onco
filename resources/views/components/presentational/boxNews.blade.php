@if(empty($class))
<div class="boxNews">
@else
<div class='boxNews {{$class}}'>
@endif
    <div class="boxImage">
        <img src="{{asset("data_artikel/$image_url")}}" alt="{{$title}}">
    </div>
    <div class="boxInformation">
        @if(empty($description) && !@empty($author))
            <div class="title">
                <h3 class="mt-2">{{$title}}</h3>
                <p class="author">{{$author}}</p>
        @else
            <div class="title">
                <h3 class="mt-2">{{$title}}</h3>
                <p class="text-secondary">{!! $description !!}</p>
        @endif
        </div>
        <div class="dateFormat">
            <p>{{ $date }}</p>
            @include('components/presentational.boxReadMore',array('title'=>'Baca selengkapnya','path'=>$path))
        </div>
    </div>
</div>