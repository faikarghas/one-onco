
@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>''])

    <main>
        <div class="box__banner">
            <img src="{{asset('/images/cerita_inspiratif.jpg')}}" width="100%" height="100%" alt="">
            <div class="box__banner-desc">
                <h2>{!! $title_header !!}</h2>
                <p>{!! $tagline_header !!}</p>
            </div>
        </div>
        <div class="storyListWrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    </div>
                    <div class="col-12 d-flex justify-content-between mb-5">
                        <div>
                            <h2 class="text-center text-lg-start mb-5"><strong>Cerita Inspiratif Pasien & Pendamping Kanker</strong></h2>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <?php
                            $yearCurrent  = date('Y');
                            $dateNews =  date('Y', strtotime($listingStory[0]->publishDate));
                            $date =  date('d-M-Y', strtotime($listingStory[0]->publishDate));
                        ?>
                        @include('components/presentational.boxNews',array(
                            'date'=>$date,
                            'title'=>strip_tags($listingStory[0]->title),
                            'image_url'=>$listingStory[0]->imgDesktop,
                            'author'=>$listingStory[0]->shortContent,
                            'path'=>'/cerita-survivor/'.$listingStory[0]->slug,
                            'class'=>'bigBox'
                        ))
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="row">
                            <?php $index = 0; ?>
                            @foreach($listingStory as $row)
                            @if ($index != 0)
                            <?php
                                $yearCurrent  = date('Y');
                                $dateNews =  date('Y', strtotime($row->publishDate));
                                $date =  date('d-M-Y', strtotime($row->publishDate));
                            ?>
                            <div class="col-12 col-lg-6">
                                @include('components/presentational.boxNews',array(
                                    'date'=>$date,
                                    'title'=>strip_tags($row->title),
                                    'image_url'=>$row->imgDesktop,
                                    'author'=>$row->shortContent,
                                    'path'=>'/cerita-survivor/'.$row->slug,
                                    'class'=>'smallBox'
                                ))
                            </div>
                            @endif
                            <?php $index++ ?>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12 mt-5">
                        <div class="row" id="post_data">
                            {{ csrf_field() }}      
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-5 text-center">
                        @include('components/presentational.boxShowMore',array(
                            'title'=>'Cerita inspiratif lainnya',
                            'path'=>''
                        ))
                    </div>
                </div>
            </div>
        </div>
        @include('/components/presentational.newsList',[])
    </main>
@endsection
@push('custom-scripts')
<script>

    document.addEventListener('DOMContentLoaded', function () {
        var _token = $('input[name="_token"]').val();

        $(document).on('click','#btn-more',function(){
            var id = $(this).data('id');
            // $('#btn-more').html('<b>Loading...</b>');
            load_data(id, _token);
        });

        function load_data(id="", _token)
        {
            $.ajax({
            url:"{{ route('loadmore_story.load_data') }}",
            method:"POST",
            data:{id:id, _token:_token},
            success:function(data)
            {
                $('#post_data').append(data);
            }
            })
        }
   
     });

 </script>
 @endpush
 @stack('custom-scripts')
