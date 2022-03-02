<header>
    <div class="top-header">
        <div class="container">
            <div class="top-header-block">
                <div class="company-address">
                    <i class="fa fa-map-marker-alt"></i>
                    <span>Địa chỉ: Số 29 Đường số 4, Khu Phố 17, Phường Bình Hưng Hòa A, Quận Bình Tân, TP. Hồ Chí
                        Minh</span>
                </div>
                <div class="contact-block">
                    <ul class="contact-block-list">
                        <li class="contact-block-item">
                            <a href="#" class="contact-block-link">
                                <img src="{{asset('site/images/li-1.jpg')}}" alt="">
                            </a>
                        </li>
                        <li class="contact-block-item">
                            <a href="#" class="contact-block-link">
                                <img src="{{asset('site/images/li-2.jpg')}}" alt="">
                            </a>
                        </li>
                        <li class="contact-block-item">
                            <a href="#" class="contact-block-link">
                                <img src="{{asset('site/images/li-3.jpg')}}" alt="">
                            </a>
                        </li>
                        <li class="contact-block-item">
                            <a href="#" class="contact-block-link">
                                <img src="{{asset('site/images/li-4.jpg')}}" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-content">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-nav">
                <a class="navbar-brand logo-img" href="#"><img src="/upload/images/photo/thumb/{{$logo->photo}}"
                        alt=""></a>
                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->

                <form class="form-inline my-2 my-lg-0 form-search">
                    <h2 class="form-title">CÔNG TY TNHH THIẾT BỊ VĂN MINH</h2>
                    <input class="form-control mr-sm-2 btn-input" type="search" placeholder="Nhập sản phẩm cần tìm"
                        aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">TIỀM KIẾM</button>
                </form>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav ml-auto">
                        <a href="tel:0776768999" class="dt"><span>{{$settings['HOTLINE']}} <p class="tell-people">(CSKH)
                                </p>
                            </span>
                            <span>{{$settings['PHONE']}} <p class="tell-people">(BS. HUNG)</p></span></a>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="menu-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav header-navbar-list">
                            <li class="nav-item header-navbar-item active">
                                <a href="#" class="header-navbar-link">
                                    <img src="{{ asset('site/images/taxes-menu-icon.png') }}" class="danh-muc-menu" />
                                    Danh Mục Sản phẩm</a>
                            </li>
                            <li class="nav-item header-navbar-item">
                                <a href="index.php" class="header-navbar-link">Trang chủ</a>
                            </li>
                            <li class="nav-item header-navbar-item">
                                <a href="gioi-thieu.php" class="header-navbar-link">Giới thiệu</a>
                            </li>
                            <li class="nav-item header-navbar-item">
                                <a href="cong-trinh.php" class="header-navbar-link">Công trình</a>
                            </li>
                            <li class="nav-item header-navbar-item">
                                <a href="dich-vu.php" class="header-navbar-link">Dịch vụ</a>
                            </li>
                            <li class="nav-item header-navbar-item">
                                <a href="tin-tuc.php" class="header-navbar-link">Tin tức</a>
                            </li>
                            <li class="nav-item header-navbar-item">
                                <a href="video.php" class="header-navbar-link">Video</a>
                            </li>
                            <li class="nav-item header-navbar-item">
                                <a href="lien-he.php" class="header-navbar-link">Liên hệ</a>
                            </li>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

    </div>
</header>