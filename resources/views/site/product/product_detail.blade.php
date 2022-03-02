@extends('site.layout')
@section('SEO_title', $product->name)
@section('SEO_keywords', $product->keywords)
@section('mimeType', "image/jpeg")
@section('width', 960)
@section('height', 720)
@section('SEO_description', $seoPage->description)
@section('content')
    <div class="container">
        <div class="main-content">
            <div class="row img-flu ">
                <div class="col-md-4 col-4 bd-img">
                    <img src="/upload/images/product/thumb/{{ $product->photo }}" class="noselect" alt="" id="edit-save">
                    <div class="row img-smalls-blocks">
                        @foreach ($gallery as $item)
                        <div class="col-md-4 img-circle">
                            <img src="/upload/images/gallery/thumb/{{ $item->photo }}" class="img-small" alt="">
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-8">
                    <h1 class="product-name">{{$product->name}}</h1>
                    <p class="product-view">Lượt xem: {{$product->view}}</p>
                    @if ($product->price == NULL)
                    <p class="product-price">Giá: 
                        <a href="tel:{{$settings['PHONE']}}" class="price-product">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-telephone" viewBox="0 0 16 16">
                                <path
                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg>
                        {{$settings['PHONE']}}</a>
                    </p>
                    @else
                    <p class="product-price">Giá: {{number_format($product->price, 0, ',', '.') }} đ</p>
                    <a href="tel:{{$settings['PHONE']}}" class="price-product">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-telephone" viewBox="0 0 16 16">
                            <path
                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                        {{$settings['PHONE']}}</a>
                    @endif
                    
                    <p class="product-des">{!!$product->description!!}</p>
                </div>
            </div>
            <h1 class="similar-products">Sản phẩm cùng loại</h1>
            <p style="text-align: center; margin-top: 0;"><img src="{{ asset('site/images/border-xoan.jpg') }}" alt=""></p>
            <div class="row img-flu similar">
                @foreach ($product_cate as $item)
                <div class="col-md-4 col-6">
                    <a href="{{route('get.product.slug',$item->slug)}}"><img src="/upload/images/product/thumb/{{ $item->photo }}" class="img-small" alt=""></a>
                    <p><a style="color: black;" href="{{route('get.product.slug',$item->slug)}}">{{$item->name}}</a></p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
