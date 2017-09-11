<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = $request->input('title');
        $author = $request->input('author');
        
        $sortKey = $request->input('sortKey');
        $sortDirection = $request->input('direction');
        
        $bookQuery = Book::where([
            ['title', 'like', "%$title%"],
            ['author', 'like', "%$author%"]
        ]);
        
        if (!empty($sortKey) && !empty($sortDirection)) {
            $bookQuery->orderBy($sortKey, $sortDirection);
        }
        
        $books = $bookQuery->paginate(10);
        
        return view('books.index')->withBooks($books);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'title' => 'required',
            'author' => 'required'
        ]);
        Book::create($data);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index');
    }
}
