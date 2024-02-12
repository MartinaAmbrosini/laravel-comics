@extends('layouts.main-layout')
@section('head')
<title>Home</title>
@endsection
@section('content')

<main>
    <div class="container">
        @foreach ($comics as $comic)
        <a href="#">
            <div class="thumb">
                <div class="img-thumb-container">
                    <img src="{{$comic['thumb']}}">
                </div>
                <div class="thumb-title">
                    {{$comic['title']}}
                </div>
            </div>
        </a>
        @endforeach
        <a href="#" class="button">LOAD MORE</a>
    </div>
</main>

@endsection