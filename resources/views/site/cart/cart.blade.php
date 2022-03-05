@extends('site.layout')

@section('content')

<div class="container">
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
                    <tr>
                        <th scope="row">
                            <input type="text" class="text-qty">
                        </th>
                        <td class="img-cart">
                            <img src="http://hoatuoituanlinh.com/watermark/product/277x277x1/upload/product/hoa-khai-truong-4446.jpg"
                                alt="">
                        </td>
                        <td>sản phẩm hoa 1</td>
                        <td class="price-product-cart"></td>
                        <td>
                            <button type="button" class="btn btn-danger btn-delete">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" id="svg-delete">
                                    <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <input type="text" class="text-qty">
                        </th>
                        <td class="img-cart">
                            <img src="http://hoatuoituanlinh.com/watermark/product/277x277x1/upload/product/hoa-khai-truong-4446.jpg"
                                alt="">
                        </td>
                        <td class="name-product-cart">sản phẩm hoa 1</td>
                        <td class="price-product-cart">1000000đ</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-delete">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" id="svg-delete">
                                    <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="summary col-md-5">
            <dl class="subtotal">
                <dt>Subtotal</dt>
                <dd>$14.99</dd>
                <dt><a href="/taxes">Estimated Taxes & Fees</a></dt>
                <dd>$3.42</dd>
            </dl>
            <dl class="total bg-ani">
                <dt>Total</dt>
                <dd>$18.41</dd>
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

<head>
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0">
</head>

<body class="ux-app">

</body>