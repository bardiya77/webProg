<!DOCTYPE html>
<html class="no-js" lang="fa">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Webprog.ir - @yield('title')</title>

    <!-- Custom styles for this template-->
    <link href="{{ asset('/css/home.css') }}" rel="stylesheet">
    @yield('style')

</head>

<body>
    @include('home.sections.header')
    @include('home.sections.mobile-off-canvas')

    @yield('content')
    
    @include('home.sections.footer')

    <!-- JavaScript-->
    <script src="{{ asset('/js/home/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('/js/home/plugins.js') }}"></script>
    <script src="{{ asset('/js/home.js') }}"></script>

    {{-- @include('sweet::alert') --}}

    @yield('script')

</body>

</html>