<div class="boxNews">
    <div class="boxImage">
        <img src="{{$image_url}}" alt="{{$title}}">
    </div>
    <div class="boxInformation">
        <span>{{$date}}</span>
        <h3 class="mb-4 mt-2">{{$title}}</h3>
        @if(empty($description))

        @else
            <p class="mb-5">{{$description}}}</p>
        @endif
        @include('components/presentational.boxReadMore',array('title'=>'Baca Selengkapnya','path'=>$path))
    </div>
</div>