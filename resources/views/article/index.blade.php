@extends('layouts.app')

@section('content')
<style>
    .pagination{
        float: right;
        margin-top: 10px;
    }
</style>
<div class="container-md mt-5">
    <h1 class="text-center">Список статей</h1>

    <div class="row mt-5">
        @foreach($articles as $eachArticle)
            <div class="col-lg-4">
                <div class="card mt-2">
                    <div class="card-body">
                        <h5 class="card-title">{{$eachArticle->name}}</h5>
                        <p class="card-text">{{Str::limit($eachArticle->body, 200)}}</p>
                        <td>
                            <a href="{{route('articles.show', $eachArticle->id)}}">Подробнее</a>
                        </td>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $articles->links() }}
</div>
@endsection
