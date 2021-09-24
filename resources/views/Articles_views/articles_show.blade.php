@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{$article->title}}</h1>
        <img src="{{$article->image}}" alt="article-image">
        <p>{{$article->description}}</p>
        <span>Autore: {{$article->author->name}}-{{$article->author->surname}}</span>
    </div>
@endsection