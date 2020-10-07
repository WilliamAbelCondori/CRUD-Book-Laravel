<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('book.index', compact('books'));
    }

    public function create()
    {
       return view('book.create');
    }
    
    public function store(Request $request){
       $book = new Book();
       $book->title = $request->input('title');
       $book->subtitle = $request->input('subtitle');
       $book->author = $request->input('author');
       $book->description = $request->input('description');
       $book->price = $request->input('price');
       $book->save();

       return redirect('/books');  #redireccionar a libros
    }

    public function edit(Book $book){    
        return view('book.edit', compact('book'));  #retorna vista de edit
    }

    public function update(Request $request, Book $book){ 
        $book->title = $request->input('title');
        $book->subtitle = $request->input('subtitle');
        $book->author = $request->input('author');
        $book->description = $request->input('description');
        $book->price = $request->input('price');
        $book->save(); // UPDATE

        return redirect('/books');
    }

    public function destroy(Book $book){
        $book->delete();
        return redirect('/books');
    }
}
