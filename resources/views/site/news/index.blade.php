@php
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$urlPhoto = $protocol . $_SERVER['HTTP_HOST'] .'/upload/images/seoPage/thumb/'.$seoPage->photo;
@endphp
@extends('site.layout')
@section('PHOTO', $urlPhoto)
@section('SEO_title', $seoPage->title)
@section('SEO_keywords', $seoPage->keywords)
@if (isset($image->mimeType)  && isset($image->width) && isset($image->height))
@section('mimeType', $image->mimeType)
@section('width', $image->width)
@section('height', $image->height)
@endif
@section('SEO_description', $seoPage->description)
@section('content')
    <div class="main-content-contacts" style="padding-top: 40px;">
        <div class="container">
            <div class="main-content-wrapper">
                <h2><span class="title">TIN TỨC</span></h2>
                <div id="main-content" class="row">
                    @foreach ($news as $item)
                    <a href="">
                        <div class="col-md-8">
                            <div class="card" style="width: 18rem;">
                                <img src="/upload/images/news/thumb/{{ $item->photo }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                              </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
@endsection

