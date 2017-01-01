@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>{{ $organ->name }}</h1>

            <ul class="list-group">
                @foreach($organ->notes as $note)
                    <li class="list-group-item">{{ $note->body }}</li>
                @endforeach
            </ul>
            
            <hr>
            <h3>Add a New Note</h3>

            <form method="POST" action="/organs/{{ $organ->id }}/notes">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="body" id="body" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-std">Add Note</button>
                </div>
            </form>
        </div>
    </div>
@stop