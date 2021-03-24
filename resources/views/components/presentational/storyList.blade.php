<div class="storyListWrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center text-lg-start mb-5"><strong>Cerita Inspiratif kanker survivor</strong></h2>
            </div>
            @foreach($listingStory as $row)
            <div class="col-12 col-lg-4">
                @include('components/presentational.boxNews',array(
                    'date'=>$row->createdAt,
                    'title'=>strip_tags($row->title),
                    'image_url'=>'https://source.unsplash.com/random',     
                    'author'=>$row->shortContent,
                    'path'=>'/cerita-survivor/'.$row->slug
                ))
            </div>
            @endforeach

            <!-- {{ $listingStory->links() }} -->
            <div class="col-12 text-center mt-5">
                @include('components/presentational.boxShowMore',array(
                    'title'=>'Load More',
                    'path'=>'{{ $pagesStory->links() }}'
                ))
            </div>
        </div>
    </div>
</div>
