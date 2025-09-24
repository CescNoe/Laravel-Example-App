@extends('vehicles.template')

@section('title')
    Editar Vehículo
@endsection

@section('body')
    <h1>Editar Vehículo</h1>
    <form action="{{ route('vehicles.update', $vehicle) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nombre</label><br>
        <input type="text" id="name" name="name" value="{{ $vehicle->name }}" required><br>
        <label for="brand">Marca</label><br>
        <input type="text" id="brand" name="brand" value="{{ $vehicle->brand }}" required><br>
        <label for="model">Modelo</label><br>
        <input type="text" id="model" name="model" value="{{ $vehicle->model }}" required><br>
        <label for="year">Año</label><br>
        <input type="text" id="year" name="year" value="{{ $vehicle->year }}" required><br>
        <label for="description">Descripción</label><br>
        <textarea name="description" id="description" cols="50" rows="10">{{ $vehicle->description }}</textarea><br>
        <button type="submit" class="btn btn-primary mb-3">Actualizar</button>

        <a href="{{ route('vehicles.index') }}" class="btn btn-secondary mb-3">Retornar</a>
    </form>
@endsection

