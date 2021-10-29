@extends('layouts.app')

@section('content')
    <h1>{{ $article->name }}</h1>
    <div>{{ $article->body }}</div>
    <td>
        <a href="{{route('articles.index', $article->id)}}">Назад</a>
    </td>
@endsection
