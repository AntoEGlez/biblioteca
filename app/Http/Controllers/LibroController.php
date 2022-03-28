<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLibro;
use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::orderBy('id', 'desc')->paginate();

        return view('libros.index', compact('libros'));
    }
    public function create()
    {
        return view('libros.create');
    }
    public function store(StoreLibro $request)
    {
        $libro = Libro::create($request->all());
        return redirect()->route('libros.show', $libro);
    }

    public function show(Libro $libro)
    {
        return view('libros.show', compact('libro'));
    }
    public function edit(Libro $libro)
    {
        return view('libros.edit', compact('libro'));
    }
    public function update(StoreLibro $request, Libro $libro)
    {
        $libro->update($request->all());
        return redirect()->route('libros.show', $libro);
    }
    public function destroy(Libro $libro)
    {
        $libro->delete();
        return redirect()->route('libros.index');
    }
}
