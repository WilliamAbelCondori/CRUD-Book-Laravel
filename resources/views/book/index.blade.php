@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Libros
                        <a href="{{route('book.create')}}" class="btn btn-sm btn-primary float-right">Crear</a>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Título</th>
                                    <th>Subtitulo</th>
                                    <th>Price</th>
                                    <th colspan="2">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($books as $book)
                                <tr>
                                    <td>{{$book->id}}</td>
                                    <td>{{$book->title}}</td>
                                    <td>{{$book->subtitle}}</td>
                                    <td>{{$book->price}}</td>
                                    <td>
                                        <a  href="{{route('book.edit', $book)}}" class="btn btn-primary btn-sm">Editar</a>
                                    </td>
                                    <td>
                                        <form  action="{{route('book.destroy', $book)}}"  method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit"
                                            value="Eliminar"
                                            class= "btn btn-sm btn-danger"
                                            onclick="return confirm('¿Desea eliminar el elemento ...?')"
                                            >
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    

                </div>
            </div>
        </div>
    </div>
@endsection