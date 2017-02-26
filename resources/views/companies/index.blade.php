@extends('layouts.app')

@section('content')
    <h1>Hola a todos</h1>

    <h2>Listado de empresas</h2>
    <ul class="list-group">
    @foreach($companies as $company)
        <li class="list-unstyled"><a href="{{ route('company', [$company->slug]) }}"> {{ $company->name }}</a> {{$company->created_at->toFormattedDateString()}}</li>
    @endforeach
    </ul>
@endsection