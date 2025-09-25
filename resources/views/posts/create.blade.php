<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Fill in the following details</h3>
    <form action="{{ route('posts.store') }}" method="POST">
    @csrf
        <div>
            <input type="text" name="title" placeholder="Title">
            <input type="text" name="content" placeholder="Content">
            <button type="submit">Submit</button>
            @error('title')
                <div style="color: red;">{{ $message }}</div>
            @enderror
            @error('content')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
    </form>
</body>
</html>
