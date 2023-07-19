@extends('layouts.main')
@section('content')
    <div  class="container">
        <form action="{{route("product.category.store")}}"  method="POST">
            @csrf
            <div class="form-group ">
                <label for="title">Название продукта:</label>
                <input value ="{{old('title')}}" required type="title" class="form-control" id="title" placeholder="Введите название продукта" name ="title">
                @error('title')
                <p class="text-danger">Заполните поле!</p>
                @enderror
            </div>
                <a class="btn btn-dark"  href="{{route("products.index")}}">Назад</a>
                <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
    </div>
@endsection
