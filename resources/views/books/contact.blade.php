<x-layout>
<h1>Contact form</h1>

<form action="/books" method="post">
    @csrf
    <div>
    <label for="name"></label>
    <input type="text" id="name" name="name" placeholder="Your name" value="{{ old('name')}}">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    
    <div>
    <label for="email"></label>
    <input type="email" id='email' name="email" placeholder="Your email" value="{{ old('email')}}">
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>

    <div>
    <label for="feedback"></label>
    <input type="text" id='feedback' name="feedback" placeholder="Your feedback" value="{{ old('feedback')}}">
    @error('feedback')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>

    <input type="submit" value="Submit">
</form>
</x-layout>
