@extends('layouts.app')

@section('content')

    <h1>Bienvenido a {{ $company->name }}</h1>

    <p>{{ $company->about }}</p>
    <div><a href="{{ route('contest_create', [$company->id]) }}" class="btn btn-primary">Crear Concurso</a> </div>
    <hr>
    <div class="col-lg-8">
        @foreach($company->contests as $contest)
           <h3> <a href="{{ route('contest_view', [$company->id, $contest->id]) }}">{{ $contest->title }}</a></h3>
            <article>
                {{ $contest->body }}
            </article>
        @endforeach
    </div>

@endsection