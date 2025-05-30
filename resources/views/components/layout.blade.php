<html>
<nav>
<a href="/books/create">Create a book</a><br>
<a href="/contact">Contact us</a><br>
<a href="/about">About the author</a><br>
<a href="/books">All books</a>
</nav>
    <head>
        <title>{{ $title ?? 'Todo Manager' }}</title>
    </head>

    <body>
        <h1></h1>
        <hr/>
        {{ $slot }}
    </body>
</html>