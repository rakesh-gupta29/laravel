<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- include if js needs to access it. like jquery or axois  --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Welcome from laravel application</title>
</head>
<body>
    @csrf

    <h1>{{ $globalName }}</h1>
    <h1>{{ $message }}</h1>
</body>
</html>