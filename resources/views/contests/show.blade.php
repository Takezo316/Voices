@extends('layouts.app')

@section('content')

    <h1>Bienvenido a {{ $contest->title }}</h1>

    <p>{{ $contest->body }}</p>

@endsection