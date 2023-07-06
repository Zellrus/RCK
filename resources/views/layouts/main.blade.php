<!doctype html>
<html style="font-size: 16px;" lang="ru">

<head>
    <title>RCK</title>
</head>


@vite(['resources/sass/app.scss'])


<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="btn" aria-current="page" href="{{route('index')}}">Вернуться на сайт RCK</a>
                    </li>
                    @if (auth()->user() !== null)
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout')}}">Выйти из режима админа</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
<div>
    @yield('content')
</div>
</body>
<style>

</style>
</html>
