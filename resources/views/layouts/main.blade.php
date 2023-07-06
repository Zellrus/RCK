<!doctype html>
<html style="font-size: 16px;" lang="ru">

<head>
    <title>RCK</title>
</head>


@vite(['resources/sass/app.scss'])


<body>
<div class="container" style="position: static; width: 100%; display:flex;">


            <div class="btn-group" role="group" aria-label="Basic example" style="margin:0px auto">
                        <a class="btn"  href="{{route('index')}}">Вернуться на сайт RCK</a>
                    @if (auth()->user() !== null)
                        <a class="btn"  href="{{route('logout')}}">Выйти из режима админа</a>
                    @endif
            </div>
</div>
<div>
    @yield('content')
</div>
</body>
<style>

</style>
</html>
