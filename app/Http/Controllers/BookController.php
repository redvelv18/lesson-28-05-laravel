<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
        $books = Book::all();
        return view('books.index', ['books' => $books]);
    }

    public function create() {
        return view('books.create');
    }

    //public function store(Request $request) {
    //    $validated = $request->validate([
    //        'title' => 'required|unique:posts|max:255',
    //        'author' => 'required|max:255',
    //        'released_at' => 'required'
    //
     //   ]);
        
    //    $book = Book::create([
     //       'title' => $request['title'],
     //       'author' => $request['author'],
     //       'released_at' => $request['released_at'],
      //  ]);

     //   return redirect('/books/' . $book->id);
    //}
    public function store(Request $request) {
        //try {
            $validatedData = $request->validate([
                'title' => 'required|string|min:3|max:255',
                'author' => 'required|string',
                'released_at' => 'required'
            ]);
        // }
        // catch (\Exception $e){
        //     \Log::debug("Kļūda: " . $e->getMessage());
        //     //$userMessage = 'Oops! Seems like there is an issue with your record. Try again!';

        // //return redirect()->back()->with('error', $userMessage)->withInput();
        // }
        $book = Book::create([
            'title' => $validatedData['title'],
            'author' => $validatedData['author'],
            'released_at' => $validatedData['released_at'],
        ]);
        return redirect('/books/' . $book->id);
    }

    public function show($id) {
        $book = Book::find($id);
        return view('books.show', ['book' => $book]);
    }

    public function edit($id) {
        $book = Book::find($id);
        $book->save();
        return view('books.edit', ['editBook' => $book]);
    }

    public function destroy($id) {
        $book = Book::find($id);
        $book->delete();
        return redirect('/books');
    }

    public function update(Request $request, $id) {
        $book = Book::find($id);
        $book -> update([
            'title' => $request['title'],
            'author' => $request['author'],
            'released_at' => $request['released_at'],
        ]);
        return redirect('/books');
    }
}
