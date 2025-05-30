
<x-layout>
<ul>
    <x-slot:title>
        Title thing
    </x-slot>
    @foreach($books as $book)
        <li>
            <h2>{{ $book->title }}</h2>
            <div>
                <a href="/books/{{ $book->id }}">Show</a>
                <a href="/books/{{ $book->id }}/edit">Edit</a>
            </div>
        </li>
    @endforeach
</ul>
</x-layout>
