@extends('layouts.app')

@section('content')

    <h1>Bienvenido a {{ $company->name }}</h1>

    <p>{{ $company->about }}</p>

@endsection