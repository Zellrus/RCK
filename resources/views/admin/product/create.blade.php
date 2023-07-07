@extends('layouts.main')
@section('content')
    <div  class="container">
        <form action="{{route("product.store")}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group ">
                <label for="name">Название продукта:</label>
                <input value ="{{old('name')}}" required type="name" class="form-control" id="name" placeholder="Введите название продукта" name ="name">
                @error('title')
                <p class="text-danger">Заполните поле!</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Описание продукта: </label>
                <textarea required class="form-control" id="description" placeholder="Description" name = "description">{{old('description')}}</textarea>
                @error('description')
                <p class="text-danger">Заполните поле!</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input required value ="{{old('image')}}" type="file" class="form-control" id="image" placeholder="Изображение" name="image" accept=".jpg, .jpeg .png .gif">
            </div>


            <a class="btn btn-dark"  href="{{route("products.index")}}">Назад</a>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
    </div>
@endsection
