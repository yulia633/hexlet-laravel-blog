@extends('layouts.app')
@include('flash::message')
@section('content')
    <h1>{{ $article->name }}</h1>
    <div>{{ $article->body }}</div>
    <td>
        <td><a href="{{route('articles.edit', $article->id)}}">Редактировать</td>
    </td>
    <td>
        <a href="{{route('articles.index', $article->id)}}">Назад</a>
    </td>
@endsection
