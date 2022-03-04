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
                <h2><span class="title">{{ $page->title }}</span></h2>
                <div id="main-content" class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        {!! $page->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="map">
        <div class="container">
            {!! $settings['MAP_IFRAME'] !!}
        </div>
    </div> --}}
@endsection
