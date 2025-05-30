<x-layout>
<h1>Edit book</h1>

<form action="/books/{{$editBook->id}}/update" method="post">
    @csrf
    @method('put')
    <input type="text" name="title" value="{{$editBook->title}}">
    <input type="text" name="author" value="{{$editBook->author}}">
    <input type="date" name="released_at" value="{{$editBook->released_at}}">
    <input type="submit" value="Edit">
</form>
</x-layout>