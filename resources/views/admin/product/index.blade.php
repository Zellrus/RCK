@extends('layouts.main')
@section('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Кнопка-триггер модального окна -->


    <!-- Модальное окно -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Категории продукции</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <a class ="btn btn-dark" href ="{{route("product.category.create")}}">Добавить категорию</a>
                    <ul class = "list-group">
                        <div class="row justify-content-end">
                            @foreach ($categories as $category)
                                <li class="list-group-item">


                                    <h6 class = "fw-bold"> № {{$category->id}}. {{$category->title}}</h6>
                                    {{--       <p>{{$post->description}}</p>--}}
                                    @if(  !($category->title == "no_category"))
                                    <a class ="btn btn-dark" href ="{{route("product.category.edit", $category->id)}}">Изменить</a>


                                        <form action="{{route("product.category.delete",$category->id)}}" method="POST" style="display: inline">
                                            @csrf
                                            @method("delete")
                                            <input type="submit" class="btn btn-danger" value="Удалить">
                                        </form>
                                    @endif
                                </li>
                            @endforeach
                            {{--                {{$posts->withQueryString()->links()}} --}}{{--для пагинации--}}
                        </div>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-primary">Понял</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
            <div class="position-relative">
                <div class="">   <a class="btn btn-dark"  href="{{route("admin.panel")}}">Назад</a> <a href="{{route('product.create')}}" class="btn btn-primary">Добавить продукт</a>    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Категории продукции</button></div>
            </div>

        <ul class = "list-group">
            <div class="row justify-content-end">
                @foreach ($products as $product)
                    <li class="list-group-item">
                        <img src="{{$product->image}}" class="rounded float-start" style="width: 300px; height: 300px;"  alt="...">

                        <h6 class = "fw-bold"> № {{$product->id}}. {{$product->name}}</h6>
                        <p class="fs-6">Категория: {{$categories->find(($product->category_id))->title}}</p>
{{--                        <p>{{$post->description}}</p>--}}

                        <a class ="btn btn-dark" href ="{{route("product.edit", $product->id)}}">Изменить</a>
                        <div class="col-4">
                            <form action="{{route("product.delete",$product->id)}}" method="POST" style="display: inline">
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
