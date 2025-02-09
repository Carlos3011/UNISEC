@extends('layout')

@section('titulo', 'Contacto')

@section('contenido')
    <h1>Contáctanos</h1>
    <form>
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Mensaje</label>
            <textarea class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
