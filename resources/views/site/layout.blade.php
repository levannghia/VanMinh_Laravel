@php
use App\Models\Config;
$footer = DB::table('pages')->where('slug','footer')->first();
$favicon = DB::table('photos')->where('type','favicon')->first();
$logo = DB::table('photos')->where('type','logo')->first();
$social_footer = DB::table('photos')->where('status',1)->where('type','social-footer')->get();
$settings = Config::all(['name', 'value'])->keyBy('name')->transform(function ($setting) {
            return $setting->value; // return only the value
        })->toArray();
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$urlLogo = $protocol . $_SERVER['HTTP_HOST'] .'/upload/images/photo/thumb/'.$logo->photo;
@endphp
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="@yield('SEO_keywords')" />
    <meta name="description" content="@yield('SEO_description')" />
    <meta name="theme-color" content="#1E88EC" />
    <meta name="robots" content="index,follow" />
    <link href="/upload/images/photo/thumb/{{$favicon->photo}}" rel="shortcut icon" type="image/x-icon" />
    <meta name="google-site-verification" content="Rtlj-iT3T9o_064yPWlrvfl93FnpLG1uR6oEZFMl_KI" />
    <meta name="geo.region" content="VN" />
    <meta name="geo.placename" content="" />
    <meta name="geo.position" content="{{$settings['MAP_TOA_DO']}}"/>
    <meta name="ICBM" content="{{$settings['MAP_TOA_DO']}}"/>
    <meta name='revisit-after' content='1 days' />
    <meta name="author" content="{{$settings['TITLE']}}" />
    <meta name="copyright" content="{{$settings['TITLE']}} - [{{$settings['EMAIL']}}]" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="{{$settings['TITLE']}}" />
    <meta property="og:title" content="@yield('SEO_title')" />
    <meta property="og:description" content="@yield('SEO_description')" />
    <meta property="og:url" content="{{$url}}" />
    <meta property="og:image" content="{{$urlLogo}}" />
    <meta property="og:image:alt" content="@yield('SEO_title')" />
    <meta property="og:image:type" content="@yield('mimeType')" />
    <meta property="og:image:width" content="@yield('width')" />
    <meta property="og:image:height" content="@yield('height')" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="{{$settings['EMAIL']}}" />
    <meta name="twitter:creator" content="{{$settings['TITLE']}}" />
    <meta property="og:url" content="{{$url}}" />
    <meta property="og:title" content="@yield('SEO_title')" />
    <meta property="og:description" content="@yield('SEO_description')" />
    <meta property="og:image" content="{{$urlLogo}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="canonical" href="{{$url}}" />
    <!-- Bootstrap CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/v4-shims.min.css">
    <link rel="stylesheet" href="{{ asset('site/css/style.css?v-'.time()) }}">
    <title>@yield('SEO_title')</title>
    {!! $settings['ANALYTICS'] !!}
    {!! $settings['WEB_MASTER_TOOL'] !!}
    {!! $settings['HEAD_JS'] !!}
</head>

<body>
    {{-- header --}}
    @include('site.inc.header')

    {{-- content --}}
    @yield('content')

    {{-- footer --}}
    @include('site.inc.footer')

    <!-- Scrollable modal -->

    <!-- Optional JavaScript -->
    @include('site.inc.script')
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
   
    @stack('script_site')
</body>

</html>
