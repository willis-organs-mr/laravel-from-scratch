@extends('layout')

@section('content')
    <h1>All Organs</h1>

    @foreach($organs as $organ)
        <div>
            <a href="{{ $organ->path() }}">{{ $organ->name }}</a>
        </div>
    @endforeach
@stop