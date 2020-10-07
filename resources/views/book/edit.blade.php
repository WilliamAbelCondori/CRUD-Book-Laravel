@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Editar Libros
                    </div>

                    <div class="card-body">
                        <form action="{{route('book.update', $book)}}"
                                method="POST"
                                enctype="multipart/form-data">

                            <div class="form-group">
                                <label>Titulo*</label>
                                <input type="text" name="title" class="form-control" 
                                required value="{{old('title', $book->title)}}">
                            </div>

                            <div class="form-group">
                                <label>Descripción*</label>
                                <textarea rows="4" name="description" class="form-control" required>
                                    {{old('description', $book->description)}}
                                </textarea>
                            </div>
                            
                            <div class="form-group">
                                <label>Subtitulo*</label>
                                <input type="text" name="subtitle" class="form-control" required
                                value="{{old('subtitle', $book->subtitle)}}"
                                >
                            </div>

                            <div class="form-group">
                                <label>Precio*</label>
                                <input type="text" name="price" class="form-control" required
                                value="{{old('price', $book->price)}}">
                            </div>

                            <div class="form-group">
                                <label>Autor*</label>
                                <input type="text" name="author" class="form-control" required
                                value="{{old('author', $book->author)}}">
                            </div>

                            <div class="form-group">
                                @csrf
                                @method('PUT')
                                <input type="submit" value="Actualizar" class="btn btn-md btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection