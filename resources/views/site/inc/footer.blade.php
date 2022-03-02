<div class="blocks-contact">
    <div class="container">
        <div class="row color-p">
            @foreach ($social_footer as $item)
            <div class="col-md-4  contact-padding">
                <div class="contact-us">
                    <img src="/upload/images/photo/thumb/{{ $item->photo }}" alt="">
                    <p class="name-contact">{{$item->title}}</p>
                </div>
                <p class="favourite">{{$item->description}}</p>
                <a href="{{$item->link}}" target="_blank" class="link-contact">Tham Gia ngay</a>
            </div>
            @endforeach
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-6 footer-item">
                <h4>Giới thiệu công ty</h4>
                <p class="des-company">
                    {!! $footer->content !!}
                </p>
            </div>
            <div class="col-md-4 Policy col-6 footer-item">
                <h4>Chính sách</h4>
                <a href="">Hình Thức Thanh Toán</a>
                <a href="">Chính Sách Bán Hàng</a>
                <a href="">Giao & Nhận Hàng</a>
                <a href="">Phương Thức Vận Chuyển</a>
                <a href="">Chính Sách Bảo Mật</a>
                <a href="">FAQs</a>
            </div>
            <div class="col-md-4 col-12 footer-item">
                <h4>Bản Đồ Địa Điểm</h4>
                <p class="map">
                    {!! $settings['MAP_IFRAME'] !!}
                </p>

            </div>
        </div>
        <h2 class="title-company">CÔNG TY TNHH THIẾT BỊ VĂN MINH</h2>
        <div class="row bg-contact">
            <div class="col-md-3">
                <div class="contact-us">
                    <img src="{{asset('site/images/map.png')}}" alt="">
                    <p class="name-contact">{{$settings['ADDRESS']}}</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contact-us">
                    <img src="{{asset('site/images/map.png')}}" alt="">
                    <p class="name-contact">Hotline <br>
                        {{$settings['HOTLINE']}}
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contact-us">
                    <img src="{{asset('site/images/map.png')}}" alt="">
                    <p class="name-contact">Email CSKH: <br>
                        {{$settings['EMAIL']}}
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contact-us">
                    <img src="{{asset('site/images/map.png')}}" alt="">
                    <p class="name-contact">Website <br>
                        {{$settings['WEBSITE']}}</p>
                </div>
            </div>
        </div>
        <p class="Copyright" style="color: white;">Copyright &copy; 2022 Thiết Bị Văn Minh. All rights reserved. Design by SotaGroup
            Co.,Ltd</p>
    </div>
</footer>