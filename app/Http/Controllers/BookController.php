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
    //'author', 'description', 'price
    public function store(Request $request){
       $book = new Book();
       $book->title = $request->input('title');
       $book->subtitle = $request->input('subtitle');
       $book->author = $request->input('author');
       $book->description = $request->input('description');
       $book->price = $request->input('price');
       $book->save();

       return redirect('/books');
    }
}
