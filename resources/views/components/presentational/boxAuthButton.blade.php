@if(empty($type))
    <button class="button__auth" style="background-color:{{$color}};"><i>{{$title}}</i> <img src="{{asset('/images/arrow-white.png')}}" width="10px" alt="arrow" srcset="" type="button"></button>
@else
    <a href="{{$path}}" class="button__auth" style="background-color:{{$color}};"><i>{{$title}}</i> <img src="{{asset('/images/arrow-white.png')}}" width="10px" alt="arrow" srcset="" ></a>
@endif

