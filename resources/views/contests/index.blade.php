@extends('layouts.app')

@section('content')
    <h1>Hola a todos</h1>

    <h2>Listado de concursos</h2>
    <ul class="list-group">
    @foreach($contests as $contest)
        <li class="list-unstyled"><a href="/contests/{{ $contest->id }}"> {{ $contest->title }}</a> {{$contest->created_at->toFormattedDateString()}}
            <p>{!! $contest->body !!}}</p>
        </li>
    @endforeach
    </ul>
@endsection