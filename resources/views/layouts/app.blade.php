@if (auth()->user() !== null)
    <div class="container" style="position: static; width: 100%; display:flex;">
        <div class="btn-group" role="group" aria-label="Basic example" style="margin:0px auto">
            <a class="btn"  href="{{route('admin.panel')}}">Админ панель</a>
            @if (auth()->user() !== null)
                <a class="btn"  href="{{route('logout')}}">Выйти из режима админа</a>

            @endif
        </div>
    </div>
@endif
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
<script>
</script>
</html>

