@extends('layouts.app')

@section('content')
<style>
    .pagination{
        float: right;
        margin-top: 10px;
    }
</style>
<div class="container-md mt-5">
    <h1 class="text-center">Cоздать статью</h1>
    <div class="row mt-5">
        @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="col-lg-8 mx-auto">
        <div class="card mt-2">
            <div class="card-body">
                {{ Form::label('name', 'Название') }}
                <br><br>{{ Form::text('name') }}<br><br>
                {{ Form::label('body', 'Содержание') }}
                <br><br>{{ Form::textarea('body') }}<br><br>
            </div>
        </div>
    </div>
@endsection
