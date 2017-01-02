@extends('layout')

@section('content')
    <h1>Edit the Note</h1>

    <form method="POST" action="/notes/{{ $note->id }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div class="form-group">
            <textarea name="body" id="body" class="form-control" cols="30" rows="10">{{ $note->body }}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-std">Update Note</button>
        </div>
    </form>
@stop