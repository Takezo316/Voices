@extends('layouts.app')

@section('content')

    <h1>Bienvenido a {{ $contest->title }}</h1>

    <p>{!! $contest->body !!}</p>

    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal_file">
        Cargar audio
    </button>
    <div>
        <h3>Archivos</h3>

        <table class="table table-striped">
            <tr>
                <th>Autor</th>
                <th>Correo Electr&oacute;nico</th>
                <th>Escuchar</th>
            </tr>
            @foreach($contest->files as $files)
                <tr>
                    <td><a href="mailto:{{ $files->email }}"> {{ $files->first_name }} &nbsp; {{ $files->last_name }}</a></td>
                    <td>{{ $files->email }}</td>
                    <td>
                        <a href="{{ url($files->url_play) }}">{{ $files->title }}</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    @include(' files.create')

@endsection