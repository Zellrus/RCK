@extends('layouts.main')
@section('content')
    <div class="container">
            <div class="position-relative">
                <div class="">   <a class="btn btn-dark"  href="{{route("admin.panel")}}">Назад</a> <a href="{{route('post.create')}}" class="btn btn-primary">Добавить новость</a></div>
            </div>
        <ul class = "list-group">
            <div class="row justify-content-end">
                @foreach ($posts as $post)
                    <li class="list-group-item">
                        <img src="{{$post->image}}" class="rounded float-start" style="width: 300px; height: 300px;"  alt="...">

                        <h6 class = "fw-bold"> № {{$post->id}}. {{$post->title}}</h6>
{{--                        <p>{{$post->description}}</p>--}}
                        <a class ="btn btn-dark" href ="{{route("post.edit", $post->id)}}">Изменить</a>

                        <div class="col-4">
                            <form action="{{route("post.delete",$post->id)}}" method="POST" style="display: inline">
                                @csrf
                                @method("delete")
                                <input type="submit" class="btn btn-danger" value="Удалить">
                            </form>
                        </div>
                    </li>
                @endforeach
{{--                {{$posts->withQueryString()->links()}} --}}{{--для пагинации--}}
            </div>
        </ul>

    </div>
    </div>
@endsection
