@extends('layout')

@section('content')
    <h1>{{ $organ->name }}</h1>

    <ul>
        @foreach($organ->notes as $note)
            <li>{{ $note->body }}</li>
        @endforeach
    </ul>
@stop