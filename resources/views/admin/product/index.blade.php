@extends('layouts.main')
@section('content')
    <div class="container">
            <div class="position-relative">
                <div class="">   <a class="btn btn-dark"  href="{{route("admin.panel")}}">Назад</a> <a href="{{route('product.create')}}" class="btn btn-primary">Добавить продукт</a></div>
            </div>
        <ul class = "list-group">
            <div class="row justify-content-end">
                @foreach ($products as $product)
                    <li class="list-group-item">
                        <img src="{{$product->image}}" class="rounded float-start" style="width: 300px"  alt="...">

                        <h6 class = "fw-bold"> № {{$product->id}}. {{$product->name}}</h6>
{{--                        <p>{{$post->description}}</p>--}}

                        <div class="col-4">
{{--                            <a class ="btn btn-dark" href ="{{route("product.show", $product->id)}}">Изменить</a>--}}
                        </div>
                    </li>
                @endforeach
{{--                {{$posts->withQueryString()->links()}} --}}{{--для пагинации--}}
            </div>
        </ul>

    </div>
    </div>
@endsection
