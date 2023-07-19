@extends('layouts.main')
@section('content')
    <div  class="container">
        <form action="{{route("product.update",$product->id)}}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('patch')
            <div class="form-group ">
                <label for="name">Название продукта:</label>
                <input value ="{{$product->name}}" required type="name" class="form-control" id="name"  placeholder="Введите название продукта" name ="name">
                @error('title')
                <p class="text-danger">Заполните поле!</p>
                @enderror
            </div>
            <div class="form-check form-switch" style="margin: 10px">
                <input class="form-check-input" type="checkbox" id="in_stock" name = "in_stock" {{$product->in_stock == 1 ? "checked" : ''}}>
                <label class="form-check-label" for="in_stock">На складе</label>
            </div>

            <div class="form-group">
                <label for="image">Обложка:</label>
                <input  type="file" class="form-control" id="image" placeholder="Изображение" name="image" accept=".jpg, .jpeg, .png, .gif,">
            </div>
            <label for="category_id">Категория:</label>
            <select name="category_id" class="form-select" aria-label="Выбор категории">

                @foreach($categories as $category){
                @if ($product->category !== null)
                <option
                    {{$category->id == $product->category->id ? 'selected' : ""}}
                    value={{$category->id}}>{{$category->title}}</option>
                }
                @else
                    <option value={{$category->id}}>{{$category->title}}</option>
                @endif
                @endforeach

            </select>

            <section class="post-create" style="width: 100%; height: 100px; margin: 40px auto;">
                <label for="summernote">Контент:</label>
                <textarea id="summernote" name="content">{{$content}}</textarea>
                {{--    <button onclick="PasteCode()" class="btn btn-primary"> Change Style </button>--}}


                <script>
                    $('#summernote').summernote({
                        placeholder: '',
                        tabsize: 2,
                        height: 500,
                        toolbar: [
                            ['style', ['style']],
                            ['font', ['bold', 'underline', 'clear']],
                            ['color', ['color']],
                            ['para', ['ul', 'ol', 'paragraph']],
                            ['table', ['table']],
                            ['insert', ['link', 'picture', 'video']],
                            ['view', ['fullscreen', 'codeview', 'help']]
                        ]
                    });

                </script>
                <a class="btn btn-dark"  href="{{route("products.index")}}">Назад</a>
                <button type="submit" class="btn btn-primary">Изменить</button>
            </section>
        </form>
    </div>
@endsection
