<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar</title>
</head>
<body>
<h1>
    Daftar
</h1>
<form action="{{ route('DaftarStore') }}" method="post">
    @csrf
    <label for="name">nama</label>
    <input type="text" name="name">
    <label for="name">emaii</label>
    <input type="email" name="email">
    <label for="password">password</label>
    <input type="password" name="password">
    <button type="submit">submit</button>
</form>
<h2>login??
    <a href="{{ route('login') }}">
        klik di sini
    </a>
</h2>
</body>
</html>
