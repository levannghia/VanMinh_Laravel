@php
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443 ? 'https://' : 'http://';
$urlPhoto = $protocol . $_SERVER['HTTP_HOST'] . '/upload/images/seoPage/thumb/' . $seoPage->photo;
@endphp
@extends('site.layout')
@section('PHOTO', $urlPhoto)
@section('SEO_title', 'Giỏ hàng')
@section('SEO_keywords', $seoPage->keywords)
@if (isset($image->mimeType) && isset($image->width) && isset($image->height))
    @section('mimeType', $image->mimeType)
    @section('width', $image->width)
    @section('height', $image->height)
@endif
@section('SEO_description', $seoPage->description)
@section('content')

    <div class="container">
        <h1 class="product-new">GIỎ HÀNG</h1>
        <p style="text-align: center; margin-top: 0;"><img src="{{ asset('site/images/border-xoan.jpg') }}" alt="">
        <div class="row">
            <div class="col-md-7">
                <table class="table tab-cart">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Giá</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (Cart::content() as $item)
                            <tr>
                                <th scope="row">
                                    <input type="text" data-id="cart-qty-{{ $item->id }}" row-id="{{$item->rowId}}" class="text-qty"
                                        value="{{ $item->qty }}" required>
                                </th>
                                <td class="img-cart">
                                    <img src="/upload/images/product/thumb/{{ $item->options->image }}" alt="">
                                </td>
                                <td>{{ $item->name }}</td>
                                @if ($item->price != 0)
                                    <td class="price-product-cart">{{ $item->price }}</td>
                                @else
                                    <td class="price-product-cart">Liên hệ</td>
                                @endif
                                <td>
                                    <a onclick="return confirm('Bạn muốn xóa sản phẩm này ra khỏi giỏ hàng?')" type="button"
                                        class="btn btn-danger btn-delete" href="/delete-cart/{{ $item->rowId }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" id="svg-delete">
                                            <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="summary col-md-5">
                <dl class="subtotal">
                    <dt>Subtotal</dt>
                    <dd>{{ Cart::subtotal() }} đ</dd>
                    <dt><a href="/taxes">Estimated Taxes & Fees</a></dt>
                    <dd>0 đ</dd>
                </dl>
                <dl class="total bg-ani">
                    <dt>Total</dt>
                    <dd>{{ Cart::subtotal() }} đ</dd>
                </dl>
                <div class="payment">
                    <a href="payment/add">Add</a>
                    <h4 class="headline-primary">Check out</h3>
                        <div class="ux-card">
                            <a href="/payment/{id}"><img src="https://img1.wsimg.com/fos/react/sprite.svg#visa" height="32"
                                    width="50" /> John Doe</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script_site')
    <script>
        $(document).ready(function() {
            $('[data-id]').keyup(function() {
                var qty = $(this).val();
                var rowId = $(this).attr("row-id");
                var _token = "{{ csrf_token() }}";
                
                if (qty != "") {
                    $.ajax({
                        method: "POST",
                        url: "{{ route('update.cart') }}",
                        data: {
                            rowId: rowId,
                            qty: qty,
                            _token: _token
                        },
                        success: function(data) {
                            swal("Sucessfuly, Thank you!", "Cập nhật giỏ hàng thành công",
                                "success").then((value) => {
                                if (value) {
                                    // location.reload();
                                }
                                if (value == null) {
                                    // location.reload();
                                }
                            });
                        }
                    });
                }
            });
        });
    </script>
@endpush
