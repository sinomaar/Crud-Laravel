<!-- layout.blade.php -->
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
    @yield('content')
</body>
</html>

<!-- home.blade.php -->
@extends('layout')

@section('title', 'Página Inicial')

@section('content')
    <h1>Bem-vindo à Página Inicial!</h1>
@endsection
