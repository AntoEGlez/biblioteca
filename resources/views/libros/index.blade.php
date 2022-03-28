@extends('layouts.app')

@section('title', 'Libros')

@section('content')
<div class="container p-3 mb-2 bg-light text-dark">
    <h1 class="d-flex justify-content-center">Listado de Libros</h1>
    <a href="{{ route('libros.create') }}" class="btn btn-primary">Crear Libro Nuevo</a>
</div>
    <div class="container py-3 h3">
        
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id del Libro</th>
                <th scope="col">Nombre del Libro</th>
                <th scope="col">Autor</th>
                <th scope="col">Categoria</th>
              </tr>
            </thead>
            @foreach ($libros as $libro)
            <tbody>
              <tr>
                <th scope="row">{{ $libro->id }}</th>
                <td><a href="{{ route('libros.show', $libro) }}">{{ $libro->name }}</a></td>
                <td>{{ $libro->autor }}</td>
                <td>{{ $libro->categoria }}</td>
              </tr>
            </tbody>
            @endforeach
          </table>    
    </div>
    <div class="container">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>
    </div>
    
@endsection
