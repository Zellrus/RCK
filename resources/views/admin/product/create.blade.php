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
            <div class="form-check form-switch" style="margin: 10px">
                <input class="form-check-input" type="checkbox" id="in_stock" name = "in_stock">
                <label class="form-check-label" for="in_stock">На складе</label>
            </div>

            <div class="form-group">
                <label for="image">Обложка:</label>
                <input required value ="{{old('image')}}" type="file" class="form-control" id="image" placeholder="Изображение" name="image" accept=".jpg, .jpeg, .png, .gif,">
            </div>
            <label for="image">Категория:</label>
            <select name="category_id" class="form-select" aria-label="Выбор категории">

                @foreach($categories as $category)
                <option value={{$category->id}}>{{$category->title}}</option>
                @endforeach

            </select>

            <section class="post-create" style="width: 100%; height: 100px; margin: 40px auto;">
                <label for="summernote">Контент:</label>
                <textarea id="summernote" name="content">{{old('content')}}</textarea>
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
                <button type="submit" class="btn btn-primary">Добавить</button>
            </section>
        </form>
    </div>
@endsection
