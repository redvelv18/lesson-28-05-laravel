<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function create() {
        return view('books.contact');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|string',
            'feedback' => 'required|string'
        ]);
    $contact = Contact::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'feedback' => $validatedData['feedback'],
    ]);
    return redirect('/books/');
    }
}
