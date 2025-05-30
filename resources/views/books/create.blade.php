<h1>New book</h1>
<x-layout>    
<form action="/books" method="post">
    @csrf
    <div>
    <label for="title"></label>
    <input type="text" id="title" name="title" placeholder="title goes here" value="{{ old('title')}}">
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    
    <div>
    <label for="author"></label>
    <input type="text" id='author' name="author" placeholder="author goes here" value="{{ old('author')}}">
    @error('author')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>

    <div>
    <label for="released_at"></label>
    <input type="date" id='released_at' name="released_at" placeholder="date goes here" value="{{ old('released_at')}}">
    @error('released_at')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>

    <input type="submit" value="Create">
</form>
<a href="/books">All books</a>
</x-layout>
