@extends('layouts.app')

@section('content')
    <div class="container"> 
        <a href="{{route('articles.create')}}"><i class="fas fa-plus"></a></i>
        @foreach($allArticles as $article)

        <a href="{{route('articles.show',$article)}}">
            <div class="container-article">
                <img src="{{$article->image}}" alt="article-image">
                <h2>{{$article->title}}</h2>
                <br>
            </div>
        </a>

        @endforeach


    </div>
@endsection