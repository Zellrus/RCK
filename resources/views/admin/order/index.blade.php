@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="position-relative">
            <div class="">   <a class="btn btn-dark"  href="{{route("admin.panel")}}">Назад</a>
        </div>
        <ul class = "list-group">
            <div class="row justify-content-end">
                @foreach ($offers as $offer)
                    <li class="list-group-item">


                        <h6 class = "fw-bold"> № {{$offer->id}}. {{$offer->name}}</h6>
                        <h6 class = "fw-norval">Почта: {{$offer->email}}. Номер телефона: {{$offer->number}}</h6>
                        <h6 class = "fw-norval">Продукт: {{\App\Models\Product::find($offer->id_product)->name}} Категория: {{\App\Models\Product::find($offer->id_product)->category->title}}</h6>
                        <h6 class = "fw-norval">Сообщение: {{$offer->message}}</h6>
                        {{--                        <p>{{$post->description}}</p>--}}
                        <div class="col-4">
                            <form action="{{route("offer.delete",$offer->id)}}" method="POST" style="display: inline">
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
