<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>

<body>

    <h1> Welcome To Crud App</h1>
    <form action="{{ route('insert') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="name">
        <button type="submit">Submit</button>
    </form>

</body>

</html>
