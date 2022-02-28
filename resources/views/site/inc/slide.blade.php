<div class="row">
    <div class="col-md-3">
        <ul class="vertical-menu">
            @foreach ($category as $item)
            <a href="/danh-muc/{{$item->slug}}"><li class="li-vertical">{{$item->name}}</li></a>
            @endforeach
            


        </ul>
    </div>
    <div class="col-md-9 row-right">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('site/images/slider-1.png')}}" class="d-block w-100" alt="...">
                </div>
                <!-- <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
              </div> -->
            </div>
            <!-- <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button> -->
        </div>
    </div>
</div>