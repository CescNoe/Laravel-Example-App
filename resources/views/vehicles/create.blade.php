@extends('vehicles.template')

@section('title')
    Nuevo Vehículo
@endsection

@section('body')
    <h1>Nuevo Vehículo</h1>
    <form action="{{ route('vehicles.store') }}" method="POST">
        @csrf
        <label for="name">Nombre</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="brand">Marca</label><br>
        <input type="text" id="brand" name="brand" required><br>
        <label for="model">Modelo</label><br>
        <input type="text" id="model" name="model" required><br>
        <label for="year">Año</label><br>
        <input type="text" id="year" name="year"><br>
        <label for="description">Descripción</label><br>
        <textarea name="description" id="description" cols="50" rows="10"></textarea><br>

        <button type="submit" class="btn btn-primary mb-3">Registrar</button>

        <a href="{{ route('vehicles.index') }}" class="btn btn-secondary mb-3">Retornar</a>
    </form>
@endsection

