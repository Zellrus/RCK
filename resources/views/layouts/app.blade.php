<!doctype html>
<html style="font-size: 16px;" lang="ru">

<head>
    <title>RCK</title>

{{--    <script class="u-script" type="text/javascript" src="../test/jquery.js" defer=""></script>--}}
{{-- <script class="u-script" type="text/javascript" src="../../../bootstrap/bs-init.js" ></script>--}}
@vite(['resources/sass/app.scss', 'resources/js/app.js'])

{{--    <body  class="u-body u-xxl-mode" data-locales="en">--}}
<body>
    <div id="app">
        @yield('content')
    </div>
    </body>
</html>

