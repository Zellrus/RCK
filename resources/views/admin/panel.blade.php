@extends('layouts.main')
@section('content')
<div class="container">
    <a class="btn btn-dark" href="{{route("posts.index")}}">Новости</a>
    <a class="btn btn-dark" href="{{route('products.index')}}">Продукты</a>
    <a type="button" class="btn btn-primary position-relative" href="{{route('offers.index')}}">
        Заявки
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
   2
    <span class="visually-hidden">unread messages</span>
  </span>
    </a>

</div>
@endsection
