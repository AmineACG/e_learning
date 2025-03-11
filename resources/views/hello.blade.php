<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Names</title>
</head>
<body>

    <h1>Enter Your Name:</h1>
    
    <form action="/hello" method="POST">
        @csrf
        <input type="text" name="name" required>
        <button type="submit">Submit</button>
    </form>

    <h2>Saved Names:</h2>
    <ul>
        @foreach($names as $name)
            <li>Hello, {{ $name->name }}!</li>
        @endforeach
    </ul>

</body>
</html>
