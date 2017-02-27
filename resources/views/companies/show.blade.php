@extends('layouts.app')

@section('content')

    @if (Auth::guest())
    @else
        <a style="float: right;" class="btn btn-primary btn-sm" href="{{ route('company_edit', [$company->slug]) }}">Editar</a>
    @endif
    <h1>Bienvenido a {{ $company->name }}</h1>

    <p>{!! $company->about !!}</p>
    <div><a href="{{ route('contest_create', [$company->slug]) }}" class="btn btn-primary">Crear Concurso</a> </div>
    <hr>
    <div class="col-lg-8">
        @foreach($company->contests as $contest)
           <h3> <a href="{{ route('contest_view', [$company->slug, $contest->slug]) }}">{{ $contest->title }}</a></h3>
            <article>
                {!!  $contest->body !!}
            </article>
        @endforeach
    </div>

@endsection