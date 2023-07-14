@extends('layouts.main')
@section('content')
    <div  class="container">
        <form action="{{route("post.update",$post->id)}}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="name">Заголовок новости:</label>
                <input value ="{{$post->title}}" required type="title" class="form-control" id="title"  placeholder="Введите заголовок" name ="title">
                @error('title')
                <p class="text-danger">Заполните поле!</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Описание:</label>
                <textarea class="form-control" id="description" rows="3" name="description">{{$post->description}}</textarea>
            </div>

            <div class="form-group">
                <label for="image">Обложка:</label>
                <input  type="file" class="form-control" id="image" placeholder="Изображение" name="image" accept=".jpg, .jpeg, .png, .gif,">
            </div>


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
                <a class="btn btn-dark"  href="{{route("posts.index")}}">Назад</a>
                <button type="submit" class="btn btn-primary">Изменить</button>
            </section>
        </form>
    </div>
@endsection
