@php
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$urlPhoto = $protocol . $_SERVER['HTTP_HOST'] .'/public/upload/images/seoPage/thumb/'.$seoPage->photo;
@endphp
@extends('site.layout')
@section('SEO_title', $seoPage->title)
@section('SEO_keywords', $seoPage->keywords)
@if (isset($image->mimeType)  && isset($image->width) && isset($image->height))
@section('mimeType', $image->mimeType)
@section('width', $image->width)
@section('height', $image->height)
@endif
@section('SEO_description', $seoPage->description)
@section('content')
    <div class="content">
        <div class="container">
            <!-- Banner - menu -->

            {{-- silder --}}
          
            <!-- content -->
            <h1 class="product-new">MUA BÁN NHÀ ĐẤT</h1>
            <p style="text-align: center; margin-top: 0;"><img src="{{ asset('public/site/images/border-xoan.jpg') }}" alt="">
            </p>
            <div class="row">
                @foreach ($nhaDat as $item)
    <div class="col-md-3 real-estate">
        <div class="cover">
            <a href="/mua-ban-nha-dat/{{$item->slug}}"><img src="public/upload/images/nhaDat/thumb/{{ $item->photo }}" alt="" class="img-padding"></a>
            <div class="cover-bottom">
                <a href="/mua-ban-nha-dat/{{$item->slug}}"><h6>{{ $item->name }}</h6></a>
                <div class="info">
                    <?xml version="1.0" encoding="iso-8859-1"?>
                    
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
            {{$nhaDat->links()}}

        </div>
    </div>
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
$(document).ready(function() {

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