@extends('site.layout')
@section('SEO_title',$settings['SEO_TITLE'])
@section('SEO_keywords',$settings['SEO_KEYWORDS'])
@section('mimeType',$image->mimeType)
@section('width',$image->width)
@section('height',$image->height)
@section('mimeType',$image->mimeType)
@section('SEO_description',$settings['SEO_DISCRIPTION'])
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
            <p style="text-align: center; margin-top: 0;"><img src="{{asset('site/images/border-xoan.jpg')}}" alt=""></p>
            <div class="row">
                @foreach ($new_product as $item)
                <div class="col-2dot4">
                    <img src="/upload/images/product/thumb/{{ $item->photo }}" alt="" width="200px">
                    <h6 class="product-name">{{$item->name}}</h6>
                    <div class="price-view">
                        @if ($item->price == NULL)
                        <p class="product-price">Giá: <a href="" class="contact-product">liên hệ</a> </p>
                        @else
                        <p class="product-price">Giá: <a href="" class="contact-product">{{ number_format($item->price, 0, ',', '.') }} đ</a> </p>
                        @endif
                        <p class="product-view">Lượt xem: {{$item->view}}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="tab-chem">
                <span class="left-content">Hóa chất Xét Nghiệm
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
                <span class="tablinks" onclick="chemistry(event, 'chemistry-1')">Hóa chất xét nghiệm</span>
                <span class="tablinks" onclick="chemistry(event, 'chemistry-2')">Máy xét nghiệm</span>
                <span class="tablinks" onclick="chemistry(event, 'chemistry-3')">Thiết bị xét nghiệm</span>
                <span class="tablinks" onclick="chemistry(event, 'chemistry-4')">Sản phẩm khác</span>
            </div>
            <br>
            <div id="chemistry-1" class="tab-content">
                <div class="row">
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa 2</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: <a href="" class="contact-product')}}">liên hệ</a> </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="chemistry-2" class="tab-content">
                <div class="row">
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa 3</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: <a href="" class="contact-product">liên hệ</a> </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>

                </div>
            </div>
            <div id="chemistry-3" class="tab-content">
                <div class="row">
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa 2</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: <a href="" class="contact-product">liên hệ</a> </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="chemistry-4" class="tab-content">
                <div class="container">
                    <div class="row">
                        <div class="col-2dot4">
                            <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                            <h6 class="product-name">Hóa chất xét nghiệm sinh hóa 2</h6>
                            <div class="price-view">
                                <p class="product-price">Giá: <a href="" class="contact-product">liên hệ</a> </p>
                                <p class="product-view">Lượt xem: </p>
                            </div>
                        </div>
                        <div class="col-2dot4">
                            <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                            <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                            <div class="price-view">
                                <p class="product-price">Giá: </p>
                                <p class="product-view">Lượt xem: </p>
                            </div>
                        </div>
                        <div class="col-2dot4">
                            <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                            <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                            <div class="price-view">
                                <p class="product-price">Giá: </p>
                                <p class="product-view">Lượt xem: </p>
                            </div>
                        </div>
                        <div class="col-2dot4">
                            <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                            <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                            <div class="price-view">
                                <p class="product-price">Giá: </p>
                                <p class="product-view">Lượt xem: </p>
                            </div>
                        </div>
                        <div class="col-2dot4">
                            <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                            <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                            <div class="price-view">
                                <p class="product-price">Giá: </p>
                                <p class="product-view">Lượt xem: </p>
                            </div>
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
            </nav>
            <div class="tab-chem vt">
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
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa 2</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: <a href="" class="contact-product">liên hệ</a> </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="medical-equipment-2" class="tab-content2">
                <div class="row">
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa 3</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: <a href="" class="contact-product">liên hệ</a> </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>

                </div>
            </div>
            <div id="medical-equipment-3" class="tab-content2">
                <div class="row">
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa 2</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: <a href="" class="contact-product">liên hệ</a> </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="medical-equipment-4" class="tab-content2">
                <div class="row">
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa 2</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: <a href="" class="contact-product">liên hệ</a> </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="medical-equipment-5" class="tab-content2">
                <div class="row">
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa 2</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: <a href="" class="contact-product">liên hệ</a> </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
                        </div>
                    </div>
                    <div class="col-2dot4">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-182126_440x440.png')}}" alt="" width="200px">
                        <h6 class="product-name">Hóa chất xét nghiệm sinh hóa</h6>
                        <div class="price-view">
                            <p class="product-price">Giá: </p>
                            <p class="product-view">Lượt xem: </p>
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
            </nav>
            <h1 class="product-new">MUA BÁN NHÀ ĐẤT </h1>
            <p class="sk-fml">Chuyên mua bán nhà đất và kí gữi tại Sài Gòn</p>
            <p style="text-align: center; margin-top: 0;"><img src="{{asset('site/images/border-xoan.jpg')}}" alt=""></p>
            <div class="row">
                <div class="col-md-3 real-estate">
                    <div class="cover">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-192969_440x440.png')}}" alt="" class="img-padding">
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
                                <p>Diện tích: <a style="color: blue;" href="">ssss<sup>2</sup></a></p>
                            </div>
                            <div class="acreage"><svg id="Capa_2" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 384 512">
                                    <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path style="fill:white;"
                                        d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z" />
                                </svg> Xem bản đồ
                            </div>
                            <p class="des">Nhà đẹp, năm ngay khu văn phòng công ty, trung tâm thương mại</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 real-estate">
                    <div class="cover">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-192969_440x440.png')}}" alt="" class="img-padding">
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
                            <div class="acreage"><svg id="Capa_2" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 384 512">
                                    <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path style="fill:white;"
                                        d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z" />
                                </svg> Xem bản đồ
                            </div>
                            <p class="des">Nhà đẹp, năm ngay khu văn phòng công ty, trung tâm thương mại</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 real-estate">
                    <div class="cover">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-192969_440x440.png')}}" alt="" class="img-padding">
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
                            <div class="acreage"><svg id="Capa_2" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 384 512">
                                    <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path style="fill:white;"
                                        d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z" />
                                </svg> Xem bản đồ
                            </div>
                            <p class="des">Nhà đẹp, năm ngay khu văn phòng công ty, trung tâm thương mại</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 real-estate">
                    <div class="cover">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-192969_440x440.png')}}" alt="" class="img-padding">
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
                            <div class="acreage"><svg id="Capa_2" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 384 512">
                                    <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path style="fill:white;"
                                        d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z" />
                                </svg> Xem bản đồ
                            </div>
                            <p class="des">Nhà đẹp, năm ngay khu văn phòng công ty, trung tâm thương mại</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row distance">
                <div class="col-md-3 real-estate">
                    <div class="cover">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-192969_440x440.png')}}" alt="" class="img-padding">
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
                            <div class="acreage"><svg id="Capa_2" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 384 512">
                                    <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path style="fill:white;"
                                        d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z" />
                                </svg> Xem bản đồ
                            </div>
                            <p class="des">Nhà đẹp, năm ngay khu văn phòng công ty, trung tâm thương mại</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 real-estate">
                    <div class="cover">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-192969_440x440.png')}}" alt="" class="img-padding">
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
                            <div class="acreage"><svg id="Capa_2" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 384 512">
                                    <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path style="fill:white;"
                                        d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z" />
                                </svg> Xem bản đồ
                            </div>
                            <p class="des">Nhà đẹp, năm ngay khu văn phòng công ty, trung tâm thương mại</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 real-estate">
                    <div class="cover">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-192969_440x440.png')}}" alt="" class="img-padding">
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
                            <div class="acreage"><svg id="Capa_2" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 384 512">
                                    <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path style="fill:white;"
                                        d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z" />
                                </svg> Xem bản đồ
                            </div>
                            <p class="des">Nhà đẹp, năm ngay khu văn phòng công ty, trung tâm thương mại</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 real-estate">
                    <div class="cover">
                        <img src="{{asset('site/images/thiet-ke-khong-ten-192969_440x440.png')}}" alt="" class="img-padding">
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
                            <div class="acreage"><svg id="Capa_2" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 384 512">
                                    <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path style="fill:white;"
                                        d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z" />
                                </svg> Xem bản đồ
                            </div>
                            <p class="des">Nhà đẹp, năm ngay khu văn phòng công ty, trung tâm thương mại</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class="banner-criteria">
        <div class="container">
            <h2 class="distance">TIÊU CHÍ SỰ LỰA CHỌN</h2>
            <div class="row criteria-blocks">
                <div class="col-md-3 criteria-option">
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
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAABSBJREFUaEPt2XeI3EUUwPHP/C4XjRFJjIVorNhRrOg/ioio2CsR7EZvd6MgYkM0kGDBBoKiJncxlqD/iGJBsSGioNhRrBhJFJPYYztjkkv2J/O73172ziu73ub2jL5/7tiZ38z7zrx5896bYD2RsJ5w+DvIbFtITBNspWxl00GDsfhVi/ku9MVA+vQGabcZLsVpmICupoPQiuV4Ros7BoJZC3K3bbSaJ3XEKFB+IBU+FZyh4P2+HdaCtLsR14xiiIpqT5jodFOtqta1GuQT7F7VmOb/V/qsRgs95yoOFLd9pB3G71L7K1kwEMh32CJv7BRcJLUNrsUKqYsk9pS6Gl9lf4MD8zMVgUZKlksdreTVgUCWYKu88Sdle2BniWfQaaw9dTlA6lnBeyY4xDJHCx4h8ywjJX8IjlTw+kAgi7F13hjNamFuStujjM8wHtvl3uwjTMK2I0WQz1MXyAjrVtd0/12QP7EGSV3r1djO0aSjV9yoyjv+oewo071Wyxn5VuoCqV+FzOU2R9JsIVslrsfBuRK/Sxymzbu1gCwy0W59L53m0KDd4zgpn/83iaO0eaMWkMXK9jfd901TvjJxe2ZWT+HwKo/6vtQ7gnmK3oy/V9/s1e53sVb7meaHpoM8osUvHpM6sR9dlio72XRv/TtAlnlZcEi/i5p6WsnxoxtkljEmuxmXD2IZyxRNGr0gsyQmZxF5jO1iFHEXzsdBfaCWKtq6fpA7bWID4yVZ2NIYKUusscJ0vwi6o+52N+QBK6nrlMw0x96YJ9iv53wH8xWcWx/IXDsoeyAP93vlA8MkGoMYqBayi67dTflOVIZdLNWm5Dlz7a7sLWyMBYKTFXxcH0i73TAfU/JAcpj693weo4clEhcoO55sN/rK14Ki1GG4MkslyqZGj/XP3O9s20tsqvvWbYwkgjGW6HIWbsuj7v7GXoENEVPecxW8XelU3440Ru3+R5njMsGtg0BUvlspOE3B09UDNR8kFXSYgetqXKffsrir6MPhgdxnc10mDdu0yrlptjgTM2vYiYredeUj/Yco99hRi3vzrHC47jcWM+IYseBRT6rQAJA5dhY8iV0YVhUy3hUxba5FPs3n2ifv3ACQOFI0rbKNrBzGhTjOCqvcJzhuCJKFUqfgYkFbY0FqWcOh+txunPFZOeeAQbp+L5iq4BUdXqiqgDZoR4ZSspb22faVeK6qjtb3qwhxjoLn3W9DXZ5qLEh0lbNNMNYkXeJhHVwSLVZb5QffmFXVv8OpUg/ll1vfMb6TOlvJi1lDBFmVncsjG2da99hVi0dzr1VLpT7m+2ukZiiZ06Nxh+uz33rLz1gkdZWSl3qa1glId9DYgZ2oYUe63Wp8Y7lF0YNVIGdKXSFYKvWxYIGyhYIPFP3Yi2+dgFS81moTa7oQU4lUl5KvesLzOEZMmDY3GT+7WOeg9rnOQIY6F41u/x+ke0VHTxXl/x2p7MhoKdDFKGBjT/7TC/HLLDAsjopX3ViIiBfiCbVeiN9iy7zzNzhP4k/RhTZLgpi1BCFLug7N1VguOCaLwaqkOkP8PHtq65aYJ8RMLIYhI/3YWa1fDPfj/JvkD6+xrVPqICXx8bZHqkHuwCXNWvya5w1e1OoE54uFiH5AOuwi9fAQoXXN862jjosEZ/V9CI1z9TabuaZIzZI6FrFoNtx0thE88YxGE3st063kg/4G/bv9t9sL0zCuxsCwEcoOPEZ8MeuuoT2m6OWBOjbzIDd0AdYbkL8AUIX4Qn7PiT8AAAAASUVORK5CYII="
                                x="-25" y="-25" width="50" height="50"></image>
                        </g>
                    </svg>
                    <h4>chính sách phát triển</h4>
                    <p>Từ nhiều năm nay chúng tôi vẫn tiếp tục nghiên cứu, phát triển và ứng dụng những cái mới để mang
                        đến</p>
                </div>
                <div class="col-md-3 criteria-option">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        width="200" height="200" viewBox="0 0 200 200" xml:space="preserve">
                        <g transform="matrix(1 0 0 1 99.61 99.68)" id="l-rGmylNm8wurXbvWPUuq">
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
                        <g transform="matrix(1.35 0 0 1.35 99.61 96.19)" id="lmvMQ6BFWOxywDdtXSw5O">
                            <image
                                style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                vector-effect="non-scaling-stroke"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAABNdJREFUaEPt2neInEUYx/HPu3fGGAsWxIIgNlBULFixoYItgj1YomK7XaOIRvEPCwZUBBURUa+YU1AJJLETC4jGiv6hICr6h0awYYHY9UzubkdmbpPs3e3ebW733QTJ/HOwNzPP7/s+z7zzzDNv5n/Sslw5euyn4BbBCSjIvKXsDiXvtdpufiB9jhEswI5jRP8uc5EuL7QSpnUg8+1s0OY28qdhW+B57FJH7M+CmYIfdNjSkAFzfNUMWGtA+swR3IZODFX+bj2JsN+wotK3jHsV3T1VmOZBFpnmV6/g2KmKSOMyb/jXSa5JcGvdGgd5xE7K9sAgNjLoY1db7j6bmGGJzHFrbb16QPC6f5xqrgH9NjfoAB2CIR0KvlW0bKL5GwPp0SVzPbbFMDoqC3aJx0y3wostBel1KF6sCI8aYxj263KXTKgFNDlInzMETyfnj26zFC3OBaTH0TJv1hA8R1H31EB6PYHZ4wZnztbl6VxAeh2Jt2sIXqjo3KmCPIvTJwRZ6aWmFztL/W1mWiPdjlDwzjibwbNKzpwqSAyrWoNHQmuRDr9agpOaWuyZV9PeUjSofmg9o+is1oIEtyq5I03a50RlN8vSOopvtbVpHektGNyr5Jk0sFcRPTUmyQGEZVY40DX+WBvVk/adp9MOKRc7qF0g0c5inS5zmT8nFdhIh3kKdvAgrqzTPRePrLL1SQqG4BsFncrjXtMTIxQEZUMKthdcgYMnGJArSCPPulV9NoDEoKn3+m3kKf+Ep3A89mxkwCR91olHfhRcouQV3Q5Q8D6mNQnTdpDvBBcoeSsJf8R2yungNGN9BPlL5n4cKDilSuC3MhfqqiR9D9jCdP2Cs6v6fIZFgo0VFKp+HzkiBJdjm3btIzcqusfjNjVgIWYihtNsJa9VdugZgsdkZlWJ+kPBYa7weV3v9LlU0N8ekMxVujycjD1kM50elVmYMuLY4oFrU/Nx/hhByw07ZMIzeq9zksfGt1zWyDe4QLFGljrf1oZ0j/HEGlnB2wperoTRmtCK58GRfO1i7NYukGhn9KKOv8Qz/C+eqAvR3GrPxSOrJH0nMzst7njWHk7pynnN6a07OleQaPVrWQI4CifnBBGnzR0kR+2jpt4A0myu9UElxT9N5tQWuG0deCTzrnLKtb7Qb0dDvsQmTcK0HSReH5zvSt8n4d32URC9s/H6CLJM5lrB4bhptcC42cXXcVHcMGNoxvQ9pvJ7V/rESuHzMj3Kpqeq5apWsFLZNJl52Lc9G2JwoZInK2LvTDDBh8pmrU4/HrarjlQZ2a9K1HLT7O6SVAat3WJVJqTC+NiWQ2gFdylVeaLHXAWv6/JRsj4CEfOu/ceoiYWK0xQtnQDkBsE97QFhQDBXqUb9qc/egsXYq47YH/GpkK7jqmvKIwXykQLEZu0CiXZW4tpRheV4czXsuRqeaHKdp+E5hNYaWfFi5roE05sW6OM5QeQOEg0MyCwVUijVuzdc7z3SCoGNzpFraDUqohX9NoA0mzS2wgvVczTlkdo3Vq2W2Mh8Td1Y9VmQ49G1EfnVfRYrjiotrf7f5Le6PU6RpVQjJnjrto18wxIvZ8e1yUHikD7nCunzivhZxpS+TGjiCcR68d+43VZ6zEr3/FMEaUJFu4Y25pF2qWnCzn/UnaRCFNq3ZQAAAABJRU5ErkJggg=="
                                x="-25" y="-25" width="50" height="50"></image>
                        </g>
                    </svg>
                    <h4>Giao hàng nhanh chóng</h4>
                    <p>Từ nhiều năm nay chúng tôi vẫn tiếp tục nghiên cứu, phát triển và ứng dụng những cái mới để mang
                        đến</p>
                </div>
                <div class="col-md-3 criteria-option">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        width="200" height="200" viewBox="0 0 200 200" xml:space="preserve">
                        <g transform="matrix(1 0 0 1 99.61 99.68)" id="l-rGmylNm8wurXbvWPUuq">
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
                        <g transform="matrix(1.28 0 0 1.28 100.17 99.68)" id="iaRrn7INByfC6lEi_gqib">
                            <image
                                style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                vector-effect="non-scaling-stroke"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAABq9JREFUaEPt2guMXUUZB/DfubvbhVbkZVCLT4zRWDSCUcGgVEGtpikK2IrEQjXu2aJomkajCUYMYjAqKaW2e7fBEkRSheKjaANtxCJVKgVBsVIfbUSKBVRaraXdbu8xM+fc7t27d7d791GajZOc7D1zvm9m/vPN95xNTJCWTBAc/g/kSJPkBJZIWZvE2XibzElx57N4BFfotOlIk0R1Pf0lstQpWlyDC1Dqt+jEPB1uPPKBlL0Yd+D0hotNXKjDqiMfSLerZK4YdKGZD+l025EPpGwrXjkRgDyD4yYCkKfxgokPJHG+kvV6fUKiIpGpFH9zA53FTajvC++hhe+Br0pTivx5X94f3qo0gasi0NT399GEkfbosD4fvtrKhpZI4jwVOyU54xHS9kkd1TyQzJO4bwgQvegpNqjWRzX6Xd/XiKa/Lxs48TNSJ4w9kMx1TrDQDlOUtJmsZL/WeEhKWuJzoOa9RateLZK6J/SFVjIFV+G0QTZvhzT6vyaP1qElsg63Y3+hF/nZz/Uk14Vwxqu/w3tVTzIH+n0PY5RMwpUybxkEyN+lpo4HkJGoTgCWg8v/Vp8DaCuewcbdLvWS5wLIowgLnDYSxA14Hpd66eEFkrlTuw+YZ69yjNnOHwMwj0m9/PABydxoj8s8zwwVx9jhZlMtkrm8CTBPSyyRuRCvL/j+KvWKwwXk61Kf022WzEq0y1yi0826fFnii/2MzuDINupwpuWWynQWZNukThlvIMFyfUHqm7pdKrOM3Hkh+JuFUouVpVhU860xlMwDDpiuzbdk5hZEW6VeNZ5A/inzcZ1+pOxaLBhko5dIXa7bTJkbKDLSxsT3YzqW4yMFyZ+lXj1eQLZIzHKcv/iXWyRmD6kHiZ9q8WE9TlSyGqc2pM/cp8d0k9xUM+YfpV4zHkDu1WqOvSpafQ/vGKYyb8Rs++zUHh3qOQ34fllIJOhZ1eJtkXrt2ALJ3KFirsTJSjGTjDvVRNsqM8cBj2qNtYFQN+hrmV9InW25H8icV3z4g9TrxhLICr0+rdWbcQte1ASAWtJ/4GJH22Cvb9RYpxBM/VyHd+qyWmJmwbRZmjvX5sL4gbFWsD5Xm+Qa+y2Q+eoIAfRnS3xFm6v1+CzRPLfJ/Eync5StwYyC4RFp7lNGA2SfxKU6rFQ2OTq3PCjcJRlhKTZPmkK63RpNcmpP4X9uE45WDmQtzi2A/E7qDaMF8mw80yFLC5Ka7xE3mKrHC7XGeGokrU1FMKm7LHeGiqNl2iV+jHukztXtblk0w6E9LPXG0QIJ/CGJCscrWJS5MiskzhoJgoInyPJ6HT6v7G84nhjKhyh4jdT7dblH4u0F/UPSPFcZzdGqtSh36nWxtqjo7xkFkMAajtQC5ZiN5iXbvP1EaqayDbGcm7cHpd40dkDCbu33UW2+g/eNCkjiWh0WKttOnjQVbbXULOWYar+16NskjZayKYkEfdgm8+sGCz0cQH4o9UFdNklyKeB+aZ491h6tWlH+CU/K9By0QIkrZPbigSaBhIxvV4MIN/QfQ5GfVwcdXCK3S12g7DfkCo6NUmfUAwnR6mZ8TcU68z01YMFdLpL4boNFDSWRK6Mzq0TD0NdC4aESTeeSfv2DA7lVarayh8lNrhB/dTqzHsgqbTrttNuUGFqfJfH8gwW3YOGTOECsWtS1wYFkpum0WZc5SgfBtOuxVmKfVv8ZJpCVUhcp+z15WIJfSXPF738/ssx0JTeR58FNtKGBBPOZeKgoLOTzhuRqslWetXuYQFZIfawfkMQGHbm57wPSbZoses1GO34oTMMF0jdOEv1OyN3/O0wgd8mEYxqi35cVRyt4+xhh1yr7tzHvUCse5PvhABJ0LBiNE2tu09ZLcy9fC6TebjeDaY02l9jvVuL9Y1+rxKCuTcmDdTs/T+b7AyTCYqnPNPAjjdZzt9S76oH8uzCHzQDIaUMuEu4YE4tl0YoE0xrqtq2SOFEeveZFuLB5IX5KI58YioS+QB/6rytClMdx8pCLqUbEdRJ5bARKns+TWOsJM5zk2BgfhWWHem+o815mS4xpu50qlEVL0fodpccWn7TbMqdpjbR5f8U2821X9sQw9HWd1LvrJXI9PtW8OCLHXknMEJ+KS6rWd/OqYnshid0xzM/vPQJN6A83IOGqInD0xv5KLGiHEk/HIcqlYd67pN7bH0h+NX3vMHZhhFjHhS2PiAf4kbLTZRbVhMnjMvsYDtogRKmOvtTxWsyWxRjm2IPXZWM4+xgN1SLzW52+NFAiYzTDczHMhPmnmv8BLxOUUR/PEpEAAAAASUVORK5CYII="
                                x="-25" y="-25" width="50" height="50"></image>
                        </g>
                    </svg>
                    <h4>Giá cả hợp lý</h4>
                    <p>Từ nhiều năm nay chúng tôi vẫn tiếp tục nghiên cứu, phát triển và ứng dụng những cái mới để mang
                        đến</p>

                </div>
                <div class="col-md-3 criteria-option">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        width="200" height="200" viewBox="0 0 200 200" xml:space="preserve">
                        <g transform="matrix(1 0 0 1 102.03 99.68)" id="l-rGmylNm8wurXbvWPUuq">
                            <path
                                style="stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
                                vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                                d="M -99.72479 0 L 0.07492999999999483 99.64986 L 99.72479 0 L 0.07492999999999483 -99.64986 z"
                                stroke-linecap="round" />
                        </g>
                        <g transform="matrix(1 0 0 1 102.59 100.34)" id="exPVaVJBm86_twJTfRsln">
                            <path
                                style="stroke: rgb(35,93,172); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-opacity: 0; fill-rule: nonzero; opacity: 1;"
                                vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                                d="M -0.22984 -91.58249 L -92.08753999999999 -0.33670000000000755 L -0.22983999999999583 91.58248999999999 L 92.08754 -0.33670000000000755 z"
                                stroke-linecap="round" />
                        </g>
                        <g transform="matrix(1.26 0 0 1.26 102.03 98.05)" id="_0FFlKuJK82RHuZbwEHWB">
                            <image
                                style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                vector-effect="non-scaling-stroke"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAABWdJREFUaEPt2l2MnUUZB/DfnO220hKhFAyVm5rghULQGBMIiZBI4MYoAZVWKSEt9pxlSeUjUT7aQin4EeWGLznnUJFIMYIQMCQmXDQkYgpEwCtFNBBISCA1WhIobYE9Q2bOu9tl2bPnfXfPlpX0udrsPu8z85//zPPM/J8NPiEWPiE4HAay0JicPSNR0HYbLsF+xAGCS/NaLNpoxG/KxJ09kJaf4WrmcXsGl6n71fwBabkZmyYN8C/B0zo+VWbQnj41+0Un4vTCZ1TDXWViVmek5Tr8ZErw2zRcXmbAvj4t38WD8wuk7XLRz5lY+TEMCW5X98O+kyzj0PQdwR/mD0gXxC8xjN3kM5JYWDVQIPPKSMvF+HVe/ZShgrWiv+MJHP//AaTpe4K7sQzv40oNd2j6quBPOG7hA2lbI9pegHgHP9ZwZ96/bV8WPY7PLGwgTWcJHsMRxcHbpGO7jiVqOoacItqBYxYukC6Ih3D0RKKJnhMswVIcIP+8CrWFCaRtVLQNK8pky8KnpWGkgn9v14FlrZaHcX4x0t9E/xYsmmGSCfAOjXyW5m4DBHI/vp9nFKxTd+/cZ1chwrwAofRdp8JUZ3Y9DGTq+rQc3FqHGZnDRju8tcpurZZhBxzhaOnqPjh705D/ecfWfI9j3hlp+3ZRKDuDQ5Ej1UQ3GMk3iUMApOVSyr2fZwF0Y75RHxIgbevF/CZ5e4CCQ3pqLxWtn1BL5n1r3WGFRT6nZp+xASkn6boZLdHxklF7MiNNqwW/L1g9yFQfmj8qPnzcdaTp81gnWKFmhw2eLLNVywP5rWX25Rvxe2UCz+jTyZwemx8A9fxk7loS/bZbJRoW7bfYbuuy+NfXygPpUp4Eh0Gk3+5tOrhK3SPaTtKxQXBG8XxI+lhKx3sEL4jut9xjLug9dnkgg81aSYVZo+Yfok1ifsskdaaXJa526bjCiGencyoPpGmtkN/rb80yayVtOD2bd6tZ7V27DXlEcFrffXPQ4U1BQ31CwJv4S3kgLUeJThAcyJJcVRvLIvewjrfUcoZKCsyZVcNgr+hcI3ZO/rY8kFmM2POTpjsFoxVCpnOZttSpxTcvGvY16/1nPMahB9L0JcFf+5yJD2OMtnjDT63M1T/dMFKG22Iki+lF3pi6LL3qSNu3RJtzWqxqNUtEr3ndap91nejG0iGCG2xwUy6dDxqyx58Ltf5ZY9Ya9WI3AZYFMves9ZSG07WyqHdOSSCbNSYp/00bixKQVM99gpvUc0moAKSpLmgV+b3qYU+a8V2Wu8Iez+HkAshrWY5NnSmOnQLuRg1bJ343XTsjuteIddWA3OM47zox37Wq21JjXrVI0MnCd2rmvCy4SN0ubeeJucV2VBE6SbNJ+e9a09UFEx9ewCQi1nM/pQIj1Sf/0S+2O8aYv+AL2Knu7Lz3k3V15lszc+NMpDJ4ty09z9SsGBkEkO7EHhedXYS7LzdTG8X9reUr9nrBVQXrbdfPkBj2YpuGX/RnJLhE3T2DwDBpm2zOh/Sgpe7UhRNgxn/fBZHOSK/z+IyONS71Sn8g0S1iboMtNTTH9nPHYmP+abEjdTw/qX2XpvpHw9bkm+5Wi6zMQK/ps4DXauQ2YLZ+6XegZGCX153peNsE104Jfp+9Gpa5cppm69R5PO9933CZN3oDaXpAcMGgEUzESwUuMR08OumsjP85MXVS0bLoNYXUwv66EU9NdpiOkVSsUrD0gBrkfzN0RJ8WvJ27Xi0rkQ77WRUW7b/4gYZHp35TtbBVGLOEa6pN7/lRnhzLZ/wi1YzEZMMz0/l9vEDGZ9T0xWI7f5PMVHohphtvYuBp/M5yO6u9EEss5EJ0+QAcDuVCw3WIewAAAABJRU5ErkJggg=="
                                x="-25" y="-25" width="50" height="50"></image>
                        </g>
                    </svg>
                    <h4>Sản phẩm chất lượng</h4>
                    <p>Từ nhiều năm nay chúng tôi vẫn tiếp tục nghiên cứu, phát triển và ứng dụng những cái mới để mang
                        đến</p>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="video-clip">
            <h1 class="product-new">Video Clip</h1>
            <p class="sk-fml">Góc chia sẽ cẩm nang về thiết bị y tế chúng tôi gữi đến các bạn</p>
            <p style="text-align: center; margin-top: 0;"><img src="{{asset('site/images/border-xoan.jpg')}}" alt=""></p>
            <div class="row video-clip-blocks">
                <div class="col-md-4">
                    <a class="video text-decoration-none" data-fancybox="video"
                        data-src="https://www.youtube.com/watch?v=8N-yMfTtiS4" title="Hướng dẫn lái xe số tự động | XEHAY">
                        <p class="pic-video scale-img"><img
                                onerror="this.src='thumbs/480x360x2/assets/images/noimage.png';"
                                src="https://img.youtube.com/vi/8N-yMfTtiS4/0.jpg"
                                alt="Hướng dẫn lái xe số tự động | XEHAY"></p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="video text-decoration-none" data-fancybox="video"
                        data-src="https://www.youtube.com/watch?v=8N-yMfTtiS4" title="Hướng dẫn lái xe số tự động | XEHAY">
                        <p class="pic-video scale-img"><img
                                onerror="this.src='thumbs/480x360x2/assets/images/noimage.png';"
                                src="https://img.youtube.com/vi/8N-yMfTtiS4/0.jpg"
                                alt="Hướng dẫn lái xe số tự động | XEHAY"></p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="video text-decoration-none" data-fancybox="video"
                        data-src="https://www.youtube.com/watch?v=8N-yMfTtiS4" title="Hướng dẫn lái xe số tự động | XEHAY">
                        <p class="pic-video scale-img"><img
                                onerror="this.src='thumbs/480x360x2/assets/images/noimage.png';"
                                src="https://img.youtube.com/vi/8N-yMfTtiS4/0.jpg"
                                alt="Hướng dẫn lái xe số tự động | XEHAY"></p>
                    </a>
                </div>
            </div>
        </div>
        <div class="news-events">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="news-events-title">tin tức & sự kiện</h2>
                    <img src="{{asset('site/images/border.jpg')}}" alt="">
                    <div class="border-content">
                        <div class="text-news">
                            <h4 class="title-news">
                                Cung cấp các sản phẩm thiết bị y tế
                            </h4>
                            <p class="des-news">
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece
                                of classical Latin literature from 45 BC, making it over 2000 years old.
                            </p>
                        </div>
                        <div class="img-news">
                            <img src="{{asset('site/images/tinh-nang-an-toan-cua-cuon-5694.png')}}" alt="">
                        </div>
                    </div>
                    <div class="border-content">
                        <div class="text-news">
                            <h4 class="title-news">
                                Cung cấp các sản phẩm thiết bị y tế
                            </h4>
                            <p class="des-news">
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece
                                of classical Latin literature from 45 BC, making it over 2000 years old.
                            </p>
                        </div>
                        <div class="img-news">
                            <img src="{{asset('site/images/tinh-nang-an-toan-cua-cuon-5694.png')}}" alt="">
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <h2 class="news-events-title">Ý kiến khách hàng</h2>
                    <img src="{{asset('site/images/border.jpg')}}" alt="">
                    <div class="customer-avt">
                        <img src="{{asset('site/images/Untitled-3.png')}}" alt="">
                        <p class="customer-review">Shop luôn nắm bắt sở thích của khách hàng, các mẫu thiết bị có chất
                            lượng cao giúp chúng tôi tự tin sử dụng sản phẩm.</p>
                        <blockquote>
                            <p class="name-customer">Anh: Nguyễn Ngọc Trường</p>
                            <p class="address">Tăng Nhơn Phú B, TP. Thủ Đức.</p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blocks-contact">
        <div class="container">
            <div class="row color-p">
                <div class="col-md-4  contact-padding">
                    <div class="contact-us">
                        <img src="{{asset('site/images/fb.png')}}" alt="">
                        <p class="name-contact">Fanpage Thiết Bị Văn Minh</p>
                    </div>
                    <p class="favourite">Like để cập nhật những hoạt động mới nhất</p>
                    <a href="" class="link-contact">Tham Gia ngay</a>
                </div>
                <div class="col-md-4  contact-padding">
                    <div class="contact-us">
                        <img src="{{asset('site/images/yt.png')}}" alt="">
                        <p class="name-contact">Fanpage Thiết Bị Văn Minh</p>
                    </div>
                    <p class="favourite">Like để cập nhật những hoạt động mới nhất</p>
                    <a href="" class="link-contact">Tham Gia ngay</a>
                </div>
                <div class="col-md-4  contact-padding">
                    <div class="contact-us">
                        <img src="{{asset('site/images/zalo.png')}}" alt="">
                        <p class="name-contact">Fanpage Thiết Bị Văn Minh</p>
                    </div>
                    <p class="favourite">Like để cập nhật những hoạt động mới nhất</p>
                    <a href="" class="link-contact">Tham Gia ngay</a>
                </div>
            </div>
        </div>
    </div>
@endsection
 