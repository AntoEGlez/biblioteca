@extends('layouts.app')

@section('title', 'Libro ' . $libro->name)

@section('content')
    <h1 class="d-flex justify-content-center"><span class="badge bg-dark mx-4"> {{ $libro->name }} </span></h1>



    <div class="card container p-5">
        <figure class="figure">
            <img src="..." class="figure-img img-fluid rounded" alt="...">
            <figcaption class="figure-caption "> {{ $libro->name }} </figcaption>
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-12 mb-3">
                    <div class="card overflow-hidden">
                        <div class="card-content">
                            <div class="card-body cleartfix">
                                <div class="media align-items-stretch">
                                    <div class="align-self-center">
                                        <i class="icon-pencil primary font-large-2 mr-2"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Autor</h4>
                                    </div>
                                    <div class="align-self-center">
                                        <h2><strong>{{ $libro->autor }}</strong></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-md-12 mb-3">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body cleartfix">
                                <div class="media align-items-stretch">
                                    <div class="align-self-center">
                                        <i class="icon-speech warning font-large-2 mr-2"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Sinopsis</h4>
                                    </div>
                                    <div class="align-self-center">
                                        <h2><strong>{{ $libro->sinopsis }}</strong></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12 mb-3">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body cleartfix">
                                <div class="media align-items-stretch">
                                    <div class="align-self-center">
                                        <i class="icon-speech warning font-large-2 mr-2"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Idioma</h4>
                                    </div>
                                    <div class="align-self-center">
                                        <h2><strong>{{ $libro->idioma }}</strong></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12 mb-3">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body cleartfix">
                                <div class="media align-items-stretch">
                                    <div class="align-self-center">
                                        <i class="icon-speech warning font-large-2 mr-2"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>ISBN</h4>
                                    </div>
                                    <div class="align-self-center">
                                        <h2><strong>{{ $libro->ISBN }}</strong></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body container d-flex p-2 bd-highlight">
            <a href="{{ route('libros.edit', $libro) }}" class="btn btn-primary mx-4">Editar Libro</a>
                <a href="{{ route('libros.index') }} " class="btn btn-success mx-4">Volver a Libros</a>
                <form action=" {{ route('libros.destroy', $libro) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button submit="button" class="btn btn-danger mx-4">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
