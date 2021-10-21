@extends('layouts.app')

<!-- Секция, содержимое которой обычный текст. -->
@section('title', 'О блоге')

<!-- Секция, содержащая HTML блок. Имеет открывающую и закрывающую часть. -->
@section('content')
    <p>Эксперименты с Laravel на Хекслете</p>

<p>{{ implode(', ', $tags) }}</p>
<h1>Developer:</h1>

@foreach ($team as $member)
    <h2>{{ $member['name'] }}</h2>
    <p>{{ $member['position'] }}</p>
@endforeach

@endsection
