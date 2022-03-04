@php
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443 ? 'https://' : 'http://';
$urlPhoto = $protocol . $_SERVER['HTTP_HOST'] . '/upload/images/news/thumb/' . $news->photo;
@endphp
@extends('site.layout')
@section('PHOTO', $urlPhoto)
@section('SEO_title', $news->title)
@section('SEO_keywords', $news->keywords)
@if (isset($image->mimeType) && isset($image->width) && isset($image->height))
    @section('mimeType', $image->mimeType)
    @section('width', $image->width)
    @section('height', $image->height)
@endif
@section('SEO_description', $news->keywords)
@section('content')
    <div class="main-content-contacts" style="padding-top: 40px;">
        <div class="container">
            <div class="main-content-wrapper">
                <h2><span class="title">{{ $news->title }}</span></h2>
                <div id="main-content" class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        {!! $news->content !!}
                    </div>
                </div>
                <div class="share" style="display: flex;">
                    <b>Chia sẻ:</b>
                    <div class="social-plugin w-clear">
                        <div class="addthis_inline_share_toolbox_qj48"
                            data-url="https://thue_tro.test:8443/tin-tuc/bai-viet-4"
                            data-title="{{$news->title}}">
                            <div id="atstbx3"
                                class="at-share-tbx-element at-share-tbx-native addthis_default_style addthis_20x20_style addthis-smartlayers addthis-animated at4-show">
                                <a class="addthis_button_facebook_share at_native_button at300b"
                                    fb:share:layout="button_count">
                                    <div class="fb-share-button fb_iframe_widget" data-layout="button_count"
                                        data-href="https://thue_tro.test:8443/tin-tuc/bai-viet-4"
                                        style="height: 25px;" fb-xfbml-state="rendered"
                                        fb-iframe-plugin-query="app_id=&amp;container_width=0&amp;href=http%3A%2F%2Fxedulichthanhha.com%2Fdich-vu-thue-xe-du-xuan-soi-dong-tro-lai-gia-on-dinh&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey">
                                        <span style="vertical-align: bottom; width: 86px; height: 20px;"><iframe
                                                name="f1f0b5734e24994" width="1000px" height="1000px"
                                                data-testid="fb:share_button Facebook Social Plugin"
                                                title="fb:share_button Facebook Social Plugin" frameborder="0"
                                                allowtransparency="true" allowfullscreen="true" scrolling="no"
                                                allow="encrypted-media"
                                                src="https://www.facebook.com/v13.0/plugins/share_button.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df1d11868b3a14%26domain%3Dxedulichthanhha.com%26is_canvas%3Dfalse%26origin%3Dhttp%253A%252F%252Fxedulichthanhha.com%252Ff31844889e8b27%26relation%3Dparent.parent&amp;container_width=0&amp;href=http%3A%2F%2Fxedulichthanhha.com%2Fdich-vu-thue-xe-du-xuan-soi-dong-tro-lai-gia-on-dinh&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey"
                                                style="border: none; visibility: visible; width: 86px; height: 20px;"
                                                class=""></iframe></span></div>
                                </a><a class="addthis_button_facebook_like at_native_button at300b"
                                    fb:like:layout="button_count">
                                    <div class="fb-like fb_iframe_widget" data-layout="button_count" data-show_faces="false"
                                        data-share="false" data-action="like" data-width="90" data-height="25"
                                        data-font="arial"
                                        data-href="https://thue_tro.test:8443/tin-tuc/bai-viet-4"
                                        data-send="false" style="height: 25px;" fb-xfbml-state="rendered"
                                        fb-iframe-plugin-query="action=like&amp;app_id=&amp;container_width=4&amp;font=arial&amp;height=25&amp;href=https://thue_tro.test:8443/tin-tuc/bai-viet-4&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;send=false&amp;share=false&amp;show_faces=false&amp;width=90">
                                        <span style="vertical-align: bottom; width: 90px; height: 28px;"><iframe
                                                name="f8de55716a6cb4" width="90px" height="25px"
                                                data-testid="fb:like Facebook Social Plugin"
                                                title="fb:like Facebook Social Plugin" frameborder="0"
                                                allowtransparency="true" allowfullscreen="true" scrolling="no"
                                                allow="encrypted-media"
                                                src="https://www.facebook.com/v13.0/plugins/like.php?action=like&amp;app_id=&amp;channel=https://thue_tro.test:8443/tin-tuc/bai-viet-4&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;send=false&amp;share=false&amp;show_faces=false&amp;width=90"
                                                style="border: none; visibility: visible; width: 90px; height: 28px;"
                                                class=""></iframe></span></div>
                                </a><a class="addthis_counter addthis_pill_style at_native_button" href="#"
                                    style="display: inline-block;"><a class="atc_s addthis_button_compact"><span></span></a><a class="addthis_button_expanded" target="_blank"
                                        title="Thêm..." href="#" tabindex="1000"></a></a>
                                <div class="atclear"></div>
                            </div>
                        </div>
                        {{-- <div class="zalo-share-button"
                            data-href="http://xedulichthanhha.com/dich-vu-thue-xe-du-xuan-soi-dong-tro-lai-gia-on-dinh"
                            data-oaid="579745863508352884" data-layout="1" data-color="blue" data-customize="false"
                            style="position: relative; display: inline-block; width: 70px; height: 20px;"><iframe
                                frameborder="0" allowfullscreen="" scrolling="no" width="70px" height="20px"
                                src="https://button-share.zalo.me/share_inline?layout=1&amp;color=blue&amp;customize=false&amp;width=70&amp;height=20&amp;isDesktop=true&amp;d=eyJ1cmwiOiJodHRwOi8veGVkdWxpY2h0aGFuaGhhLmNvbS9kaWNoLXZ1LXRodWUteGUtZHUteHVhbi1zb2ktZG9uZy10cm8tbGFpLWdpYS1vbi1kaW5oIn0%253D"
                                style="position: absolute; z-index: 10; top: 0px; left: 0px;"></iframe></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
