@extends('layouts.app')

@section('content')

    <h1>Crear Empresa</h1>
    <form method="post" action="/companies">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Nombre de la Empresa</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Logo de la Empresa</label>
            <input type="file" name="logo" class="form-control">
        </div>
        <div class="form-group">
            <label>Acerca de la Empresa</label>
            <textarea name="about" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Guardar</button>
        </div>
        @include('layouts.errors')
    </form>

@endsection