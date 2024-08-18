<div class="row mt-5">
    @foreach($newsData as $news)
        <div class="col-md-4 mb-2">
            <div class="card">
                @if($news->image)
                <img src="{{$news->image}}" height="250" class="card-img-top" alt="...">
                @endif
                <div class="card-body">
                    <h5 class="card-title">
                        {{$news->title}}
                    </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    @endforeach


</div>
