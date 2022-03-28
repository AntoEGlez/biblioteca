@extends('layouts.app')

@section('title', 'Creacion de Libros')

@section('content')
<div class="container p-3 mb-2 bg-light text-dark">
    <h1 class="d-flex justify-content-center">Creacion de un Libro </span></h1>
    <form class="row g-3 py-5" action="{{ route('libros.store') }}" method="POST" class="mb-3">
        @csrf
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Nombre del Libro</label>
            <input type="text" class="form-control" name="name" value=" {{old('name')}}">
            @error('name')
                <small>*{{ $message }}</small>
            @enderror
        </div>
        <div class="col-md-6">
            <label class="form-label">Autor</label>
            <input type="text" class="form-control" name="autor" value=" {{old('autor')}}">
            @error('autor')
            <small>*{{ $message }}</small>
        @enderror
        </div>
        <div class="col-12">
            <label  class="form-label">Categoria</label>
            <input type="text" class="form-control" name="categoria" value="{{ old('categoria')}}">
            @error('categoria')
                <small>*{{ $message }}</small>
            @enderror
        </div>
        <div class="col-12">
            <label class="form-label">Sinopsis</label>
            <input type="text" class="form-control" name="sinopsis" value="{{ old('sinopsis')}}">
            @error('sinopsis')
                <small>*{{ $message }}</small>
            @enderror
        </div>
        <div class="col-md-6">
            <label class="form-label">Idioma</label>
            <input type="text" class="form-control" name="idioma" value="{{ old('idioma')}}">
            @error('idioma')
                <small>*{{ $message }}</small>
            @enderror
        </div>
        <div class="col-md-2">
            <label class="form-label">ISBN</label>
            <input type="number" class="form-control" name="ISBN" value="{{ old('ISBN')}}">
            @error('ISBN')
                <small>*{{ $message }}</small>
            @enderror
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Crear Libro</button>
        </div>
    </form>
</div>
@endsection
