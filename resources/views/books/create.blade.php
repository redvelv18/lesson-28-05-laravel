<h1>New book</h1>
    
<form action="/books" method="post">
    @csrf
    <div>
    <label for="title"></label>
    <input type="text" id="title" name="title" placeholder="title goes here">
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    
    <div>
    <label for="author"></label>
    <input type="text" id='author' name="author" placeholder="author goes here">
    @error('author')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>

    <div>
    <label for="released_at"></label>
    <input type="date" id='released_at' name="released_at" placeholder="date goes here">
    @error('released_at')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>

    <input type="submit" value="Create">
</form>
<a href="/books">All books</a>
