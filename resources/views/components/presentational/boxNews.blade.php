@if(empty($class))
<div class="boxNews">
@else
<div class='boxNews {{$class}}'>
@endif
    <div class="boxImage">
        <img src="{{$image_url}}" alt="{{$title}}">
    </div>
    <div class="boxInformation">
        @if(empty($description) && !@empty($author))
            <div class="title">
                {{-- <span>{{date('d-m-Y', $date)}}</span> --}}
                <h3 class="mt-2">{{$title}}</h3>
                <p class="author">{{$author}}</p>
        @else
            <div class="title">
                {{-- <span>{{$date}}</span> --}}
                <h3 class="mt-2">{{$title}}</h3>
        @endif
        </div>
        @if(empty($description))
        @else
            <p class="">{!! $description !!}<br><span>{{ $date }}</span></p>
            
        @endif
        @include('components/presentational.boxReadMore',array('title'=>'Baca Selengkapnya','path'=>$path))
    </div>
</div>