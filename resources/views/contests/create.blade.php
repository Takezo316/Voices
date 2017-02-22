@extends('layouts.app')

@section('content')

    <h1>Crear Concurso</h1>
    <form method="post" action="/contests">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Nombre del Concurso</label>
            <input type="text" name="title" class="form-control">
            <input type="hidden" name="company_id" value="{{ $company_id }}">
        </div>
        <div class="form-group">
            <label>Acerca del concurso</label>
            <textarea name="body" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Crear</button>
        </div>
        @include('layouts.errors')
    </form>

@endsection