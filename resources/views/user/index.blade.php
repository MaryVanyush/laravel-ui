<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>User Info</title>
</head>
<body>
    <h1>User Information</h1>
    <ul>
        <li>Name: {{ $user->name }}</li>
        <li>Email: {{ $user->email }}</li>
        <li>ID: {{ $user->id }}</li>
    </ul>
</body>
</html>