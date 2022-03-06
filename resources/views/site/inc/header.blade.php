<header>
    <div class="top-header">
        <div class="container">
            <div class="top-header-block">
                <div class="company-address">
                    <i class="fa fa-map-marker-alt"></i>
                    <span>{{$settings['ADDRESS']}}</span>
                </div>
                <div class="contact-block">
                    <ul class="contact-block-list">
                        @foreach ($mxh_top as $item)
                        <li class="contact-block-item">
                            <a href="{{$item->link}}" class="contact-block-link">
                                <img src="{{asset('public/upload/images/photo/thumb/'.$item->photo)}}" alt="">
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-content">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-nav">
                <a class="navbar-brand logo-img" href="#"><img src="{{asset('public/upload/images/photo/thumb/'.$logo->photo)}}"
                        alt=""></a>
                <form class="form-inline my-2 my-lg-0 form-search" action="{{route('search.product')}}">
                    <h2 class="form-title">CÔNG TY TNHH THIẾT BỊ VĂN MINH</h2>
                    <input class="form-control mr-sm-2 btn-input" type="search" name="q"
                        placeholder="Nhập sản phẩm cần tìm" aria-label="Search" required>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">TIỀM KIẾM</button>
                </form>
                <div class="collapse navbar-collapse phone-contact" id="navbarSupportedContent">

                    <ul class="navbar-nav ml-auto">
                        <a href="tel:0776768999" class="dt"><span>{{$settings['HOTLINE']}} <p class="tell-people">(CSKH)
                                </p></span>
                            <span>{{$settings['PHONE']}} <p class="tell-people">(BS. HUNG)</p></span></a>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="menu-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-green">
                <!-- <a class="navbar-brand danh-muc pd-li" href="#"><img src="images/taxes-menu-icon.png" alt=""> DANH MỤC
                    SẢN PHẨM</a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav pd-li menu-category">
                    <li class="nav-item active pd-li icon-size">
                            <a class="nav-link  pd-li" href="/"><img src="{{asset('public/site/images/taxes-menu-icon.png')}}"
                                    alt="">DANH MỤC SẢN PHẨM</a>
                        </li>
                        <li class="nav-item bg-ani">
                            <a class="nav-link " href="/">TRANG CHỦ</a>
                        </li>
                        <li class="nav-item bg-ani">
                            <a class="nav-link " href="/gioi-thieu">GIỚI THIỆU</a>
                        </li>
                        <li class="nav-item bg-ani">
                            <a class="nav-link" href="{{route('get.product')}}">SẢN PHẨM</a>
                        </li>
                        <li class="nav-item bg-ani">
                            <a class="nav-link disabled" href="{{route('get.nha.dat')}}">MUA BÁN NHÀ ĐẤT</a>
                        </li>
                        <li class="nav-item bg-ani">
                            <a class="nav-link" href="{{route('get.news')}}">TIN TỨC</a>
                        </li>
                        <li class="nav-item bg-ani">
                            <a class="nav-link" href="{{route('get.video')}}">VIDEO</a>
                        </li>
                        <li class="nav-item bg-ani">
                            <a class="nav-link disabled" href="/lien-he">LIÊN HỆ</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>