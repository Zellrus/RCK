@extends('layouts.main')
@section('content')
    <div  class="container">
        <form action="{{route("product.category.update",$category->id)}}"  method="POST">
            @csrf
            @method('patch')
            <div class="form-group ">
                <label for="name">Название категории:</label>
                <input value ="{{$product->name}}" required type="title" class="form-control" id="title"  placeholder="Введите новое название категории" name ="title">
                @error('title')
                <p class="text-danger">Заполните поле!</p>
                @enderror
            </div>

                <a class="btn btn-dark"  href="{{route("products.index")}}">Назад</a>
                <button type="submit" class="btn btn-primary">Изменить</button>

        </form>
    </div>
@endsection
