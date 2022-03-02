@extends('site.layout')
@section('SEO_title', $settings['SEO_TITLE'])
@section('SEO_keywords', $settings['SEO_KEYWORDS'])
@section('mimeType', $image->mimeType)
@section('width', $image->width)
@section('height', $image->height)
@section('mimeType', $image->mimeType)
@section('SEO_description', $settings['SEO_DISCRIPTION'])
@section('content')
<div class="content">
    <div class="container">
        <!-- Banner - menu -->
        {{-- silder --}}
        @include('site.inc.slide')
        <!-- content -->
        <h1 class="product-new">SẢN PHẨM MỚI </h1>
        <p class="sk-fml">Mang lại cho khách hàng những sản phẩm tốt nhất dành cho sức khỏe của gia đình bạn?
        </p>
        <p style="text-align: center; margin-top: 0;"><img src="{{ asset('site/images/border-xoan.jpg') }}" alt="">
        </p>
        <div class="row">
            @foreach ($new_product as $item)
            <div class="col-2dot4 col-sm-2dot4 col-md-2dot4 col-lg-2dot4 col-xl-2dot4">
                <a href=""><img src="/upload/images/product/thumb/{{ $item->photo }}" alt="">
                    <h6 class="product-name">{{ $item->name }}</h6>
                </a>
                <div class="price-view">
                    @if ($item->price == null)
                    <p class="product-price">Giá: <a href="" class="contact-product">liên hệ</a> </p>
                    @else
                    <p class="product-price">Giá: <a href=""
                            class="contact-product">{{ number_format($item->price, 0, ',', '.') }} đ</a> </p>
                    @endif
                    <p class="product-views">Lượt xem: {{ $item->view }}</p>
                </div>
            </div>
            @endforeach
        </div>
        @foreach ($category_lv1 as $key => $value)
        <div class="tab-chem">
            <span class="left-content">{{ $value->title }}
                <svg id="title-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    version="1.1" width="400" height="400" viewBox="0 0 400 400" xml:space="preserve">
                    <g transform="matrix(1 0 0 1 200 200)" id="96y6mOHc-6wU-Zbhjml11">
                        <path
                            style="stroke: rgb(0,102,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,102,0); fill-rule: nonzero; opacity: 1;"
                            vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                            d="M 199.57912 199.57912 L -199.57913000000002 199.57912 L -199.57913000000002 -199.57913000000002 C -199.57913000000002 -199.57913000000002 -146.46465 -153.19866000000002 -64.81482000000003 -25.252530000000007 C 16.83500999999997 102.69359999999999 199.57911999999996 199.57912 199.57911999999996 199.57912 z"
                            stroke-linecap="round" />
                    </g>
                </svg>
            </span>
            <?php
                    $category_noibac = DB::table('categories')
                        ->select('categories.name', 'categories.id', 'categories.slug')
                        ->join('categories_lv1', 'categories_lv1.id', '=', 'categories.category_lv1_id')
                        ->where('categories.noi_bac', 1)
                        ->where('categories.status', 1)
                        ->where('categories_lv1.id', $value->id)
                        ->orderBy('categories.stt', 'ASC')
                        ->get();
                    ?>
            @if ($key == 0)
            @foreach ($category_noibac as $item)
            <span class="tablinks{{ $key }}" category-id="{{ $item->id }}"
                onclick="chemistry(event, 'chemistry-{{ $item->id }}')">{{ $item->name }}</span>
            @endforeach
            @else
            @foreach ($category_noibac as $item)
            <span class="tablinks{{ $key }}" category-id="{{ $item->id }}"
                onclick="medicalEquipment(event, 'medical-equipment-{{ $item->id }}')">{{ $item->name }}</span>
            @endforeach
            @endif
        </div>
        <br>
        @if ($key == 0)
        @foreach ($category_noibac as $item)
        <div id="chemistry-{{ $item->id }}" class="tab-content{{ $key }}">
        </div>
        @endforeach
        @else
        @foreach ($category_noibac as $item)
        <div id="medical-equipment-{{ $item->id }}" class="tab-content{{ $key }}">
        </div>
        @endforeach
        @endif
        @endforeach
        {{-- <br>
            <div id="chemistry" class="tab-content">
                <div class="row">
                    @foreach ($cate_product as $item)
                        <div class="col-md-3 img-flu">
                            <img src="/upload/images/product/thumb/{{ $item->photo }}" alt="">
        <h6 class="product-name">{{ $item->name }}</h6>
        <div class="price-view">
            @if ($item->price == null)
            <p class="product-price">Giá: <a href="" class="contact-product">liên hệ</a> </p>
            @else
            <p class="product-price">Giá: <a href=""
                    class="contact-product">{{ number_format($item->price, 0, ',', '.') }} đ</a>
            </p>
            @endif
            <p class="product-views">Lượt xem: {{ $item->view }}</p>
        </div>
    </div>
    @endforeach
</div>
<nav aria-label="Page navigation " class="pagination-product">
    <ul class="pagination">
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>
</nav>
</div> --}}


{{-- {{$cate_product->links()}} --}}
{{-- <div class="tab-chem vt">
                <span class="left-content">Vật tư y tế
                    <svg id="title-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" width="400" height="400" viewBox="0 0 400 400" xml:space="preserve">
                        <g transform="matrix(1 0 0 1 200 200)" id="96y6mOHc-6wU-Zbhjml11">
                            <path
                                style="stroke: rgb(0,102,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,102,0); fill-rule: nonzero; opacity: 1;"
                                vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                                d="M 199.57912 199.57912 L -199.57913000000002 199.57912 L -199.57913000000002 -199.57913000000002 C -199.57913000000002 -199.57913000000002 -146.46465 -153.19866000000002 -64.81482000000003 -25.252530000000007 C 16.83500999999997 102.69359999999999 199.57911999999996 199.57912 199.57911999999996 199.57912 z"
                                stroke-linecap="round" />
                        </g>
                    </svg>
                </span>
                <span class="tablinks2" onclick="medicalEquipment(event, 'medical-equipment-1')">Máy tạo
                    oxy</span>
                <span class="tablinks2" onclick="medicalEquipment(event, 'medical-equipment-2')">Máy đo nồng độ
                    oxy</span>
                <span class="tablinks2" onclick="medicalEquipment(event, 'medical-equipment-3')">Máy xát
                    khuẩn</span>
                <span class="tablinks2" onclick="medicalEquipment(event, 'medical-equipment-4')">Máy đo huyết
                    áp</span>
                <span class="tablinks2" onclick="medicalEquipment(event, 'medical-equipment-5')">Sản phẩm
                    khác</span>
            </div>
            <br>
            <div id="medical-equipment-1" class="tab-content2">
                <div class="row">
                    <div class="col-md-3"img-flu>
                        <img src="{{ asset('site/images/thiet-ke-khong-ten-182126_440x440.png') }}" alt="">
<h6 class="product-name">Hóa chất xét nghiệm sinh hóa 2</h6>
<div class="price-view">
    <p class="product-price">Giá: <a href="" class="contact-product">liên hệ</a> </p>
    <p class="product-views">Lượt xem: </p>
</div>
</div>
<div class="col-md-3" img-flu>
    <img src="{{ asset('site/images/thiet-ke-khong-ten-182126_440x440.png') }}" alt="">
    <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
    <div class="price-view">
        <p class="product-price">Giá: </p>
        <p class="product-views">Lượt xem: </p>
    </div>
</div>
<div class="col-md-3" img-flu>
    <img src="{{ asset('site/images/thiet-ke-khong-ten-182126_440x440.png') }}" alt="">
    <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
    <div class="price-view">
        <p class="product-price">Giá: </p>
        <p class="product-views">Lượt xem: </p>
    </div>
</div>
<div class="col-md-3" img-flu>
    <img src="{{ asset('site/images/thiet-ke-khong-ten-182126_440x440.png') }}" alt="">
    <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
    <div class="price-view">
        <p class="product-price">Giá: </p>
        <p class="product-views">Lượt xem: </p>
    </div>
</div>
</div>
</div>
<div id="medical-equipment-2" class="tab-content2">
    <div class="row">
        <div class="col-md-3" img-flu>
            <img src="{{ asset('site/images/thiet-ke-khong-ten-182126_440x440.png') }}" alt="">
            <h6 class="product-name">Hóa chất xét nghiệm sinh hóa 3</h6>
            <div class="price-view">
                <p class="product-price">Giá: <a href="" class="contact-product">liên hệ</a> </p>
                <p class="product-views">Lượt xem: </p>
            </div>
        </div>
        <div class="col-md-3" img-flu>
            <img src="{{ asset('site/images/thiet-ke-khong-ten-182126_440x440.png') }}" alt="">
            <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
            <div class="price-view">
                <p class="product-price">Giá: </p>
                <p class="product-views">Lượt xem: </p>
            </div>
        </div>
        <div class="col-md-3" img-flu>
            <img src="{{ asset('site/images/thiet-ke-khong-ten-182126_440x440.png') }}" alt="">
            <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
            <div class="price-view">
                <p class="product-price">Giá: </p>
                <p class="product-views">Lượt xem: </p>
            </div>
        </div>
        <div class="col-md-3" img-flu>
            <img src="{{ asset('site/images/thiet-ke-khong-ten-182126_440x440.png') }}" alt="">
            <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
            <div class="price-view">
                <p class="product-price">Giá: </p>
                <p class="product-views">Lượt xem: </p>
            </div>
        </div>

    </div>
</div>
<div id="medical-equipment-3" class="tab-content2">
    <div class="row">
        <div class="col-md-3" img-flu>
            <img src="{{ asset('site/images/thiet-ke-khong-ten-182126_440x440.png') }}" alt="">
            <h6 class="product-name">Hóa chất xét nghiệm sinh hóa 2</h6>
            <div class="price-view">
                <p class="product-price">Giá: <a href="" class="contact-product">liên hệ</a> </p>
                <p class="product-views">Lượt xem: </p>
            </div>
        </div>
        <div class="col-md-3" img-flu>
            <img src="{{ asset('site/images/thiet-ke-khong-ten-182126_440x440.png') }}" alt="">
            <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
            <div class="price-view">
                <p class="product-price">Giá: </p>
                <p class="product-views">Lượt xem: </p>
            </div>
        </div>
        <div class="col-md-3" img-flu>
            <img src="{{ asset('site/images/thiet-ke-khong-ten-182126_440x440.png') }}" alt="">
            <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
            <div class="price-view">
                <p class="product-price">Giá: </p>
                <p class="product-views">Lượt xem: </p>
            </div>
        </div>
        <div class="col-md-3" img-flu>
            <img src="{{ asset('site/images/thiet-ke-khong-ten-182126_440x440.png') }}" alt="">
            <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
            <div class="price-view">
                <p class="product-price">Giá: </p>
                <p class="product-views">Lượt xem: </p>
            </div>
        </div>
    </div>
</div>
<div id="medical-equipment-4" class="tab-content2">
    <div class="row">
        <div class="col-md-3" img-flu>
            <img src="{{ asset('site/images/thiet-ke-khong-ten-182126_440x440.png') }}" alt="">
            <h6 class="product-name">Hóa chất xét nghiệm sinh hóa 2</h6>
            <div class="price-view">
                <p class="product-price">Giá: <a href="" class="contact-product">liên hệ</a> </p>
                <p class="product-views">Lượt xem: </p>
            </div>
        </div>
        <div class="col-md-3" img-flu>
            <img src="{{ asset('site/images/thiet-ke-khong-ten-182126_440x440.png') }}" alt="">
            <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
            <div class="price-view">
                <p class="product-price">Giá: </p>
                <p class="product-views">Lượt xem: </p>
            </div>
        </div>
        <div class="col-md-3" img-flu>
            <img src="{{ asset('site/images/thiet-ke-khong-ten-182126_440x440.png') }}" alt="">
            <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
            <div class="price-view">
                <p class="product-price">Giá: </p>
                <p class="product-views">Lượt xem: </p>
            </div>
        </div>
        <div class="col-md-3" img-flu>
            <img src="{{ asset('site/images/thiet-ke-khong-ten-182126_440x440.png') }}" alt="">
            <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
            <div class="price-view">
                <p class="product-price">Giá: </p>
                <p class="product-views">Lượt xem: </p>
            </div>
        </div>
        <div class="col-md-3" img-flu>
            <img src="{{ asset('site/images/thiet-ke-khong-ten-182126_440x440.png') }}" alt="">
            <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
            <div class="price-view">
                <p class="product-price">Giá: </p>
                <p class="product-views">Lượt xem: </p>
            </div>
        </div>
    </div>
</div>
<div id="medical-equipment-5" class="tab-content2">
    <div class="row">
        <div class="col-md-3" img-flu>
            <img src="{{ asset('site/images/thiet-ke-khong-ten-182126_440x440.png') }}" alt="">
            <h6 class="product-name">Hóa chất xét nghiệm sinh hóa 2</h6>
            <div class="price-view">
                <p class="product-price">Giá: <a href="" class="contact-product">liên hệ</a> </p>
                <p class="product-views">Lượt xem: </p>
            </div>
        </div>
        <div class="col-md-3" img-flu>
            <img src="{{ asset('site/images/thiet-ke-khong-ten-182126_440x440.png') }}" alt="">
            <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
            <div class="price-view">
                <p class="product-price">Giá: </p>
                <p class="product-views">Lượt xem: </p>
            </div>
        </div>
        <div class="col-md-3" img-flu>
            <img src="{{ asset('site/images/thiet-ke-khong-ten-182126_440x440.png') }}" alt="">
            <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
            <div class="price-view">
                <p class="product-price">Giá: </p>
                <p class="product-views">Lượt xem: </p>
            </div>
        </div>
        <div class="col-md-3" img-flu>
            <img src="{{ asset('site/images/thiet-ke-khong-ten-182126_440x440.png') }}" alt="">
            <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
            <div class="price-view">
                <p class="product-price">Giá: </p>
                <p class="product-views">Lượt xem: </p>
            </div>
        </div>
        <div class="col-md-3" img-flu>
            <img src="{{ asset('site/images/thiet-ke-khong-ten-182126_440x440.png') }}" alt="">
            <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
            <div class="price-view">
                <p class="product-price">Giá: </p>
                <p class="product-views">Lượt xem: </p>
            </div>
        </div>
    </div>
</div>
<nav aria-label="Page navigation " class="pagination-product">
    <ul class="pagination">
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>
</nav> --}}
<h1 class="product-new">MUA BÁN NHÀ ĐẤT </h1>
<p class="sk-fml">Chuyên mua bán nhà đất và kí gửi tại Sài Gòn</p>
<p style="text-align: center; margin-top: 0;"><img src="{{ asset('site/images/border-xoan.jpg') }}" alt="">
</p>
<div class="row">
    @foreach ($nhaDat as $item)
    <div class="col-md-3 img-flu real-estate">
        <div class="cover">
            <img src="/upload/images/nhaDat/thumb/{{ $item->photo }}" alt="" class="img-padding">
            <div class="cover-bottom">
                <h6>{{ $item->name }}</h6>
                <div class="info">
                    <?xml version="1.0" encoding="iso-8859-1"?>
                    <!-- Generator: Adobe Illustrator 18.1.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 235.517 235.517"
                        style="enable-background:new 0 0 235.517 235.517;" xml:space="preserve">
                        <g>
                            <path style="fill:white;"
                                d="M118.1,235.517c7.898,0,14.31-6.032,14.31-13.483c0-7.441,0-13.473,0-13.473
                                                                    c39.069-3.579,64.932-24.215,64.932-57.785v-0.549c0-34.119-22.012-49.8-65.758-59.977V58.334c6.298,1.539,12.82,3.72,19.194,6.549
                                                                    c10.258,4.547,22.724,1.697,28.952-8.485c6.233-10.176,2.866-24.47-8.681-29.654c-11.498-5.156-24.117-8.708-38.095-10.236V8.251
                                                                    c0-4.552-6.402-8.251-14.305-8.251c-7.903,0-14.31,3.514-14.31,7.832c0,4.335,0,7.843,0,7.843
                                                                    c-42.104,3.03-65.764,25.591-65.764,58.057v0.555c0,34.114,22.561,49.256,66.862,59.427v33.021
                                                                    c-10.628-1.713-21.033-5.243-31.623-10.65c-11.281-5.755-25.101-3.72-31.938,6.385c-6.842,10.1-4.079,24.449,7.294,30.029
                                                                    c16.709,8.208,35.593,13.57,54.614,15.518v13.755C103.79,229.36,110.197,235.517,118.1,235.517z M131.301,138.12
                                                                    c14.316,4.123,18.438,8.257,18.438,15.681v0.555c0,7.979-5.776,12.651-18.438,14.033V138.12z M86.999,70.153v-0.549
                                                                    c0-7.152,5.232-12.657,18.71-13.755v29.719C90.856,81.439,86.999,77.305,86.999,70.153z" />
                        </g>
                    </svg>
                    @if ($item->price == null)
                    <p><a href="tel:{{ $settings['PHONE'] }}" style="color: red;" href="">Liên hệ</a>
                    </p>
                    @else
                    <p style="color: red;">{{ number_format($item->price, 0, ',', '.') }} đ</p>
                    @endif
                    <p>Diện tích: <a style="color: blue;" href="">{{ $item->area }}m<sup>2</sup></a></p>
                </div>
                <div class="acreage">
                    <svg id="Capa_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path style="fill:white;"
                            d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z" />
                    </svg> <span data-id="{{ $item->id }}">Xem bản đồ</span>
                </div>
                <p class="des">{{ substr($item->description, 0, 150) . ' [...]' }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
{{-- <div class="row distance">
                <div class="col-md-3 img-flu real-estate">
                    <div class="cover">
                        <img src="{{ asset('site/images/thiet-ke-khong-ten-192969_440x440.png') }}" alt=""
class="img-padding">
<div class="cover-bottom">
    <h6>Bán nhà đường Thăng long Phường 4 Quận Tân Bình</h6>
    <div class="info">
        <?xml version="1.0" encoding="iso-8859-1"?>
        <!-- Generator: Adobe Illustrator 18.1.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px" y="0px" viewBox="0 0 235.517 235.517" style="enable-background:new 0 0 235.517 235.517;"
            xml:space="preserve">
            <g>
                <path style="fill:white;"
                    d="M118.1,235.517c7.898,0,14.31-6.032,14.31-13.483c0-7.441,0-13.473,0-13.473
                                            c39.069-3.579,64.932-24.215,64.932-57.785v-0.549c0-34.119-22.012-49.8-65.758-59.977V58.334c6.298,1.539,12.82,3.72,19.194,6.549
                                            c10.258,4.547,22.724,1.697,28.952-8.485c6.233-10.176,2.866-24.47-8.681-29.654c-11.498-5.156-24.117-8.708-38.095-10.236V8.251
                                            c0-4.552-6.402-8.251-14.305-8.251c-7.903,0-14.31,3.514-14.31,7.832c0,4.335,0,7.843,0,7.843
                                            c-42.104,3.03-65.764,25.591-65.764,58.057v0.555c0,34.114,22.561,49.256,66.862,59.427v33.021
                                            c-10.628-1.713-21.033-5.243-31.623-10.65c-11.281-5.755-25.101-3.72-31.938,6.385c-6.842,10.1-4.079,24.449,7.294,30.029
                                            c16.709,8.208,35.593,13.57,54.614,15.518v13.755C103.79,229.36,110.197,235.517,118.1,235.517z M131.301,138.12
                                            c14.316,4.123,18.438,8.257,18.438,15.681v0.555c0,7.979-5.776,12.651-18.438,14.033V138.12z M86.999,70.153v-0.549
                                            c0-7.152,5.232-12.657,18.71-13.755v29.719C90.856,81.439,86.999,77.305,86.999,70.153z" />
            </g>
        </svg>
        <p>14 tỷ</p>
        <p>Diện tích: <a href="">ssss<sup>2</sup></a></p>
    </div>
    <div class="acreage"><svg id="Capa_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
            <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
            <path style="fill:white;"
                d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z" />
        </svg> Xem bản đồ
    </div>
    <p class="des">Nhà đẹp, năm ngay khu văn phòng công ty, trung tâm thương mại</p>
</div>
</div>
</div>
<div class="col-md-3 img-flu real-estate">
    <div class="cover">
        <img src="{{ asset('site/images/thiet-ke-khong-ten-192969_440x440.png') }}" alt="" class="img-padding">
        <div class="cover-bottom">
            <h6>Bán nhà đường Thăng long Phường 4 Quận Tân Bình</h6>
            <div class="info">
                <?xml version="1.0" encoding="iso-8859-1"?>
                <!-- Generator: Adobe Illustrator 18.1.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 235.517 235.517"
                    style="enable-background:new 0 0 235.517 235.517;" xml:space="preserve">
                    <g>
                        <path style="fill:white;"
                            d="M118.1,235.517c7.898,0,14.31-6.032,14.31-13.483c0-7.441,0-13.473,0-13.473
                                                c39.069-3.579,64.932-24.215,64.932-57.785v-0.549c0-34.119-22.012-49.8-65.758-59.977V58.334c6.298,1.539,12.82,3.72,19.194,6.549
                                                c10.258,4.547,22.724,1.697,28.952-8.485c6.233-10.176,2.866-24.47-8.681-29.654c-11.498-5.156-24.117-8.708-38.095-10.236V8.251
                                                c0-4.552-6.402-8.251-14.305-8.251c-7.903,0-14.31,3.514-14.31,7.832c0,4.335,0,7.843,0,7.843
                                                c-42.104,3.03-65.764,25.591-65.764,58.057v0.555c0,34.114,22.561,49.256,66.862,59.427v33.021
                                                c-10.628-1.713-21.033-5.243-31.623-10.65c-11.281-5.755-25.101-3.72-31.938,6.385c-6.842,10.1-4.079,24.449,7.294,30.029
                                                c16.709,8.208,35.593,13.57,54.614,15.518v13.755C103.79,229.36,110.197,235.517,118.1,235.517z M131.301,138.12
                                                c14.316,4.123,18.438,8.257,18.438,15.681v0.555c0,7.979-5.776,12.651-18.438,14.033V138.12z M86.999,70.153v-0.549
                                                c0-7.152,5.232-12.657,18.71-13.755v29.719C90.856,81.439,86.999,77.305,86.999,70.153z" />
                    </g>
                </svg>
                <p>14 tỷ</p>
                <p>Diện tích: <a href="">ssss<sup>2</sup></a></p>
            </div>
            <div class="acreage"><svg id="Capa_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                    <path style="fill:white;"
                        d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z" />
                </svg> Xem bản đồ
            </div>
            <p class="des">Nhà đẹp, năm ngay khu văn phòng công ty, trung tâm thương mại</p>
        </div>
    </div>
</div>
<div class="col-md-3 img-flu real-estate">
    <div class="cover">
        <img src="{{ asset('site/images/thiet-ke-khong-ten-192969_440x440.png') }}" alt="" class="img-padding">
        <div class="cover-bottom">
            <h6>Bán nhà đường Thăng long Phường 4 Quận Tân Bình</h6>
            <div class="info">
                <?xml version="1.0" encoding="iso-8859-1"?>
                <!-- Generator: Adobe Illustrator 18.1.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 235.517 235.517"
                    style="enable-background:new 0 0 235.517 235.517;" xml:space="preserve">
                    <g>
                        <path style="fill:white;"
                            d="M118.1,235.517c7.898,0,14.31-6.032,14.31-13.483c0-7.441,0-13.473,0-13.473
                                                c39.069-3.579,64.932-24.215,64.932-57.785v-0.549c0-34.119-22.012-49.8-65.758-59.977V58.334c6.298,1.539,12.82,3.72,19.194,6.549
                                                c10.258,4.547,22.724,1.697,28.952-8.485c6.233-10.176,2.866-24.47-8.681-29.654c-11.498-5.156-24.117-8.708-38.095-10.236V8.251
                                                c0-4.552-6.402-8.251-14.305-8.251c-7.903,0-14.31,3.514-14.31,7.832c0,4.335,0,7.843,0,7.843
                                                c-42.104,3.03-65.764,25.591-65.764,58.057v0.555c0,34.114,22.561,49.256,66.862,59.427v33.021
                                                c-10.628-1.713-21.033-5.243-31.623-10.65c-11.281-5.755-25.101-3.72-31.938,6.385c-6.842,10.1-4.079,24.449,7.294,30.029
                                                c16.709,8.208,35.593,13.57,54.614,15.518v13.755C103.79,229.36,110.197,235.517,118.1,235.517z M131.301,138.12
                                                c14.316,4.123,18.438,8.257,18.438,15.681v0.555c0,7.979-5.776,12.651-18.438,14.033V138.12z M86.999,70.153v-0.549
                                                c0-7.152,5.232-12.657,18.71-13.755v29.719C90.856,81.439,86.999,77.305,86.999,70.153z" />
                    </g>
                </svg>
                <p>14 tỷ</p>
                <p>Diện tích: <a href="">ssss<sup>2</sup></a></p>
            </div>
            <div class="acreage"><svg id="Capa_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                    <path style="fill:white;"
                        d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z" />
                </svg> Xem bản đồ
            </div>
            <p class="des">Nhà đẹp, năm ngay khu văn phòng công ty, trung tâm thương mại</p>
        </div>
    </div>
</div>
<div class="col-md-3 img-flu real-estate">
    <div class="cover">
        <img src="{{ asset('site/images/thiet-ke-khong-ten-192969_440x440.png') }}" alt="" class="img-padding">
        <div class="cover-bottom">
            <h6>Bán nhà đường Thăng long Phường 4 Quận Tân Bình</h6>
            <div class="info">
                <?xml version="1.0" encoding="iso-8859-1"?>
                <!-- Generator: Adobe Illustrator 18.1.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 235.517 235.517"
                    style="enable-background:new 0 0 235.517 235.517;" xml:space="preserve">
                    <g>
                        <path style="fill:white;"
                            d="M118.1,235.517c7.898,0,14.31-6.032,14.31-13.483c0-7.441,0-13.473,0-13.473
                                            c39.069-3.579,64.932-24.215,64.932-57.785v-0.549c0-34.119-22.012-49.8-65.758-59.977V58.334c6.298,1.539,12.82,3.72,19.194,6.549
                                            c10.258,4.547,22.724,1.697,28.952-8.485c6.233-10.176,2.866-24.47-8.681-29.654c-11.498-5.156-24.117-8.708-38.095-10.236V8.251
                                            c0-4.552-6.402-8.251-14.305-8.251c-7.903,0-14.31,3.514-14.31,7.832c0,4.335,0,7.843,0,7.843
                                            c-42.104,3.03-65.764,25.591-65.764,58.057v0.555c0,34.114,22.561,49.256,66.862,59.427v33.021
                                            c-10.628-1.713-21.033-5.243-31.623-10.65c-11.281-5.755-25.101-3.72-31.938,6.385c-6.842,10.1-4.079,24.449,7.294,30.029
                                            c16.709,8.208,35.593,13.57,54.614,15.518v13.755C103.79,229.36,110.197,235.517,118.1,235.517z M131.301,138.12
                                            c14.316,4.123,18.438,8.257,18.438,15.681v0.555c0,7.979-5.776,12.651-18.438,14.033V138.12z M86.999,70.153v-0.549
                                            c0-7.152,5.232-12.657,18.71-13.755v29.719C90.856,81.439,86.999,77.305,86.999,70.153z" />
                    </g>
                </svg>
                <p>14 tỷ</p>
                <p>Diện tích: <a href="">ssss<sup>2</sup></a></p>
            </div>
            <div class="acreage"><svg id="Capa_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                    <path style="fill:white;"
                        d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z" />
                </svg> Xem bản đồ
            </div>
            <p class="des">Nhà đẹp, năm ngay khu văn phòng công ty, trung tâm thương mại</p>
        </div>
    </div>
</div>

</div> --}}

</div>
</div>
<div class="banner-criteria">
    <div class="container">
        <h2 class="distance">TIÊU CHÍ SỰ LỰA CHỌN</h2>
        <div class="row criteria-blocks">
            @foreach ($standard as $item)
            <div class="col-md-3 col-6 img-flucol-6 criteria-option">

                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    width="200" height="200" viewBox="0 0 200 200" xml:space="preserve">
                    <g transform="matrix(1 0 0 1 100.39 99.68)" id="l-rGmylNm8wurXbvWPUuq">
                        <path
                            style="stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
                            vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                            d="M -99.72479 0 L 0.07492999999999483 99.64986 L 99.72479 0 L 0.07492999999999483 -99.64986 z"
                            stroke-linecap="round" />
                    </g>
                    <g transform="matrix(1 0 0 1 100.17 100.34)" id="exPVaVJBm86_twJTfRsln">
                        <path
                            style="stroke: rgb(35,93,172); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-opacity: 0; fill-rule: nonzero; opacity: 1;"
                            vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                            d="M -0.22984 -91.58249 L -92.08753999999999 -0.33670000000000755 L -0.22983999999999583 91.58248999999999 L 92.08754 -0.33670000000000755 z"
                            stroke-linecap="round" />
                    </g>
                    <g transform="matrix(1.43 0 0 1.43 100.39 95.98)" id="XDewt6JbuW4lwAwmXcCht">
                        <image
                            style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                            vector-effect="non-scaling-stroke"
                            xlink:href="/upload/images/standard/thumb/{{ $item->photo }}" x="-25" y="-25" width="50"
                            height="50"></image>
                    </g>
                </svg>
                <h4>{{ $item->title }}</h4>
                <p>{{ $item->description }}</p>

            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <div class="video-clip">
        <h1 class="product-new">Video Clip</h1>
        <p class="sk-fml">Góc chia sẽ cẩm nang về thiết bị y tế chúng tôi gửi đến các bạn</p>
        <p style="text-align: center; margin-top: 0;"><img src="{{ asset('site/images/border-xoan.jpg') }}" alt="">
        </p>
        <div class="row video-clip-blocks">
            <div class="col-md-4">
                <a class="video text-decoration-none" data-fancybox="video"
                    data-src="https://www.youtube.com/watch?v=8N-yMfTtiS4" title="Hướng dẫn lái xe số tự động | XEHAY">
                    <p class="pic-video scale-img"><img onerror="this.src='thumbs/480x360x2/assets/images/noimage.png';"
                            src="https://img.youtube.com/vi/8N-yMfTtiS4/0.jpg"
                            alt="Hướng dẫn lái xe số tự động | XEHAY"></p>
                </a>
            </div>
            <div class="col-md-4">
                <a class="video text-decoration-none" data-fancybox="video"
                    data-src="https://www.youtube.com/watch?v=8N-yMfTtiS4" title="Hướng dẫn lái xe số tự động | XEHAY">
                    <p class="pic-video scale-img"><img onerror="this.src='thumbs/480x360x2/assets/images/noimage.png';"
                            src="https://img.youtube.com/vi/8N-yMfTtiS4/0.jpg"
                            alt="Hướng dẫn lái xe số tự động | XEHAY"></p>
                </a>
            </div>
            <div class="col-md-4">
                <a class="video text-decoration-none" data-fancybox="video"
                    data-src="https://www.youtube.com/watch?v=8N-yMfTtiS4" title="Hướng dẫn lái xe số tự động | XEHAY">
                    <p class="pic-video scale-img"><img onerror="this.src='thumbs/480x360x2/assets/images/noimage.png';"
                            src="https://img.youtube.com/vi/8N-yMfTtiS4/0.jpg"
                            alt="Hướng dẫn lái xe số tự động | XEHAY"></p>
                </a>
            </div>
        </div>
    </div>
    <div class="news-events">
        <div class="row">
            <div class="col-md-6">
                <h2 class="news-events-title">TIN TỨC & SỰ KIỆN</h2>
                <img src="{{ asset('site/images/border.jpg') }}" alt="">
                @foreach ($news as $item)
                <div class="border-content">
                    <div class="text-news">
                        <h4 class="title-news">
                            {{ $item->title }}
                        </h4>
                        <p class="des-news">
                            {{ $item->description }}
                        </p>
                    </div>
                    <div class="img-news">
                        <img src="/upload/images/news/thumb/{{ $item->photo }}" alt="">
                    </div>
                </div>
                @endforeach

            </div>
            <div class="col-md-6">
                <h2 class="news-events-title">Ý KIẾN KHÁCH HÀNG</h2>
                <img src="{{ asset('site/images/border.jpg') }}" alt="">
                <div class="customer-avt">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('site/images/Untitled-3.png') }}" alt="">
                                <p class="customer-review">Shop luôn nắm bắt sở thích của khách hàng, các mẫu thiết bị
                                    có chất
                                    lượng cao giúp chúng tôi tự tin sử dụng sản phẩm.</p>
                                <blockquote>
                                    <p class="name-customer">Anh: Nguyễn Ngọc Trường</p>
                                    <p class="address">Tăng Nhơn Phú B, TP. Thủ Đức.</p>
                                </blockquote>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('site/images/tien-ne.jpg') }}" alt="">
                                <p class="customer-review">Shop luôn nắm bắt sở thích của khách hàng, các mẫu thiết bị
                                    có chất
                                    lượng cao giúp chúng tôi tự tin sử dụng sản phẩm.</p>
                                <blockquote>
                                    <p class="name-customer">Chị: Mỹ Tiên</p>
                                    <p class="address">Tăng Nhơn Phú B, TP. Thủ Đức.</p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- data-target="#exampleModalCenter" data-toggle="modal" --}}

<!-- Modal -->
<div class="modal fade" id="modal_map" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Bản đồ</h5>
                <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script_site')
<script>
// $('#myModal').on('shown.bs.modal', function() {
//     $('#myInput').trigger('focus')
// })
$(document).ready(function() {
    $("[category-id]").click(function() {
        let id = $(this).attr('category-id');
        var show_product = $("#chemistry-" + id);
        //console.log(id);
        let _token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            method: "POST",
            url: "{{ route('show.product.category') }}",
            data: {
                _token: _token,
                id: id
            },
            success: function(data) {
                show_product.html(data);
            }
        });
    });

    $("[category-id]").click(function() {
        let id = $(this).attr('category-id');
        var show_product = $("#medical-equipment-" + id);
        //console.log(id);
        let _token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            method: "POST",
            url: "{{ route('show.product.category') }}",
            data: {
                _token: _token,
                id: id
            },
            success: function(data) {
                show_product.html(data);
            }
        });
    });

    $("[data-id]").click(function() {
        $('#modal_map').modal('show');
        let id = $(this).attr('data-id');
        let _token = $('meta[name="csrf-token"]').attr('content');
        $(document).on('click', '.modal-close', function() {
            $('#my_modal').modal('hide');
        })
        $.ajax({
            method: "POST",
            url: "{{ route('show.map') }}",
            data: {
                _token: _token,
                id: id
            },
            success: function(data) {
                if (data.status) {
                    //console.log(data);
                    if (data.data.map != null) {
                        $('.modal-body').html(data.data.map);
                    } else {
                        $('.modal-body').html("Đang cập nhật");
                    }
                } else {
                    $('.modal-body').html("Đang cập nhật");
                }
            }
        });
    });
})
</script>
@endpush