@if(env('APP_ENV') == 'production')
    <link rel="stylesheet" href="{{ asset('css/concat.min.css')  }}">
@else
    <link rel="stylesheet" href="{{ asset('css/concat.css')  }}">
@endif

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

<link rel="preload" href="{{ asset('fonts/icons/fonts/icomoon.woff?h2436g') }}" as="font" type="font/woff" crossorigin>
<link rel="preload" href="{{ asset('fonts/icons/fonts/icomoon.ttf?h2436g') }}" as="font" type="font/ttf" crossorigin>
