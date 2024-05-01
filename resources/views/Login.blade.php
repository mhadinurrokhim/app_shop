<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <a href="{{ route('/') }}">kembali</a>
<h1>
    silakan login
</h1>
<form action="{{ route('LoginStore') }}" method="post">
    @csrf
    <label for="email"></label>
    <input type="email" name="email">
    <input type="password" name="password">
    <button type="submit">login</button>
</form>
<h2>
    tidak punya akun? <a href="{{ route('daftar') }}"> daftar di sini </a>
</h2>
</body>
</html>
