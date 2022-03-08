<div class="row">
    <div class="col-md-3">
        <ul class="vertical-menu">
            @foreach ($category as $item)
            <a href="/danh-muc/{{$item->slug}}">
                <li class="li-vertical">{{$item->name}}</li>
            </a>
            @endforeach
        </ul>
    </div>
    <div class="col-md-9 row-right">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                {{-- <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li> --}}
            </ol>
            <div class="carousel-inner">
                @foreach ($slider as $key => $item)
                <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                    <img src="{{asset('public/upload/images/photo/thumb/'.$item->photo)}}" class="d-block w-100" alt="...">
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions"
                data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions"
                data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </div>
</div>