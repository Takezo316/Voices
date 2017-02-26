@extends('layouts.app')

@section('content')

    <h1>Crear Empresa</h1>
    <form method="post" action="/companies">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Nombre de la Empresa</label>
            <input type="text" name="name" id="name" class="form-control">
            <input type="hidden" name="slug" id="slug">
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
    <script>
        $(document).ready(function() {
            $('#name').change(function() {
                $lowerc = $('#name').val();
                $('#slug').val($lowerc.toLowerCase().replace(/ /g, "-"));
            });
        });
    </script>

@endsection