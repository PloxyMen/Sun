<html>

<head>
    <meta charset="UTF-8">
    <title>{{ $bb->title }}::Обьявления</title>
</head>

<body>
    <div class="container">
        <h1 class="my-3 text-center">Обьявления</h1>
        @extends('layouts.base')

        @section('title', $bb->title)

        @section('main')
            <h2>{{ $bb->title }}</h2>
            <p>{{ $bb->content }}</p>
            <p>{{ $bb->price }} руб.</p>
            <p>Автор: {{ $bb->user->name }}</p>
            <p><a href="{{ route('index') }}">На перечень обьявления</a></p>
        @endsection('main')
    </div>
</body>

</html>
