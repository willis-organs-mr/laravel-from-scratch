@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>All Organs</h1>

            @foreach($organs as $organ)
                <div>
                    <a href="{{ $organ->path() }}">{{ $organ->name }}</a>
                </div>
            @endforeach

            <hr>
            <h3>Add a New Organ</h3>

            <form method="POST" action="/organs">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="name" id="name" class="form-control">{{ old('name') }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-std">Add Organ</button>
                </div>
            </form>
            @if (count($errors))
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@stop