@extends('layouts.app')

@section('content')

    <h1>Crear Concurso</h1>
    <form method="post" action="/contest/{{ $contest->slug }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div class="form-group">
            <label>Nombre del Concurso</label>
            <input type="text" name="title" id="title" class="form-control" value="{{$contest->title}}">
            <input type="hidden" name="company_id" value="{{ $contest->company_id }}">
        </div>
        <div class="form-group">
            <label>Permalink</label>
            <input type="text" name="slug" id="slug" class="form-control" value="{{ $contest->slug }}">
        </div>
        <div class="form-group">
            <label>Fecha de inicio</label> &nbsp; <input type="date" name="date_ini" value="{{ $contest->date_ini }}">
            <label>Fecha de cierre</label> &nbsp; <input type="date" name="date_end" value="{{ $contest->date_end }}">
        </div>
        <div class="form-group">
            <label>Acerca del concurso</label>
            <textarea name="body" class="form-control">{{ $contest->body }}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Actualizar</button>
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