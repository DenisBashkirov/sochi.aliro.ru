<!doctype html>
<html>
<head>
    <meta lang="ru">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Завод окон ALIRO</title>

    @include('frontend.sources.favicons')
    @include('frontend.sources.styles')

</head>

<body>

    @include('frontend.sections.header')
    @yield('content')

    @if(env('APP_ENV') == 'production')
        @include('frontend.sources.services')
    @endif

@include('frontend.sources.scripts')

</body>
</html>
