<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!--====== Required meta tags ======-->
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!--====== Title ======-->
  <title>@yield('title','') | {{ config('app.name', 'Kaitoss') }}</title>

  <!--====== Favicon Icon ======-->
  <link rel="shortcut icon" href="../{{ asset('site/images/')}}/favicon.svg" type="image/svg" />

  <!--====== Bootstrap css ======-->
  <link rel="stylesheet" href="{{ asset('site/css/')}}/bootstrap.min.css" />

  <!--====== Line Icons css ======-->
  <link rel="stylesheet" href="{{ asset('site/css/')}}/lineicons.css" />

  <!--====== Tiny Slider css ======-->
  <link rel="stylesheet" href="{{ asset('site/css/')}}/tiny-slider.css" />

  <!--====== gLightBox css ======-->
  <link rel="stylesheet" href="{{ asset('site/css/')}}/glightbox.min.css" />

  <link rel="stylesheet" href="{{ asset('site/')}}/style.css" />
</head>

<body>
    @include('new.site.include.header')
    @include('new.site.include.slider')
    @include('new.site.about')
    @include('new.site.services')
    @include('new.site.blog')
    @include('new.site.contactus')
    @include('new.site.footer')
 






  <a href="#" class="scroll-top btn-hover">
    <i class="lni lni-chevron-up"></i>
  </a>

  <!--====== js ======-->
  <script src="{{ asset('site/js/')}}/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('site/js/')}}/glightbox.min.js"></script>
  <script src="{{ asset('site/js/')}}/main.js"></script>
  <script src="{{ asset('site/js/')}}/tiny-slider.js"></script>

  <script>

    //========= glightbox
    GLightbox({
      'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
      'type': 'video',
      'source': 'youtube', //vimeo, youtube or local
      'width': 900,
      'autoplayVideos': true,
    });

  </script>
</body>

</html>















