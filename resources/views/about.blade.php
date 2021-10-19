<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel | About</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
<div class="container mt-4">
    <h1>О блоге</h1>
    <p>Эксперименты с Laravell на Хекслете</p>
    <p>{{ implode(', ', $tags) }}</p>
    <h1>Our team:</h1>
    @foreach ($team as $member)
        <h2>{{ $member['name'] }}</h2>
        <p>{{ $member['position'] }}</p>

    @endforeach

</div>
</body>
</html>

