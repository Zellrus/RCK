@extends('layouts.main')
@section('content')
<div class="container">
    <a class="btn btn-dark">Добавить пост</a>

    <button type="button" class="btn btn-primary position-relative">
        Заявки
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
   2
    <span class="visually-hidden">unread messages</span>
  </span>
    </button>

</div>
@endsection
