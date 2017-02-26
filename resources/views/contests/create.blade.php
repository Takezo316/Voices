@extends('layouts.app')

@section('content')

    <h1>Crear Concurso</h1>
    <form method="post" action="/contests">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Nombre del Concurso</label>
            <input type="text" name="title" id="title" class="form-control">
            <input type="hidden" name="company_id" value="{{ $company_id }}">
        </div>
        <div class="form-group">
            <label>Permalink</label>
            <input type="text" name="slug" id="slug" class="form-control">
        </div>
        <div class="form-group">
            <label>Fecha de inicio</label> &nbsp; <input type="date" name="date_ini">
            <label>Fecha de cierre</label> &nbsp; <input type="date" name="date_end">
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

    <script>
        $(document).ready(function() {
            $('#title').change(function() {
                $lowerc = $('#title').val();
                $('#slug').val($lowerc.toLowerCase().replace(/[_\W]+/g, "-").replace(/ /g, "-"));
            });
        });
    </script>
@endsection