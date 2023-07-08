<!doctype html>
<html style="font-size: 16px;" lang="ru">

<head>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
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
