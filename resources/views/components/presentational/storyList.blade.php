<div class="storyListWrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
            </div>
            <div class="col-12 d-flex justify-content-between mb-5">
                <div>
                    <h2 class="text-center text-lg-start mb-5"><strong>Cerita Inspiratif Kanker</strong></h2>
                </div>
                @include('components/presentational.boxShowMore',array(
                    'title'=>'Load More',
                    'path'=>'{{ $pagesStory->links() }}'
                ))
            </div>
            @foreach($listingStory as $row)
            <div class="col-12 col-lg-4">
                @include('components/presentational.boxNews',array(
                    'date'=>$row->created_at,
                    'title'=>strip_tags($row->title),
                    'image_url'=>'https://source.unsplash.com/random',     
                    'author'=>$row->shortContent,
                    'path'=>'/cerita-survivor/'.$row->slug
                ))
            </div>
            @endforeach
        </div>
    </div>
</div>
