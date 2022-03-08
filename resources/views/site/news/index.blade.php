@php
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443 ? 'https://' : 'http://';
$urlPhoto = $protocol . $_SERVER['HTTP_HOST'] . '/public/upload/images/seoPage/thumb/' . $seoPage->photo;
@endphp
@extends('site.layout')
@section('PHOTO', $urlPhoto)
@section('SEO_title', $seoPage->title)
@section('SEO_keywords', $seoPage->keywords)
@if (isset($image->mimeType) && isset($image->width) && isset($image->height))
    @section('mimeType', $image->mimeType)
    @section('width', $image->width)
    @section('height', $image->height)
@endif
@section('SEO_description', $seoPage->description)
@section('content')
    <div class="main-content-contacts">
        <div class="container">
            <div class="main-content-wrapper">
                <h2 class="product-new">TIN TỨC & SỰ KIỆN</h2>
                <p style="text-align: center; margin-top: 0;"><img src="{{ asset('public/site/images/border-xoan.jpg') }}"
                        alt="">
                <div id="main-content" class="row">
                    {{-- <div class="col-md-6"> --}}
                    @foreach ($news as $item)
                        <div class="col-md-6">
                            <a href="/tin-tuc/{{$item->slug}}">
                                <div class="border-content">
                                    <div class="text-news">
                                        <a href="/tin-tuc/{{$item->slug}}">
                                            <h4 class="title-news">
                                                {{ $item->title }}
                                            </h4>
                                        </a>
                                        <p class="des-news">
                                            {{ $item->description }}
                                        </p>
                                    </div>
                                    <div class="img-news">
                                        <img src="public/upload/images/news/thumb/{{ $item->photo }}" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    {{-- </div> --}}
                </div>
                {{ $news->links() }}
            </div>
        </div>
    </div>

@endsection
