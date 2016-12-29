@extends('layout')

@section('content')
<h1>The Welcome Page Goes Here</h1>
@unless (empty($people))
<p>There are some people.</p>
@else
<p>Something else here.</p>
@endunless

@foreach ($people as $person)
    <li>{{ $person }}</li>
@endforeach
@stop